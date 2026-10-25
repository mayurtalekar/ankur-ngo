<?php
// Handles the contact form POST (required by contact.php) — validates the form, stores the message, then redirects (Post/Redirect/Get).

$back = fn(string $hash = 'contact-form') => header('Location: ' . url('contact#' . $hash));

// CSRF check
if (!hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'] ?? '')) {
    $_SESSION['contact_errors'] = ['form' => 'Your session expired. Please submit the form again.'];
    $back();
    return;
}

// Honeypot: real users never see or fill this field
if (!empty($_POST['website'])) {
    $_SESSION['contact_success'] = true;
    $back();
    return;
}

// Simple rate limit: one message per 30 seconds per session
if (time() - ($_SESSION['contact_last_sent'] ?? 0) < 30) {
    $_SESSION['contact_errors'] = ['form' => 'Please wait a few seconds before sending another message.'];
    $back();
    return;
}

$input = [
    'name'         => trim($_POST['name'] ?? ''),
    'email'        => trim($_POST['email'] ?? ''),
    'phone'        => trim($_POST['phone'] ?? ''),
    'organisation' => trim($_POST['organisation'] ?? ''),
    'type'         => $_POST['type'] ?? '',
    'message'      => trim($_POST['message'] ?? ''),
];

$errors = [];

if (mb_strlen($input['name']) < 2 || mb_strlen($input['name']) > 100) {
    $errors['name'] = 'Please enter your full name.';
}
if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
if ($input['phone'] !== '' && !preg_match('/^[0-9+\-\s()]{7,20}$/', $input['phone'])) {
    $errors['phone'] = 'Please enter a valid phone number.';
}
if (mb_strlen($input['organisation']) > 150) {
    $errors['organisation'] = 'Organisation name is too long.';
}
if (!array_key_exists($input['type'], $site['enquiryTypes'])) {
    $errors['type'] = 'Please choose an option.';
}
if (mb_strlen($input['message']) < 10 || mb_strlen($input['message']) > 3000) {
    $errors['message'] = 'Please write a message between 10 and 3000 characters.';
}

if ($errors) {
    $_SESSION['contact_errors'] = $errors;
    $_SESSION['contact_old']    = $input;
    $back();
    return;
}

// Save every message to storage/messages/ (one JSON object per line)
$record = ['received_at' => date('c'), 'ip' => $_SERVER['REMOTE_ADDR'] ?? ''] + $input;
$saved  = file_put_contents(
    ROOT_PATH . '/storage/messages/contact-' . date('Y-m') . '.jsonl',
    json_encode($record, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

// Optionally email it as well
$mailTo = CONTACT_MAIL_TO;
if ($mailTo !== '') {
    $typeLabel = $site['enquiryTypes'][$input['type']];
    $body = "New enquiry from the website\n\n"
          . "Name: {$input['name']}\n"
          . "Email: {$input['email']}\n"
          . "Phone: {$input['phone']}\n"
          . "Organisation: {$input['organisation']}\n"
          . "Enquiry type: {$typeLabel}\n\n"
          . "Message:\n{$input['message']}\n";
    @mail(
        $mailTo,
        '[' . SITE_NAME . '] ' . $typeLabel . ' enquiry from ' . str_replace(["\r", "\n"], '', $input['name']),
        $body,
        ['Reply-To' => str_replace(["\r", "\n"], '', $input['email']), 'Content-Type' => 'text/plain; charset=UTF-8']
    );
}

if ($saved === false) {
    error_log('Contact form: could not write to storage/messages/');
    $_SESSION['contact_errors'] = ['form' => 'Sorry, something went wrong. Please email us directly.'];
    $_SESSION['contact_old']    = $input;
    $back();
    return;
}

$_SESSION['contact_last_sent'] = time();
$_SESSION['contact_success']   = true;
$back();
