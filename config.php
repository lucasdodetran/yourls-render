<?php
define( 'YOURLS_DB_USER', $_ENV['DB_USER'] ?? 'yourls' );
define( 'YOURLS_DB_PASS', $_ENV['DB_PASS'] ?? 'yourls' );
define( 'YOURLS_DB_NAME', $_ENV['DB_NAME'] ?? 'yourls' );
define( 'YOURLS_DB_HOST', $_ENV['DB_HOST'] ?? 'localhost' );
define( 'YOURLS_DB_PREFIX', 'yourls_' );

define( 'YOURLS_SITE', $_ENV['YOURLS_SITE'] ?? 'http://localhost' );

define( 'YOURLS_HOURS_OFFSET', '-3' ); 
define( 'YOURLS_LANG', 'pt_BR' ); 

define( 'YOURLS_UNIQUE_URLS', true );
define( 'YOURLS_PRIVATE', true );

$yourls_user_passwords = [
    $_ENV['ADMIN_USER'] ?? 'admin' => $_ENV['ADMIN_PASS'] ?? 'senha123'
];

define( 'YOURLS_DEBUG', false );
define( 'YOURLS_URL_CONVERT', 36 );

$yourls_reserved_URL = [
    'admin', 'api', 'login', 'logout', 'setup', 'install'
];

define( 'YOURLS_COOKIEKEY', $_ENV['COOKIEKEY'] ?? 'qQ4KhL_pu|s@Lk#%:b^{A!vrV3vrF3,C6CfbT:6' );
