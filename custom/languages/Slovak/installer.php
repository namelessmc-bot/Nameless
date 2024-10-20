<?php
/*
 *  Made by RobiNN
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr13
 *
 *  License: MIT
 *
 *  Slovak Language - Installation
 */

$language = [
    /*
     *  Installation
     */
    'install' => 'Inštalovať',
    'pre-release' => 'pre-release',
    'installer_welcome' => 'Vitajte v NamelessMC verzie 2.0 pre-release.',
    'pre-release_warning' => 'Upozorňujeme, že toto predbežné vydanie nie je určené na použitie na verejnej stránke.',
    'installer_information' => 'Inštalátor vás prevedie procesom inštalácie.',
    'terms_and_conditions' => 'Pokračovaním vyjadrujete súhlas s obchodnými podmienkami.',
    'new_installation_question' => 'Po prvé, ide o novú inštaláciu?',
    'new_installation' => 'Nová inštalácia &raquo;',
    'upgrading_from_v1' => 'Aktualizácia z v1 &raquo;',
    'requirements' => 'Požiadavky:',
    'config_writable' => 'core/config.php zapisovateľné',
    'cache_writable' => 'Cache zapisovateľná',
    'template_cache_writable' => 'Cache šablóny zapisovateľná',
    'exif_imagetype_banners_disabled' => 'Bez funkcie exif_imagetype budú bannery servera zakázané.',
    'requirements_error' => 'Ak chcete pokračovať v inštalácii, musíte mať nainštalované všetky požadované rozšírenia a mať správne nastavené oprávnenia.',
    'proceed' => 'Pokračovať',
    'database_configuration' => 'Konfigurácia databázy',
    'database_address' => 'Adresa databázy',
    'database_port' => 'Port databázy',
    'database_username' => 'Užívateľské meno databázy',
    'database_password' => 'Heslo databázy',
    'database_name' => 'Názov databázy',
    'nameless_path' => 'Cesta inštalácie',
    'nameless_path_info' => 'Toto je cesta, na ktorej je Nameless nainštalovaný, vo vzťahu k vašej doméne. Ak je napríklad Nameless nainštalovaný na adrese example.com/forum, musí to byť <strong>forum</strong>. Ak nie je Nameless v podpriečinku, nechajte ho prázdne.',
    'friendly_urls' => 'Priateľské URL',
    'friendly_urls_info' => 'Priateľské adresy URL zlepšia čitateľnosť adries URL vo vašom prehliadači. <br /> Napríklad: <br /><code>example.com/index.php?route=/forum</code><br />sa stane:<br /><code>example.com/forum</code><br /><div class="ui inverted orange segment"><i class="exclamation circle icon"></i><strong>Dôležité!</strong><br />Váš server musí byť správne nakonfigurovaný, aby to fungovalo. To, či môžete povoliť túto možnosť, zobrazíte kliknutím <a href="./rewrite_test" target="_blank" style="color:#2185D0">tu</a>.</div>',
    'enabled' => 'Povolené',
    'disabled' => 'Zakázané',
    'character_set' => 'Znaková sada',
    'database_engine' => 'Engine databázového úložiska',
    'host' => 'Hostname',
    'host_help' => 'Hostname je <strong>základná URL adresa</strong> vášho webu. Sem nezahŕňajte podpriečinky z poľa Cesta inštalácie ani http(s)://!',
    'database_error' => 'Skontrolujte, či sú všetky polia vyplnené.',
    'submit' => 'Potvrdiť',
    'installer_now_initialising_database' => 'Inštalátor teraz inicializuje databázu. Môže to chvíľu trvať...',
    'configuration' => 'Konfigurácia',
    'configuration_info' => 'Zadajte základné informácie o svojom webe. Tieto hodnoty je možné neskôr zmeniť prostredníctvom admin panela.',
    'configuration_error' => 'Zadajte platný názov webu s dĺžkou od 1 do 32 znakov a platné emailové adresy s dĺžkou od 4 do 64 znakov.',
    'hostname_error' => 'Zadajte platný názov hostiteľa bez http:// alebo https://',
    'site_name' => 'Názov stránky',
    'contact_email' => 'Kontaktný email',
    'outgoing_email' => 'Odchádzajúci email',
    'language' => 'Jazyk',
    'initialising_database_and_cache' => 'Inicializuje sa databáza a cache, čakajte prosím...',
    'unable_to_login' => 'Nie je možné sa prihlásiť.',
    'unable_to_create_account' => 'Nie je možné vytvoriť účet',
    'input_required' => 'Zadajte platné užívateľské meno, emailovú adresu a heslo.',
    'input_minimum' => 'Uistite sa, že vaše užívateľské meno má minimálne 3 znaky, vaša emailová adresa má minimálne 4 znaky a vaše heslo má minimálne 6 znakov.',
    'input_maximum' => 'Uistite sa, že vaše užívateľské meno má najviac 20 znakov a vaša emailová adresa a heslo majú maximálne 64 znakov.',
    'email_invalid' => 'Váš email je neplatný.',
    'passwords_must_match' => 'Vaše heslá sa nezhodujú.',
    'creating_admin_account' => 'Vytváranie admin účtu',
    'enter_admin_details' => 'Zadajte podrobnosti pre admin účet.',
    'username' => 'Užívateľské meno',
    'email_address' => 'Emailová adresa',
    'password' => 'Heslo',
    'confirm_password' => 'Potvrdiť heslo',
    'upgrade' => 'Aktualizovať',
    'input_v1_details' => 'Zadajte podrobnosti databázy pre vašu Nameless v1 inštaláciu.',
    'installer_upgrading_database' => 'Počkajte, kým inštalátor inovuje vašu databázu...',
    'errors_logged' => 'Chyby boli zaznamenané. Kliknutím na Pokračovať pokračujte v aktualizácii.',
    'continue' => 'Pokračovať',
    'convert' => 'Konvertovať',
    'convert_message' => 'Na záver chcete previesť z iného fórum softvéru?',
    'yes' => 'Áno',
    'no' => 'Nie',
    'converter' => 'Konvertor',
    'back' => 'Späť',
    'unable_to_load_converter' => 'Nepodarilo sa načítať konvertor!',
    'finish' => 'Dokončenie',
    'finish_message' => 'Ďakujeme, že ste si nainštalovali NamelessMC! Teraz môžete prejsť na StaffCP, kde môžete ďalej konfigurovať svoju webstránku.',
    'support_message' => 'Ak potrebujete podporu, navštívte našu <a href="https://namelessmc.com" target="_blank">webstránku</a> alebo môžete navštíviť aj náš <a href="https://discord.gg/nameless" target="_blank">Discord server</a> alebo naše <a href="https://github.com/NamelessMC/Nameless/" target="_blank">GitHub úložisko</a>.',
    'credits' => 'Kredity',
    'credits_message' => 'Obrovské poďakovanie všetkým <a href="https://github.com/NamelessMC/Nameless/graphs/contributors" target="_blank">NamelessMC prispievateľom</a> od roku 2014',

    'step_home' => 'Domov',
    'step_requirements' => 'Požiadavky',
    'step_general_config' => 'Všeobecná konfigurácia',
    'step_database_config' => 'Konfigurácia databázy',
    'step_site_config' => 'Konfigurácia stránky',
    'step_admin_account' => 'Admin účet',
    'step_conversion' => 'Konverzia',
    'step_finish' => 'Dokončiť',

    'general_configuration' => 'Všeobecná konfigurácia',
    'reload' => 'Znovu načítať',
    'reload_page' => 'Znovu načítať stránku',
    'no_converters_available' => 'Nie sú k dispozícii žiadne konvertory.',
    'config_not_writable' => 'Do konfiguračného súboru nie je možné zapisovať.',

    'session_doesnt_exist' => 'Nepodarilo zistiť session. Ukladanie session je podmienkou používania Nameless. Skúste to znova a ak problém pretrváva, požiadajte o podporu svojho hostiteľa webu.'
];
