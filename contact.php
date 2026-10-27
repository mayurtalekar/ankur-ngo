<?php
require __DIR__ . '/components/config.php';

// Form submissions are processed (and redirected) before any HTML is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . '/components/contact-handler.php';
    exit;
}

$pageTitle   = 'Contact Us';
$currentPath = 'contact';
$bodyClass   = 'page-contact has-dark-hero';

require __DIR__ . '/components/header.php';
?>
<?php
// Flash data from the form handler (shown once, then cleared)
$errors  = $_SESSION['contact_errors'] ?? [];
$old     = $_SESSION['contact_old'] ?? [];
$success = $_SESSION['contact_success'] ?? false;
unset($_SESSION['contact_errors'], $_SESSION['contact_old'], $_SESSION['contact_success']);

$_SESSION['csrf_token'] ??= bin2hex(random_bytes(32));

// ?type=csr etc. pre-selects the enquiry type (e.g. from "Request CSR Portfolio" buttons)
$selectedType = $old['type'] ?? ($_GET['type'] ?? '');

$field = fn(string $name): string => e($old[$name] ?? '');
$error = fn(string $name): string => isset($errors[$name])
    ? '<p class="field-error" id="' . $name . '-error">' . e($errors[$name]) . '</p>'
    : '';
$describedBy = fn(string $name): string => isset($errors[$name]) ? ' aria-invalid="true" aria-describedby="' . $name . '-error"' : '';

$address  = array_filter($site['address']);
$mapUrl   = 'https://maps.google.com/maps?q=' . rawurlencode($site['mapQuery']) . '&z=10&output=embed';
$mapsLink = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($site['mapQuery']);
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
        <h1 data-split>Contact <em>Us</em></h1>
        <p class="hero-lead" data-reveal style="--d: .4s">Reach our team in Raigad for partnerships, volunteering, or any question about our work.</p>
    </div>

    <svg class="brush-edge" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 48 C120 20 220 70 360 44 S600 10 760 40 1020 76 1180 42 1360 18 1440 36 V80 H0Z"/>
    </svg>
</section>

<!-- Details + form -->
<section class="section contact-section">
    <div class="container contact-grid">

        <!-- Contact details -->
        <aside class="contact-info" aria-label="Contact details">
            <div class="info-card" data-reveal>
                <span class="info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s7-6.2 7-12a7 7 0 0 0-14 0c0 5.8 7 12 7 12Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                </span>
                <div>
                    <h2 class="info-title">Address</h2>
                    <address><?= implode('<br>', array_map('e', $address)) ?></address>
                    <a class="info-link" href="<?= e($mapsLink) ?>" target="_blank" rel="noopener">Get directions <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <div class="info-card" data-reveal style="--d: .1s">
                <span class="info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2Z"/></svg>
                </span>
                <div>
                    <h2 class="info-title">Phone</h2>
                    <?php foreach ($site['phones'] as $phone): ?>
                        <p><span class="info-label"><?= e($phone['label']) ?>:</span> <?= e($phone['number']) ?></p>
                    <?php endforeach; ?>
                    <?php if (!empty($site['hours'])): ?>
                        <p class="info-muted"><?= e($site['hours']) ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="info-card" data-reveal style="--d: .2s">
                <span class="info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                </span>
                <div>
                    <h2 class="info-title">Email</h2>
                    <?php foreach ($site['emails'] as $email): ?>
                        <p><span class="info-label"><?= e($email['label']) ?>:</span><br><span class="info-value"><?= e($email['address']) ?></span></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="info-card info-social" data-reveal style="--d: .3s">
                <div>
                    <h2 class="info-title">Follow Us</h2>
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
            </div>
        </aside>

        <!-- Form -->
        <div id="contact-form" class="form-card" data-reveal style="--d: .15s">
            <?php if ($success): ?>
                <div class="form-success" role="status">
                    <span class="success-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 5 5 9-10"/></svg>
                    </span>
                    <h2>Thank you!</h2>
                    <p>Your message has reached our team. We will get back to you soon.</p>
                    <a class="btn btn-blush" href="<?= url('contact') ?>#contact-form">Send another message</a>
                </div>
            <?php else: ?>
                <h2 class="form-title">Send us a <em>message</em></h2>
                <p class="form-intro">Fields marked <span class="req">*</span> are required.</p>

                <?php if (isset($errors['form'])): ?>
                    <p class="form-alert" role="alert"><?= e($errors['form']) ?></p>
                <?php elseif ($errors): ?>
                    <p class="form-alert" role="alert">Please correct the highlighted fields below.</p>
                <?php endif; ?>

                <form class="contact-form" method="post" action="<?= url('contact') ?>" novalidate>
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>">
                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Leave this field empty</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-row">
                        <div class="form-field<?= isset($errors['name']) ? ' has-error' : '' ?>">
                            <label for="name">Full Name <span class="req">*</span></label>
                            <input type="text" id="name" name="name" value="<?= $field('name') ?>" required maxlength="100" autocomplete="name"<?= $describedBy('name') ?>>
                            <?= $error('name') ?>
                        </div>
                        <div class="form-field<?= isset($errors['email']) ? ' has-error' : '' ?>">
                            <label for="email">Email <span class="req">*</span></label>
                            <input type="email" id="email" name="email" value="<?= $field('email') ?>" required autocomplete="email"<?= $describedBy('email') ?>>
                            <?= $error('email') ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-field<?= isset($errors['phone']) ? ' has-error' : '' ?>">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" value="<?= $field('phone') ?>" maxlength="20" autocomplete="tel"<?= $describedBy('phone') ?>>
                            <?= $error('phone') ?>
                        </div>
                        <div class="form-field<?= isset($errors['organisation']) ? ' has-error' : '' ?>">
                            <label for="organisation">Organisation</label>
                            <input type="text" id="organisation" name="organisation" value="<?= $field('organisation') ?>" maxlength="150" autocomplete="organization"<?= $describedBy('organisation') ?>>
                            <?= $error('organisation') ?>
                        </div>
                    </div>

                    <fieldset class="form-field type-field<?= isset($errors['type']) ? ' has-error' : '' ?>"<?= $describedBy('type') ?>>
                        <legend>I am reaching out as <span class="req">*</span></legend>
                        <div class="type-options">
                            <?php foreach ($site['enquiryTypes'] as $value => $label): ?>
                                <label class="type-option">
                                    <input type="radio" name="type" value="<?= e($value) ?>" required<?= $selectedType === $value ? ' checked' : '' ?>>
                                    <span><?= e($label) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                        <?= $error('type') ?>
                    </fieldset>

                    <div class="form-field<?= isset($errors['message']) ? ' has-error' : '' ?>">
                        <label for="message">Message <span class="req">*</span></label>
                        <textarea id="message" name="message" rows="6" required minlength="10" maxlength="3000"<?= $describedBy('message') ?>><?= $field('message') ?></textarea>
                        <?= $error('message') ?>
                    </div>

                    <button type="submit" class="btn btn-blush btn-lg form-submit">
                        Send Message
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/></svg>
                    </button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Map -->
<section class="map-section" aria-label="Location map">
    <iframe src="<?= e($mapUrl) ?>" title="Map showing <?= e($site['mapQuery']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
</section>

<?php require __DIR__ . '/components/footer.php'; ?>
