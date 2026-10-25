<?php
// Official contact details — used by the Contact page and the footer.
// TODO: replace the placeholder values with the client's real details.

return [
    'address' => [
        'line1' => 'Ankur Trust Office',
        'line2' => 'Address line to be added',
        'city'  => 'Raigad District, Maharashtra',
        'pin'   => '',
    ],

    'phones' => [
        ['label' => 'Office', 'number' => '+91 00000 00000'],
    ],

    'emails' => [
        ['label' => 'General enquiries', 'address' => 'info@example.org'],
        ['label' => 'CSR & partnerships', 'address' => 'partnerships@example.org'],
    ],

    'hours' => 'Mon – Sat, 10:00 AM – 6:00 PM',

    // Text Google Maps should search for (full address or place name)
    'mapQuery' => 'Raigad, Maharashtra',

    // Leave 'url' as '#' until the real profile link is available
    'social' => [
        'Facebook'  => ['url' => '#', 'icon' => '<path d="M14 8h3V4h-3a4 4 0 0 0-4 4v2H8v4h2v6h4v-6h3l1-4h-4V8Z"/>'],
        'Instagram' => ['url' => '#', 'icon' => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".6" fill="currentColor"/>'],
        'LinkedIn'  => ['url' => '#', 'icon' => '<rect x="3" y="3" width="18" height="18" rx="4"/><path d="M8 11v5M8 8v.01M12 16v-5M16 16v-3a2 2 0 0 0-4 0"/>'],
        'YouTube'   => ['url' => '#', 'icon' => '<rect x="2" y="5" width="20" height="14" rx="4"/><path d="m10 9 5 3-5 3V9Z" fill="currentColor"/>'],
    ],

    // Options for the "I am reaching out as" field on the contact form (value => label)
    'enquiryTypes' => [
        'csr'        => 'Corporate CSR',
        'grant'      => 'Institutional Grantmaker',
        'volunteer'  => 'Volunteer / Internship',
        'donor'      => 'Individual Donor',
        'media'      => 'Media / Research',
        'general'    => 'General Enquiry',
    ],
];
