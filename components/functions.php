<?php
// Escape output for HTML
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// Link to a page: url('about') → about.php, url('contact#form') → contact.php#form, url() → home.
// Links are relative, so the site works on a domain or inside any subfolder.
function url(string $page = ''): string
{
    [$name, $hash] = array_pad(explode('#', $page, 2), 2, null);
    $link = $name === '' ? './' : $name . '.php';
    return $hash !== null ? $link . '#' . $hash : $link;
}

// Shared PDO connection (only connects when first called)
function db(): PDO
{
    static $pdo = null;
    if ($pdo === null) {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_NAME);
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    return $pdo;
}
