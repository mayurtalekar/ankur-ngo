<?php
$pageKey = 'contact';
$pageTitle = 'Contact Us | Ankur Trust';
$pageDescription = 'Ankur Trust partners with Katkari PVTG and Thakar tribal families in Raigad district, Maharashtra, for land rights, women-led livelihoods, education and primary care.';
$pageClass = 'page-contact has-dark-hero';
require __DIR__ . '/includes/contact-handler.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">

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
                    <address>Ankur Trust Office<br>Address line to be added<br>Raigad District, Maharashtra</address>
                    <a class="info-link" href="https://www.google.com/maps/search/?api=1&amp;query=Raigad%2C%20Maharashtra" target="_blank" rel="noopener">Get directions <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <div class="info-card" data-reveal style="--d: .1s">
                <span class="info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2Z"/></svg>
                </span>
                <div>
                    <h2 class="info-title">Phone</h2>
                                            <p><span class="info-label">Office:</span> +91 00000 00000</p>
                                                                <p class="info-muted">Mon – Sat, 10:00 AM – 6:00 PM</p>
                                    </div>
            </div>

            <div class="info-card" data-reveal style="--d: .2s">
                <span class="info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                </span>
                <div>
                    <h2 class="info-title">Email</h2>
                                            <p><span class="info-label">General enquiries:</span><br><span class="info-value">info@example.org</span></p>
                                            <p><span class="info-label">CSR &amp; partnerships:</span><br><span class="info-value">partnerships@example.org</span></p>
                                    </div>
            </div>

            <div class="info-card info-social" data-reveal style="--d: .3s">
                <div>
                    <h2 class="info-title">Follow Us</h2>
                    <ul class="footer-social" aria-label="Social media">
                                                    <li>
                                <a href="#" aria-label="Facebook" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 8h3V4h-3a4 4 0 0 0-4 4v2H8v4h2v6h4v-6h3l1-4h-4V8Z"/></svg>
                                </a>
                            </li>
                                                    <li>
                                <a href="#" aria-label="Instagram" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".6" fill="currentColor"/></svg>
                                </a>
                            </li>
                                                    <li>
                                <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"/><path d="M8 11v5M8 8v.01M12 16v-5M16 16v-3a2 2 0 0 0-4 0"/></svg>
                                </a>
                            </li>
                                                    <li>
                                <a href="#" aria-label="YouTube" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="m10 9 5 3-5 3V9Z" fill="currentColor"/></svg>
                                </a>
                            </li>
                                            </ul>
                </div>
            </div>
        </aside>

        <!-- Form -->
        <div id="contact-form" class="form-card" data-reveal style="--d: .15s">
                            <h2 class="form-title">Send us a <em>message</em></h2>
                <p class="form-intro">Fields marked <span class="req">*</span> are required.</p><?php if ($contactStatus !== ''): ?>
                <p class="form-alert" id="contact-form-status" role="status" aria-live="polite" tabindex="-1"><?= htmlspecialchars($contactStatus, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

                
                <form class="contact-form" method="post" action="contact.php">
                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Leave this field empty</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-row">
                        <div class="form-field">
                            <label for="name">Full Name <span class="req">*</span></label>
                            <input type="text" id="name" name="name" value="<?= htmlspecialchars($contactValues['name'], ENT_QUOTES, 'UTF-8') ?>" required maxlength="100" autocomplete="name">
                                                    </div>
                        <div class="form-field">
                            <label for="email">Email <span class="req">*</span></label>
                            <input type="email" id="email" name="email" value="<?= htmlspecialchars($contactValues['email'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="email">
                                                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-field">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($contactValues['phone'], ENT_QUOTES, 'UTF-8') ?>" maxlength="20" autocomplete="tel">
                                                    </div>
                        <div class="form-field">
                            <label for="organisation">Organisation</label>
                            <input type="text" id="organisation" name="organisation" value="<?= htmlspecialchars($contactValues['organisation'], ENT_QUOTES, 'UTF-8') ?>" maxlength="150" autocomplete="organization">
                                                    </div>
                    </div>

                    <fieldset class="form-field type-field">
                        <legend>I am reaching out as <span class="req">*</span></legend>
                        <div class="type-options">
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="csr" <?= $contactValues['type'] === 'csr' ? 'checked' : '' ?> required>
                                    <span>Corporate CSR</span>
                                </label>
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="grant" <?= $contactValues['type'] === 'grant' ? 'checked' : '' ?> required>
                                    <span>Institutional Grantmaker</span>
                                </label>
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="volunteer" <?= $contactValues['type'] === 'volunteer' ? 'checked' : '' ?> required>
                                    <span>Volunteer / Internship</span>
                                </label>
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="donor" <?= $contactValues['type'] === 'donor' ? 'checked' : '' ?> required>
                                    <span>Individual Donor</span>
                                </label>
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="media" <?= $contactValues['type'] === 'media' ? 'checked' : '' ?> required>
                                    <span>Media / Research</span>
                                </label>
                                                            <label class="type-option">
                                    <input type="radio" name="type" value="general" <?= $contactValues['type'] === 'general' ? 'checked' : '' ?> required>
                                    <span>General Enquiry</span>
                                </label>
                                                    </div>
                                            </fieldset>

                    <div class="form-field">
                        <label for="message">Message <span class="req">*</span></label>
                        <textarea id="message" name="message" rows="6" required minlength="10" maxlength="3000"><?= htmlspecialchars($contactValues['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                                            </div>

                    <button type="submit" class="btn btn-blush btn-lg form-submit">
                        Send Message
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/></svg>
                    </button>
                </form>
                    </div>
    </div>
</section>

<!-- Map -->
<section class="map-section" aria-label="Location map">
    <iframe src="https://maps.google.com/maps?q=Raigad%2C%20Maharashtra&amp;z=10&amp;output=embed" title="Map showing Raigad, Maharashtra" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
</section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
