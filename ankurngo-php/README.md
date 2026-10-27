# Ankur Trust — PHP version

This is a separate PHP version of the website. The original HTML pages in the parent folder are unchanged. Shared page elements are kept in `includes/`, while each page's content is in its own PHP file.

## Run with XAMPP

1. Keep this `php-version` folder inside `C:\xampp\htdocs\ankurngo`.
2. Start Apache from the XAMPP Control Panel.
3. Open `http://localhost/ankurngo/php-version/` in your browser.

The site uses Bootstrap and Google Fonts from CDNs, so an internet connection is needed for those external assets.

## Contact form delivery

The contact page validates submissions in PHP and sends mail using PHP's `mail()` function. To enable delivery, configure Apache/PHP mail settings and set the `ANKUR_CONTACT_EMAIL` environment variable to the inbox that should receive enquiries. If no valid recipient is configured, the form reports that the message could not be sent instead of displaying a false success message.

The remaining pages preserve the source site's existing content, including pages marked as coming soon.
