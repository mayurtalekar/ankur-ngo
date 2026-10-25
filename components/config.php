<?php
// Shared setup — every page requires this file first.

define('ROOT_PATH', dirname(__DIR__));
define('SITE_NAME', 'Ankur Trust');

// Contact form: messages are always saved to storage/messages/.
// Add an address here to also receive each message by email (needs working mail on the host).
define('CONTACT_MAIL_TO', '');

// Database (not used yet)
define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');

date_default_timezone_set('Asia/Kolkata');

// Show errors only on localhost; on the live site log them instead
$isLocal = in_array($_SERVER['SERVER_NAME'] ?? '', ['localhost', '127.0.0.1'], true);
if ($isLocal) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', ROOT_PATH . '/storage/logs/php-error.log');
}

require __DIR__ . '/functions.php';
$site = require __DIR__ . '/site.php';

session_start([
    'cookie_httponly' => true,
    'cookie_samesite' => 'Lax',
    'cookie_secure'   => !empty($_SERVER['HTTPS']),
]);
