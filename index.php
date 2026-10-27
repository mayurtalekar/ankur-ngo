<?php
require __DIR__ . '/components/config.php';

$pageTitle   = 'Home';
$currentPath = '';
$bodyClass   = 'page-home has-dark-hero';

require __DIR__ . '/components/header.php';
?>
<?php
// ---- Page content (edit text here) ----

$impactStats = [
    ['value' => 366,    'prefix' => '',  'suffix' => '+', 'label' => 'Direct Entitlement Linkages', 'text' => 'Scheduled Tribe caste certificates, ration cards, and statutory social security schemes.'],
    ['value' => 540,    'prefix' => '',  'suffix' => '',  'label' => 'Households Supported',        'text' => 'Resolution of delayed housing instalments (PMAY-G/PM-JANMAN) and unpaid MGNREGA wages.'],
    ['value' => 170000, 'prefix' => '₹', 'suffix' => '',  'label' => 'Revolving Capital',           'text' => 'Zero-interest micro-loans managed directly by indigenous women\'s collectives.'],
    ['value' => 100,    'prefix' => '',  'suffix' => '%', 'label' => 'Statutory Compliance',        'text' => 'Certified under MCA CSR-1, Section 80G, 12A, and FCRA.'],
];

$programs = [
    [
        'title' => 'Katkari PVTG Empowerment',
        'text'  => 'Securing constitutional identity, caste certificates, and institutional protection for Maharashtra\'s vulnerable indigenous groups.',
        'link'  => 'katkari-pvtg',
        'icon'  => '<path d="M12 3 4 6v6c0 4.5 3.4 8.3 8 9 4.6-.7 8-4.5 8-9V6l-8-3Z"/><path d="m9 12 2 2 4-4"/>',
    ],
    [
        'title' => 'Women’s Leadership & Livelihood',
        'text'  => 'Capitalizing zero-interest revolving funds to dismantle predatory debt and build community-managed financial resilience.',
        'link'  => 'womens-leadership',
        'icon'  => '<circle cx="9" cy="7" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M15 15.5c.6-.3 1.3-.5 2-.5 2.2 0 4 1.8 4 4"/>',
    ],
    [
        'title' => 'Ankur Tribal Children’s Home',
        'text'  => 'Residential education, holistic nutrition, and character-building for 55 children to break intergenerational wage-labour cycles.',
        'link'  => 'tribal-childrens-home',
        'icon'  => '<path d="M3 11 12 4l9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-5h4v5"/>',
    ],
    [
        'title' => 'Land Security & Agroforestry (FRA 2006)',
        'text'  => 'Facilitating Individual Forest Rights (IFR), tenancy claims, and sustainable community forest management (CFRMC).',
        'link'  => 'land-security-agroforestry',
        'icon'  => '<path d="M12 21v-6"/><path d="M12 3 6 11h3l-4 5h14l-4-5h3l-6-8Z"/>',
    ],
    [
        'title' => 'Community Health & Senior Care',
        'text'  => 'Mobile diagnostic clinics across 30 hamlets, maternal wellness, and doorstep pension access for vulnerable elders.',
        'link'  => 'community-health-senior-care',
        'icon'  => '<path d="M20.8 5.6a5 5 0 0 0-7.1 0L12 7.3l-1.7-1.7a5 5 0 0 0-7.1 7.1L12 21.5l8.8-8.8a5 5 0 0 0 0-7.1Z"/><path d="M12 10v5M9.5 12.5h5"/>',
    ],
    [
        'title' => 'Civil Identity & Legal Literacy',
        'text'  => 'Training local Gram Sabhas to file formal administrative grievances and claim statutory rights independently.',
        'link'  => 'civil-identity-legal-literacy',
        'icon'  => '<path d="M12 3v18"/><path d="M5 21h14"/><path d="M3 8h18"/><path d="m6 8-3 7a3 3 0 0 0 6 0L6 8Z"/><path d="m18 8-3 7a3 3 0 0 0 6 0l-3-7Z"/>',
    ],
];

$credibility = [
    ['title' => '30+ Years of Ground Presence', 'text' => 'Deep-rooted trust and non-activist collaboration across Raigad district hamlets, revenue departments, and local governance bodies.'],
    ['title' => 'Audit-Ready Data Systems',     'text' => 'Every intervention is mapped to verifiable field metrics, giving CSR heads and grantmakers clear, time-stamped impact visibility.'],
    ['title' => 'Community Governance Model',   'text' => 'Projects are designed and executed alongside local Gram Sabhas, CFR Committees, and women-led federations for long-term sustainability.'],
];

$pathways = [
    ['title' => 'Corporate CSR Leaders',         'text' => 'Deploy compliant corporate funds into high-impact, verifiable tribal development portfolios.',            'button' => 'Request CSR Portfolio', 'link' => 'csr-partnerships'],
    ['title' => 'Institutional Grantmakers',     'text' => 'Partner on multi-year programs covering land security, child development, and legal literacy.',         'button' => 'Explore Grant Options', 'link' => 'csr-partnerships#grants'],
    ['title' => 'Legal & Technical Volunteers',  'text' => 'Offer technical, policy, or field expertise to strengthen community-led rights claims.',                 'button' => 'Volunteer With Us',     'link' => 'get-involved'],
    ['title' => 'Individual Donors',             'text' => 'Support direct educational, medical, or administrative linkage drives for remote families.',            'button' => 'Donate Online',         'link' => 'donate'],
];
?>

