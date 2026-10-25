<?php
require __DIR__ . '/components/config.php';

$pageTitle   = 'About Us & Governance';
$currentPath = 'about';
$bodyClass   = 'page-about has-dark-hero';

require __DIR__ . '/components/header.php';
?>
<?php
// ---- Page content (edit text here) ----

$proofItems = [
    ['count' => 30,   'suffix' => '+ Years', 'title' => '',                        'text' => 'Uninterrupted presence and community trust across Raigad district.'],
    ['count' => null, 'suffix' => '',        'title' => 'Non-Activist Framework', 'text' => 'Strategic administrative liaison with block, district, and state revenue departments.'],
    ['count' => null, 'suffix' => '',        'title' => 'Gram Sabha Centric',     'text' => '100% of field interventions planned and executed through community-led bodies (CFRMCs, SHGs, and local committees).'],
    ['count' => null, 'suffix' => '',        'title' => 'Full Transparency',      'text' => 'Audited financial reporting with active CSR-1, 80G, 12A, and FCRA certifications.'],
];

$pillars = [
    ['title' => 'Rights-Assertion over Dependency',          'text' => 'Building local capacity so Gram Sabhas and indigenous families independently file administrative claims, track welfare applications, and access state entitlements.'],
    ['title' => 'Constructive State Collaboration',          'text' => 'Functioning as an effective administrative bridge between isolated hamlets and district departments without resorting to adversarial rhetoric.'],
    ['title' => 'Women-Led Economic Autonomy',               'text' => 'Centering financial management around indigenous women through zero-interest revolving capital models that eliminate reliance on predatory moneylenders.'],
    ['title' => 'Intergenerational Educational Continuity',  'text' => 'Providing holistic residential care, nutrition, and foundational learning to tribal children to break cycles of seasonal distress migration.'],
];

$complianceCards = [
    [
        'title' => 'Statutory Clearances',
        'text'  => 'Fully registered under Ministry of Corporate Affairs (MCA) Form CSR-1, holding valid Income Tax Section 80G and 12A exemptions, and cleared for international grant funding under FCRA.',
        'icon'  => '<path d="M12 3 4 6v6c0 4.5 3.4 8.3 8 9 4.6-.7 8-4.5 8-9V6l-8-3Z"/><path d="m9 12 2 2 4-4"/>',
    ],
    [
        'title' => 'Data-Backed Field Operations',
        'text'  => 'All programmatic achievements—from caste certificates and land claims to health clinic visits—are tracked against verifiable field metrics and regular progress audits.',
        'icon'  => '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
    ],
    [
        'title' => 'Financial & Fiscal Integrity',
        'text'  => 'Maintaining strict internal controls, dual-authorisation banking protocols, and regular independent audits to ensure transparent stewardship of institutional funds.',
        'icon'  => '<path d="M3 10 12 4l9 6"/><path d="M5 10v8M9.5 10v8M14.5 10v8M19 10v8"/><path d="M3 21h18"/>',
    ],
];

// TODO: replace with real names, roles and photos (put photos in img/team/)
$leadershipGroups = [
    'Board Trustees' => [
        ['name' => 'Trustee Name', 'role' => 'Designation', 'photo' => ''],
        ['name' => 'Trustee Name', 'role' => 'Designation', 'photo' => ''],
        ['name' => 'Trustee Name', 'role' => 'Designation', 'photo' => ''],
    ],
    'Executive Leadership' => [
        ['name' => 'Leader Name', 'role' => 'Designation', 'photo' => ''],
        ['name' => 'Leader Name', 'role' => 'Designation', 'photo' => ''],
    ],
    'Field Operations Heads' => [
        ['name' => 'Field Head Name', 'role' => 'Designation', 'photo' => ''],
        ['name' => 'Field Head Name', 'role' => 'Designation', 'photo' => ''],
    ],
];

$pathways = [
    ['title' => 'Corporate CSR Heads',        'text' => 'Access detailed compliance records, audited reports, and CSR-1 documentation.',               'button' => 'Request Compliance Package',  'link' => 'contact'],
    ['title' => 'Institutional Grantmakers',  'text' => 'Schedule a formal governance overview or field audit with executive leadership.',              'button' => 'Contact Governance Office',   'link' => 'contact'],
    ['title' => 'Legal & Policy Advisors',    'text' => 'Offer technical or legal expertise to strengthen field legal literacy frameworks.',             'button' => 'Join Advisory Network',       'link' => 'get-involved'],
    ['title' => 'Individual Supporters',      'text' => 'Review annual financial statements and support our operational mission.',                       'button' => 'View Financial Transparency', 'link' => 'reports'],
];

$initials = fn(string $name): string => strtoupper(implode('', array_map(fn($w) => $w[0], array_slice(explode(' ', $name), 0, 2))));
?>

