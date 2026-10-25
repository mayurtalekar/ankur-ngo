# Ankur NGO Website

Plain PHP website (no framework). Requires PHP 8.0+.

## Run locally

```bash
cp .env.example .env
php -S localhost:8000 -t public public/index.php
```

Open http://localhost:8000

## Structure

```
public/            Web root – point your domain/hosting here
  index.php        Front controller + routes
  .htaccess        Pretty URLs on Apache
  assets/          css, js, images
  uploads/         User-uploaded files (git-ignored)
app/               Not web-accessible
  config/          config.php (constants, .env loading)
  includes/        header, footer, helper functions (e(), url(), asset(), db())
  pages/           One file per page
storage/logs/      Error logs
```

## Add a new page

1. Create `app/pages/events.php`
2. Add `'events' => ['page' => 'events', 'title' => 'Events'],` to `$routes` in `public/index.php`
3. Add a nav link in `app/includes/header.php`