<!-- 1. Hero -->
<section class="hero">
    <div class="hero-bg" aria-hidden="true">
        <span class="blob blob-1"></span>
        <span class="blob blob-2"></span>
        <span class="blob blob-3"></span>
        <span class="hero-watermark" lang="mr">अंकुर</span>
    </div>
    <div class="petals" aria-hidden="true"></div>

    <div class="container hero-inner">
        <div class="hero-content">
            <p class="eyebrow" data-reveal>Ankur Trust · Raigad District, Maharashtra</p>
            <h1 data-split>Structural Resilience and Administrative Empowerment for <em>Tribal Communities</em></h1>
            <p class="hero-lead" data-reveal style="--d: .5s">Partnering with Katkari PVTG and Thakar families across Raigad district to secure land titles, institutional rights, women-led financial autonomy, and dignified primary care.</p>
            <div class="hero-actions" data-reveal style="--d: .7s">
                <a class="btn btn-blush btn-lg" href="<?= url('csr-partnerships') ?>">Partner With Us (CSR &amp; Grants)</a>
                <a class="btn btn-ghost btn-lg" href="#programs">Explore Our 6 Program Pillars</a>
            </div>
        </div>

        <div class="hero-emblem" data-reveal style="--d: .3s" aria-hidden="true">
            <svg class="emblem-ring" viewBox="0 0 200 200">
                <circle cx="100" cy="100" r="94" />
                <circle cx="100" cy="100" r="86" />
            </svg>
            <span class="emblem-glow"></span>
            <img src="img/logo.png" alt="" width="360" height="360">
        </div>
    </div>

    <a class="scroll-cue" href="#impact" aria-label="Scroll to impact numbers"><span></span></a>

    <svg class="brush-edge" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 48 C120 20 220 70 360 44 S600 10 760 40 1020 76 1180 42 1360 18 1440 36 V80 H0Z"/>
    </svg>
</section>

<!-- 2. Impact ribbon -->
<section id="impact" class="impact-ribbon" aria-labelledby="impact-heading">
    <div class="container">
        <h2 id="impact-heading" class="impact-heading" data-reveal>Field Achievements · H1 FY 2025–26</h2>
        <div class="impact-grid">
            <?php foreach ($impactStats as $i => $stat): ?>
                <div class="impact-item" data-reveal style="--d: <?= $i * 0.12 ?>s">
                    <p class="impact-value">
                        <?= e($stat['prefix']) ?><span data-count="<?= $stat['value'] ?>"><?= number_format($stat['value']) ?></span><?= e($stat['suffix']) ?>
                    </p>
                    <p class="impact-label"><?= e($stat['label']) ?></p>
                    <p class="impact-text"><?= e($stat['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. Program pillars -->
<section id="programs" class="section programs">
    <div class="container">
        <div class="section-head" data-reveal>
            <p class="eyebrow">Our 6 Program Pillars</p>
            <h2>Strategic Pathways to <em>Self-Reliance</em></h2>
            <p>Shifting the narrative from charity dependence to structural community rights and administrative self-advocacy.</p>
        </div>
        <div class="card-grid">
            <?php foreach ($programs as $i => $program): ?>
                <a class="program-card" href="<?= url($program['link']) ?>" data-reveal style="--d: <?= ($i % 3) * 0.1 ?>s">
                    <span class="program-num"><?= sprintf('%02d', $i + 1) ?></span>
                    <span class="program-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $program['icon'] ?></svg>
                    </span>
                    <h3><?= e($program['title']) ?></h3>
                    <p><?= e($program['text']) ?></p>
                    <span class="card-link">Learn more <span aria-hidden="true">→</span></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Keyword ribbon -->
<div class="marquee" aria-hidden="true">
    <div class="marquee-track">
        <?php for ($r = 0; $r < 2; $r++): ?>
            <?php foreach (['Land Titles', 'Forest Rights', 'Women’s Collectives', 'Caste Certificates', 'Children’s Home', 'Mobile Clinics', 'Gram Sabha Power', 'Legal Literacy'] as $word): ?>
                <span><?= e($word) ?></span><i>✿</i>
            <?php endforeach; ?>
        <?php endfor; ?>
    </div>
</div>

<!-- 4. Credibility -->
<section class="section credibility">
    <span class="section-watermark" lang="mr" aria-hidden="true">अंकुर</span>
    <div class="container">
        <div class="section-head" data-reveal>
            <p class="eyebrow">Why Partners Trust Us</p>
            <h2>Built for <em>Institutional Excellence</em></h2>
        </div>
        <div class="credibility-grid">
            <?php foreach ($credibility as $i => $item): ?>
                <div class="credibility-item" data-reveal style="--d: <?= $i * 0.15 ?>s">
                    <span class="credibility-num"><?= $i + 1 ?></span>
                    <h3><?= e($item['title']) ?></h3>
                    <p><?= e($item['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Action hub -->
<section class="section action-hub">
    <div class="petals petals-soft" aria-hidden="true"></div>
    <div class="container">
        <div class="section-head" data-reveal>
            <p class="eyebrow">Institutional Action Hub</p>
            <h2>Engage with <em>Ankur Trust</em></h2>
        </div>
        <div class="pathway-grid">
            <?php foreach ($pathways as $i => $pathway): ?>
                <div class="pathway-card" data-reveal style="--d: <?= $i * 0.1 ?>s">
                    <h3><?= e($pathway['title']) ?></h3>
                    <p><?= e($pathway['text']) ?></p>
                    <a class="btn btn-blush" href="<?= url($pathway['link']) ?>"><?= e($pathway['button']) ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/components/footer.php'; ?>