<!-- 1. Hero -->
<section class="hero page-hero">
    <div class="hero-bg" aria-hidden="true">
        <span class="blob blob-1"></span>
        <span class="blob blob-2"></span>
        <span class="blob blob-3"></span>
        <span class="hero-watermark" lang="mr">अंकुर</span>
    </div>
    <div class="petals" aria-hidden="true"></div>

    <div class="container page-hero-inner">
        <h1 data-split>Bridging Communities and Systems: <em>30+ Years of Ground-Level Trust</em></h1>
        <p class="hero-lead" data-reveal style="--d: .5s">Partnering with Katkari PVTG and Thakar communities in Raigad district to build structural self-reliance, administrative dignity, and sustainable local governance.</p>
        <div class="hero-actions" data-reveal style="--d: .7s">
            <a class="btn btn-blush btn-lg" href="#governance">Review Governance &amp; Compliance</a>
            <a class="btn btn-ghost btn-lg" href="<?= url() ?>">Explore Our Program Portfolios</a>
        </div>
    </div>

    <svg class="brush-edge" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 48 C120 20 220 70 360 44 S600 10 760 40 1020 76 1180 42 1360 18 1440 36 V80 H0Z"/>
    </svg>
</section>

<!-- 2. Institutional proof ribbon -->
<section class="impact-ribbon proof-ribbon" aria-label="Institutional credentials">
    <div class="container">
        <div class="impact-grid">
            <?php foreach ($proofItems as $i => $item): ?>
                <div class="impact-item" data-reveal style="--d: <?= $i * 0.12 ?>s">
                    <?php if ($item['count'] !== null): ?>
                        <p class="impact-value"><span data-count="<?= $item['count'] ?>"><?= $item['count'] ?></span><?= e($item['suffix']) ?></p>
                    <?php else: ?>
                        <p class="impact-value proof-title"><?= e($item['title']) ?></p>
                    <?php endif; ?>
                    <p class="impact-text"><?= e($item['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. Narrative & philosophy -->
<section class="section philosophy">
    <div class="container philosophy-grid">
        <div class="philosophy-intro" data-reveal>
            <h2>Our Approach: From Charity to <em>Administrative Empowerment</em></h2>
            <p class="philosophy-body">Ankur Trust was established on the principle that vulnerable indigenous communities do not require passive charity; they require structural access to their constitutional rights, land security, and public administrative systems. Focusing heavily on the Katkari Particularly Vulnerable Tribal Group (PVTG) and Thakar families, our work dismantles systemic barriers—such as paperlessness, illegal land dispossession, and informal debt bondage—by equipping community members with the legal literacy and documentation needed to self-advocate.</p>
        </div>

        <ol class="pillar-list">
            <?php foreach ($pillars as $i => $pillar): ?>
                <li class="pillar-item" data-reveal style="--d: <?= $i * 0.1 ?>s">
                    <span class="pillar-num"><?= sprintf('%02d', $i + 1) ?></span>
                    <div>
                        <h3><?= e($pillar['title']) ?></h3>
                        <p><?= e($pillar['text']) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- 4. Governance & compliance -->
<section id="governance" class="section governance">
    <span class="section-watermark" lang="mr" aria-hidden="true">अंकुर</span>
    <div class="container">
        <div class="section-head" data-reveal>
            <h2>Governance, Accountability, and <em>Compliance</em></h2>
            <p>Designed to meet the stringent due-diligence standards of corporate CSR boards, international grantmakers, and statutory audit bodies.</p>
        </div>
        <div class="gov-grid">
            <?php foreach ($complianceCards as $i => $card): ?>
                <div class="gov-card" data-reveal style="--d: <?= $i * 0.15 ?>s">
                    <span class="program-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $card['icon'] ?></svg>
                    </span>
                    <h3><?= e($card['title']) ?></h3>
                    <p><?= e($card['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Leadership -->
<section class="section leadership">
    <div class="container">
        <div class="section-head" data-reveal>
            <h2>Institutional <em>Leadership</em></h2>
        </div>

        <?php foreach ($leadershipGroups as $group => $members): ?>
            <div class="leader-group">
                <h3 class="leader-group-title" data-reveal><?= e($group) ?></h3>
                <div class="leader-grid">
                    <?php foreach ($members as $i => $member): ?>
                        <article class="leader-card" data-reveal style="--d: <?= $i * 0.1 ?>s">
                            <div class="leader-photo">
                                <?php if ($member['photo']): ?>
                                    <img src="img/team/<?= e($member['photo']) ?>" alt="<?= e($member['name']) ?>" loading="lazy">
                                <?php else: ?>
                                    <span aria-hidden="true"><?= e($initials($member['name'])) ?></span>
                                <?php endif; ?>
                            </div>
                            <h4><?= e($member['name']) ?></h4>
                            <p><?= e($member['role']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- 6. Action hub -->
<section class="section action-hub">
    <div class="petals petals-soft" aria-hidden="true"></div>
    <div class="container">
        <div class="section-head" data-reveal>
            <h2>Engage with Our <em>Governance Team</em></h2>
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
