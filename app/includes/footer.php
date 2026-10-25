<?php
$footerLinks = [
    'Organisation' => [
        'about'        => 'About Us',
        'projects'     => 'Projects',
        'pvtg-connect' => 'PVTG Connect',
        'news'         => 'News',
        'reports'      => 'Reports',
    ],
    'Engage' => [
        'csr-partnerships' => 'CSR Partnerships',
        'get-involved'     => 'Get Involved',
        'donate'           => 'Donate Now',
        'contact'          => 'Contact Us',
    ],
];

$compliance = ['MCA CSR-1 Registered', 'Section 80G', 'Section 12A', 'FCRA Certified'];
?>
</main>

<footer class="site-footer">
    <svg class="footer-edge" viewBox="0 0 1440 70" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 70 V38 C140 10 260 56 420 34 S700 4 860 30 1120 64 1280 34 1400 16 1440 24 V70Z"/>
    </svg>
    <div class="footer-bg" aria-hidden="true"><span class="footer-watermark" lang="mr">अंकुर</span></div>

    <div class="container">
        <!-- CTA band -->
        <div class="footer-cta">
            <div>
                <p class="footer-kicker">Partner with us</p>
                <p class="footer-cta-title">Stand with tribal families of <em>Raigad</em>.</p>
            </div>
            <div class="footer-cta-actions">
                <a class="btn btn-blush" href="<?= url('csr-partnerships') ?>">Partner With Us</a>
                <a class="btn btn-ghost" href="<?= url('donate') ?>">Donate Now</a>
            </div>
        </div>

        <div class="footer-grid">
            <div class="footer-about">
                <a class="footer-brand" href="<?= url() ?>">
                    <img src="<?= asset('images/logo.png') ?>" alt="" width="64" height="64">
                    <span><?= e(SITE_NAME) ?><small>Raigad, Maharashtra</small></span>
                </a>
                <p>Structural resilience and administrative empowerment for Katkari PVTG and Thakar communities across Raigad district, Maharashtra.</p>
                <ul class="footer-social" aria-label="Social media">
                    <?php foreach ($site['social'] as $name => $social): ?>
                        <li>
                            <a href="<?= e($social['url']) ?>" aria-label="<?= e($name) ?>" target="_blank" rel="noopener">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $social['icon'] ?></svg>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php foreach ($footerLinks as $heading => $links): ?>
                <nav class="footer-col" aria-label="<?= e($heading) ?>">
                    <h3><?= e($heading) ?></h3>
                    <ul class="footer-links">
                        <?php foreach ($links as $slug => $label): ?>
                            <li><a href="<?= url($slug) ?>"><?= e($label) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endforeach; ?>

            <div class="footer-col">
                <h3>Compliance</h3>
                <ul class="footer-chips">
                    <?php foreach ($compliance as $item): ?>
                        <li>
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg>
                            <?= e($item) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a class="footer-report-link" href="<?= url('reports') ?>">Annual &amp; Audit Reports <span aria-hidden="true">→</span></a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
            <p class="footer-made">Rooted in Raigad <span aria-hidden="true">✿</span></p>
            <a class="back-to-top" href="#" aria-label="Back to top">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
            </a>
        </div>
    </div>
</footer>

<script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
