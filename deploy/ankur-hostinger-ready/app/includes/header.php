<?php
$navItems = [
    ''             => 'Home',
    'about'        => 'About Us',
    'pvtg-connect' => 'PVTG Connect',
    'projects'     => 'Projects',
    'get-involved' => 'Get Involved',
    'reports'      => 'Reports',
    'news'         => 'News',
    'contact'      => 'Contact Us',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?> | <?= e(SITE_NAME) ?></title>
    <meta name="description" content="Ankur Trust partners with Katkari PVTG and Thakar tribal families in Raigad district, Maharashtra, for land rights, women-led livelihoods, education and primary care.">
    <meta name="theme-color" content="#2b140d">
    <link rel="icon" type="image/png" href="<?= asset('images/logo.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700;9..144,800&family=Inter:wght@400;500;600;700&family=Kalam:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <script>document.documentElement.classList.add('js');</script>
</head>
<body class="<?= e($bodyClass) ?>">
<a class="skip-link" href="#main">Skip to content</a>
<div class="scroll-progress" aria-hidden="true"></div>

<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="<?= url() ?>">
            <img src="<?= asset('images/logo.png') ?>" alt="" width="48" height="48">
            <span class="logo-text"><?= e(SITE_NAME) ?><small>Raigad, Maharashtra</small></span>
        </a>

        <button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>

        <nav id="site-nav" class="site-nav" aria-label="Main">
            <?php foreach ($navItems as $slug => $label): ?>
                <a href="<?= url($slug) ?>"<?= $currentPath === $slug ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
            <?php endforeach; ?>
            <a class="btn btn-blush btn-sm" href="<?= url('donate') ?>">Donate Now</a>
        </nav>
    </div>
</header>

<main id="main">
