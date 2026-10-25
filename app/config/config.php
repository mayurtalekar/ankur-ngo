<?php
define('ROOT_PATH', dirname(__DIR__, 2));
define('APP_PATH', ROOT_PATH . '/app');
define('SITE_NAME', 'Ankur Trust');

date_default_timezone_set('Asia/Kolkata');

// Load .env (simple KEY=VALUE parser)
$envFile = ROOT_PATH . '/.env';
if (is_file($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) {
            continue;
        }
        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $_ENV[$key] = $value;
    }
}

define('APP_ENV', $_ENV['APP_ENV'] ?? 'production');
// Empty APP_URL: use the folder index.php is served from, so the site also works in a subfolder (example.com/ankurngo)
define('BASE_URL', rtrim(($_ENV['APP_URL'] ?? '') ?: str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/'));

if (APP_ENV === 'local') {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', ROOT_PATH . '/storage/logs/php-error.log');
}

$site = require __DIR__ . '/site.php';

session_start([
    'cookie_httponly' => true,
    'cookie_samesite' => 'Lax',
    'cookie_secure'   => !empty($_SERVER['HTTPS']),
]);
