<?php
$contactTypes = ['csr', 'grant', 'volunteer', 'donor', 'media', 'general'];
$contactValues = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'organisation' => '',
    'type' => '',
    'message' => '',
];
$contactErrors = [];
$contactStatus = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($contactValues as $field => $value) {
        $submittedValue = $_POST[$field] ?? '';
        $contactValues[$field] = is_string($submittedValue) ? trim($submittedValue) : '';
    }

    if (!empty($_POST['website'])) {
        $contactStatus = 'Thank you. Your message has been received.';
    } else {
        if ($contactValues['name'] === '' || strlen($contactValues['name']) > 100) {
            $contactErrors['name'] = 'Enter your name (up to 100 characters).';
        }
        if (!filter_var($contactValues['email'], FILTER_VALIDATE_EMAIL)) {
            $contactErrors['email'] = 'Enter a valid email address.';
        }
        if (strlen($contactValues['phone']) > 20) {
            $contactErrors['phone'] = 'Phone number must be 20 characters or fewer.';
        }
        if (strlen($contactValues['organisation']) > 150) {
            $contactErrors['organisation'] = 'Organisation must be 150 characters or fewer.';
        }
        if (!in_array($contactValues['type'], $contactTypes, true)) {
            $contactErrors['type'] = 'Choose what best describes your enquiry.';
        }
        if (strlen($contactValues['message']) < 10 || strlen($contactValues['message']) > 3000) {
            $contactErrors['message'] = 'Your message must be between 10 and 3000 characters.';
        }

        if (!$contactErrors) {
            $recipient = getenv('ANKUR_CONTACT_EMAIL');
            if (!$recipient || !filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                $contactStatus = 'The message could not be sent because the contact email is not configured. Please contact the organisation directly.';
            } else {
                $subject = 'Website enquiry: ' . $contactValues['type'];
                $messageBody = "Name: {$contactValues['name']}\n"
                    . "Email: {$contactValues['email']}\n"
                    . "Phone: {$contactValues['phone']}\n"
                    . "Organisation: {$contactValues['organisation']}\n"
                    . "Enquiry type: {$contactValues['type']}\n\n"
                    . $contactValues['message'];
                $headers = "Reply-To: {$contactValues['email']}\r\n"
                    . "Content-Type: text/plain; charset=UTF-8";

                if (mail($recipient, $subject, $messageBody, $headers)) {
                    $contactStatus = 'Thank you. Your message has been sent.';
                    foreach ($contactValues as $field => $value) {
                        $contactValues[$field] = '';
                    }
                } else {
                    $contactStatus = 'The message could not be sent right now. Please try again later or contact the organisation directly.';
                }
            }
        } else {
            $contactStatus = 'Please correct the highlighted fields and submit the form again.';
        }
    }
}
