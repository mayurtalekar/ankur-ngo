<?php
// Front controller: every request comes through here.

// PHP built-in server: let it serve real files (css, js, images) directly
if (PHP_SAPI === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

require __DIR__ . '/../app/config/config.php';
require APP_PATH . '/includes/functions.php';

$routes = [
    ''             => ['page' => 'home',         'title' => 'Home',                  'darkHero' => true],
    'about'        => ['page' => 'about',        'title' => 'About Us & Governance', 'darkHero' => true],
    'get-involved' => ['page' => 'get-involved', 'title' => 'Get Involved'],
    'reports'      => ['page' => 'reports',      'title' => 'Reports',               'darkHero' => true],
    'news'         => ['page' => 'news',         'title' => 'News'],
    'pvtg-connect' => ['page' => 'pvtg-connect', 'title' => 'PVTG Connect'],
    'projects'     => ['page' => 'projects',     'title' => 'Projects'],
    'contact'      => ['page' => 'contact',      'title' => 'Contact Us',            'darkHero' => true, 'handler' => 'contact'],
    'donate'       => ['page' => 'donate',       'title' => 'Donate Now'],
];

$path  = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$route = $routes[$path] ?? null;

if ($route === null) {
    http_response_code(404);
    $route = ['page' => '404', 'title' => 'Page Not Found'];
}

// Form submissions are processed (and redirected) before any HTML is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($route['handler'])) {
    require APP_PATH . '/handlers/' . $route['handler'] . '.php';
    exit;
}

$pageTitle   = $route['title'];
$currentPath = $path;
$bodyClass   = 'page-' . $route['page'] . (!empty($route['darkHero']) ? ' has-dark-hero' : '');

require APP_PATH . '/includes/header.php';
require APP_PATH . '/pages/' . $route['page'] . '.php';
require APP_PATH . '/includes/footer.php';
