<?php
/**
 * SIGNIFIVE SERVICES — GLOBAL CONFIGURATION
 * ------------------------------------------
 * Update the SMTP_* constants below with your cPanel business email details.
 * These are the same credentials found in cPanel → Email Accounts.
 *
 * SMTP_HOST   : usually mail.yourdomain.com (check cPanel "Email Accounts" > "Connect Devices")
 * SMTP_PORT   : 465 (SSL) or 587 (TLS) - 465 is the most common for cPanel
 * SMTP_SECURE : 'ssl' for port 465, 'tls' for port 587
 * SMTP_USER   : your full business email, e.g. info@signifive.com
 * SMTP_PASS   : the mailbox password (set in cPanel Email Accounts)
 * MAIL_TO     : the address that should RECEIVE contact form enquiries
 */

// ===== SMTP / cPanel Business Email Settings =====
define('SMTP_HOST', 'mail.signifive.com');       // <-- change to your cPanel mail server
define('SMTP_PORT', 465);                         // 465 = SSL, 587 = TLS
define('SMTP_SECURE', 'ssl');                     // 'ssl' or 'tls'
define('SMTP_USER', 'info@signifive.com');        // <-- your cPanel email address
define('SMTP_PASS', 'YOUR_EMAIL_PASSWORD_HERE');  // <-- your cPanel email password
define('MAIL_FROM', 'info@signifive.com');        // shown as the "From" address
define('MAIL_FROM_NAME', 'Signifive Services Website');
define('MAIL_TO', 'info@signifive.com');          // where enquiries are delivered
define('MAIL_TO_NAME', 'Signifive Services');

// ===== Site Settings =====
define('SITE_NAME', 'Signifive Services');
define('SITE_URL', 'https://www.signifive.com');
define('SITE_PHONE', '+92 312 8577037');
define('SITE_EMAIL', 'info@signifive.com');
define('SITE_ADDRESS', '3rd Floor, Karam Tower, SB-09, Office No E4, Munawar Chowrangi Rd, Block 12, Gulistan-e-Johar, Karachi, 75290');

// Divisions used across the site (nav, dropdowns, cards, contact form)
$SIGNIFIVE_DIVISIONS = [
    'automobile'   => ['label' => 'Automobile',                    'icon' => 'fa-solid fa-car-side', 'url' => 'automobile.php'],
    'solar'        => ['label' => 'Solar Energy',                  'icon' => 'fa-solid fa-solar-panel',  'url' => 'solar-energy.php'],
    'hospitality'  => ['label' => 'Hospitality & Tourism',         'icon' => 'fa-solid fa-plane-departure',  'url' => 'hospitality.php'],
    'consultancy'  => ['label' => 'Taxation & Corporate Consultancy','icon' => 'fa-solid fa-chart-line','url' => 'consultancy.php'],
    'ecommerce'    => ['label' => 'E-Commerce',                    'icon' => 'fa-solid fa-cart-shopping', 'url' => 'ecommerce.php'],
];
