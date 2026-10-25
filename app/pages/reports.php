<?php
// ---- Page content (edit here) ----

// TODO: placeholder file — replace each 'url' with the real PDF when the client sends them
// (put PDFs in public/assets/docs/ and use asset('docs/file-name.pdf'))
// Drive direct-download link for the shared Google Drive file (file must be shared as "Anyone with the link")
$placeholderUrl = 'https://drive.google.com/uc?export=download&id=1Zq3xnJgUP3OXFX0d6WSfdEIOnvd_VwLT';

$reportSections = [
    'annual-reports' => [
        'title' => 'Annual Reports',
        'icon'  => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5v14Z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"/>',
        'items' => [
            ['title' => 'Annual Report', 'year' => '2024–25', 'url' => $placeholderUrl],
            ['title' => 'Annual Report', 'year' => '2023–24', 'url' => $placeholderUrl],
            ['title' => 'Annual Report', 'year' => '2022–23', 'url' => $placeholderUrl],
        ],
    ],
    'financial-reports' => [
        'title' => 'Financial Reports',
        'icon'  => '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
        'items' => [
            ['title' => 'Financial Report', 'year' => '2024–25', 'url' => $placeholderUrl],
            ['title' => 'Financial Report', 'year' => '2023–24', 'url' => $placeholderUrl],
            ['title' => 'Financial Report', 'year' => '2022–23', 'url' => $placeholderUrl],
        ],
    ],
    'audit-reports' => [
        'title' => 'Audit Reports',
        'icon'  => '<path d="M12 3 4 6v6c0 4.5 3.4 8.3 8 9 4.6-.7 8-4.5 8-9V6l-8-3Z"/><path d="m9 12 2 2 4-4"/>',
        'items' => [
            ['title' => 'Audit Report', 'year' => '2024–25', 'url' => $placeholderUrl],
            ['title' => 'Audit Report', 'year' => '2023–24', 'url' => $placeholderUrl],
            ['title' => 'Audit Report', 'year' => '2022–23', 'url' => $placeholderUrl],
        ],
    ],
    'publications' => [
        'title' => 'Publications',
        'icon'  => '<path d="M2 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H2Z"/><path d="M22 4h-7a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h8Z"/>',
        'items' => [
            ['title' => 'Publication', 'year' => '2024–25', 'url' => $placeholderUrl],
            ['title' => 'Publication', 'year' => '2023–24', 'url' => $placeholderUrl],
        ],
    ],
    'downloads' => [
        'title' => 'Downloads',
        'icon'  => '<path d="M12 3v12M7 10l5 5 5-5"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/>',
        'items' => [
            ['title' => 'Document', 'year' => '2024–25', 'url' => $placeholderUrl],
            ['title' => 'Document', 'year' => '2023–24', 'url' => $placeholderUrl],
        ],
    ],
];

?>

<!-- Hero -->
<section class="hero page-hero">
    <div class="hero-bg" aria-hidden="true">
        <span class="blob blob-1"></span>
        <span class="blob blob-2"></span>
        <span class="blob blob-3"></span>
        <span class="hero-watermark" lang="mr">अंकुर</span>
    </div>
    <div class="petals" aria-hidden="true"></div>

    <div class="container page-hero-inner">
        <h1 data-split>Reports</h1>
        <nav class="report-jump" aria-label="Report sections" data-reveal style="--d: .4s">
            <?php foreach ($reportSections as $id => $section): ?>
                <a href="#<?= e($id) ?>"><?= e($section['title']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>

    <svg class="brush-edge" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 48 C120 20 220 70 360 44 S600 10 760 40 1020 76 1180 42 1360 18 1440 36 V80 H0Z"/>
    </svg>
</section>

<!-- Report sections -->
<?php foreach ($reportSections as $id => $section): ?>
    <section id="<?= e($id) ?>" class="section report-section">
        <div class="container">
            <div class="report-head" data-reveal>
                <span class="program-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $section['icon'] ?></svg>
                </span>
                <h2><?= e($section['title']) ?></h2>
            </div>

            <div class="doc-grid">
                <?php foreach ($section['items'] as $i => $doc): ?>
                    <a class="doc-card" href="<?= e($doc['url']) ?>" download title="Download" aria-label="Download <?= e($doc['title']) ?>, FY <?= e($doc['year']) ?>" data-year="<?= e($doc['year']) ?>" data-reveal style="--d: <?= $i * 0.08 ?>s">
                        <span class="doc-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9Z"/><path d="M14 3v6h6"/><path d="M8 13h8M8 17h5"/></svg>
                        </span>
                        <span class="doc-body">
                            <span class="doc-year">FY <?= e($doc['year']) ?></span>
                            <span class="doc-title"><?= e($doc['title']) ?></span>
                        </span>
                        <span class="doc-action" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v11M7 10l5 5 5-5M5 20h14"/></svg>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endforeach; ?>
