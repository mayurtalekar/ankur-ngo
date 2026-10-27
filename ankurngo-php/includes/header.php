<?php
$navigationItems = [
    'index' => ['Home', 'index.php'],
    'about' => ['About Us', '#'],
    'pvtg-connect' => ['PVTG Connect', '#'],
    'projects' => ['Projects', '#'],
    'get-involved' => ['Get Involved', '#'],
    'reports' => ['Reports', '#'],
    'news' => ['News', '#'],
    'contact' => ['Contact Us', '#'],
];
?>
<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="index.php">
            <img src="img/logo.png" alt="" width="48" height="48">
            <span class="logo-text">Ankur Trust<small>Raigad, Maharashtra</small></span>
        </a>

        <button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>

        <nav id="site-nav" class="site-nav" aria-label="Main">
            <?php foreach ($navigationItems as $key => [$label, $href]): ?>
            <a href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"
                <?= $pageKey === $key ? ' aria-current="page"' : '' ?>><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a>
            <?php endforeach; ?>
            <a class="btn btn-blush btn-sm" href="donate.php">Donate Now</a>
        </nav>
    </div>
</header>