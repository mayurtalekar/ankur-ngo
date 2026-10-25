# Ankur NGO Website

Plain PHP website (no framework). Requires PHP 8.0+.

## Run locally

```bash
php -S localhost:8000
```

Open http://localhost:8000

## Structure

```
index.php, about.php, ...   One file per page (upload everything to the site folder)
components/                 config.php, site.php (contact details), functions.php,
                            header.php, footer.php, contact-handler.php
css/  js/  img/             Styles, scripts, images
storage/                    Contact form messages and error logs (blocked from the web)
```

## Settings

- Contact details and social links: `components/site.php`
- Email for contact form messages: `CONTACT_MAIL_TO` in `components/config.php`

## Add a new page

1. Copy `news.php` to `events.php` and change `$pageTitle`, `$currentPath` and `$bodyClass`
2. Add `'events' => 'Events'` to `$navItems` in `components/header.php`
