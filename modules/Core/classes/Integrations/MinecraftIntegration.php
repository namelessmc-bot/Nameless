<?php

/*
 *	Made by Partydragen
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr13
 *
 *  License: MIT
 *
 *  Minecraft Integration
 */

class MinecraftIntegration extends IntegrationBase {

    private Language $_language;

    public function __construct(Language $language) {
        $this->_name = 'Minecraft';
        $this->_icon = 'fas fa-cubes';
        $this->_language = $language;

        parent::__construct();
    }

    public function onLinkRequest(User $user) {
        require(ROOT_PATH . '/core/integration/uuid.php'); // For UUID stuff

        $queries = new Queries();
        $username = $user->data()->username;

        // Ensure username doesn't already exist
        $integrationUser = new IntegrationUser($this, $username, 'username');
        if ($integrationUser->exists()) {
            Session::flash('connections_error', str_replace('{x}', $this->getName(), $this->_language->get('user', 'integration_username_already_linked')));
            return;
        }

        $uuid_linking = $queries->getWhere('settings', ['name', '=', 'uuid_linking']);
        $uuid_linking = $uuid_linking[0]->value;
        if ($uuid_linking == 1) {
            // Perform validation on Minecraft name
            $profile = ProfileUtils::getProfile(str_replace(' ', '%20', $username));

            $mcname_result = $profile ? $profile->getProfileAsArray() : [];

            if (isset($mcname_result['username'], $mcname_result['uuid']) && !empty($mcname_result['username']) && !empty($mcname_result['uuid'])) {
                // Valid
                $uuid = Output::getClean($mcname_result['uuid']);

                // Ensure identifier doesn't already exist
                $integrationUser = new IntegrationUser($this, $uuid, 'identifier');
                if ($integrationUser->exists()) {
                    Session::flash('connections_error', str_replace('{x}', $this->getName(), $this->_language->get('user', 'integration_identifier_already_linked')));
                    return;
                }

            } else {
                // Invalid
                Session::flash('connections_error', $this->_language->get('user', 'invalid_mcname'));
                return;
            }
        } else {
            $uuid = '';
        }

        $code = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);

        $integrationUser = new IntegrationUser($this);
        $integrationUser->linkIntegration($user, $uuid, $username, false, $code);

        // API verification
        $api_verification = $queries->getWhere('settings', ['name', '=', 'api_verification']);
        $api_verification = $api_verification[0]->value;

        if ($api_verification == '1') {
            Session::flash('connections_success', str_replace('{x}', Output::getClean($code), $this->_language->get('user', 'validate_account_command')));
        } else {
            Session::flash('connections_success', str_replace('{x}', Output::getClean($this->getName()), $this->_language->get('user', 'integration_linked')));
        }
    }

    public function onVerifyRequest(User $user) {
        $queries = new Queries();
        $integrationUser = new IntegrationUser($this, $user->data()->id, 'user_id');
        
        // API verification
        $api_verification = $queries->getWhere('settings', ['name', '=', 'api_verification']);
        $api_verification = $api_verification[0]->value;
        
        if ($api_verification == '1') {
            Session::flash('connections_success', str_replace('{x}', Output::getClean($integrationUser->data()->code), $this->_language->get('user', 'validate_account_command')));
        } else {
            Session::flash('connections_error', str_replace('{x}', Output::getClean($this->_name), $this->_language->get('user', 'integration_verify_unconfigurated')));
        }
    }

    public function onUnlinkRequest(User $user) {
        $integrationUser = new IntegrationUser($this, $user->data()->id, 'user_id');
        $integrationUser->unlinkIntegration();
        
        Session::flash('connections_success', str_replace('{x}', Output::getClean($this->_name), $this->_language->get('user', 'integration_unlinked')));
    }

    public function onSuccessfulVerification(IntegrationUser $integrationUser) {
    }
}