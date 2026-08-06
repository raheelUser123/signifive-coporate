<?php
if (!defined('SIGNIFIVE_APP')) define('SIGNIFIVE_APP', true);
require_once __DIR__ . '/../config.php';
$current = basename($_SERVER['PHP_SELF']);
function nav_active($file){ global $current; return $current === $file ? ' class="active"' : ''; }
$pageTitle = $pageTitle ?? 'Integrated Business Solutions';
$pageDescription = $pageDescription ?? 'Signifive Services delivers integrated solutions across automobile, solar energy, hospitality and tourism, taxation and corporate consultancy, and e-commerce.';
$canonical = SITE_URL . '/' . ($current === 'index.php' ? '' : $current);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?> | <?= SITE_NAME ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle.' | '.SITE_NAME) ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
<meta property="og:image" content="<?= SITE_URL ?>/assets/images/signifive-brand-cover.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#123f75">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"Signifive Services","url":"<?= SITE_URL ?>","email":"<?= SITE_EMAIL ?>","telephone":"<?= SITE_PHONE ?>","address":{"@type":"PostalAddress","streetAddress":"<?= addslashes(SITE_ADDRESS) ?>","addressLocality":"Karachi","addressCountry":"PK"}}</script>
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="index.php"><span class="brand-mark"><img src="assets/images/logo-signifive.png" alt="Signifive Services logo"></span></a>
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
    <nav class="main-nav" aria-label="Primary navigation">
      <a href="index.php"<?= nav_active('index.php') ?>>Home</a>
      <a href="about.php"<?= nav_active('about.php') ?>>About Us</a>
      <div class="nav-dropdown">
        <a href="business-divisions.php"<?= nav_active('business-divisions.php') ?>>Divisions <i class="fa-solid fa-chevron-down"></i></a>
        <div class="dropdown-menu"><?php foreach($SIGNIFIVE_DIVISIONS as $d): ?><a href="<?= $d['url'] ?>"><i class="<?= $d['icon'] ?>"></i><span><?= $d['label'] ?></span></a><?php endforeach; ?></div>
      </div>
      <a href="leadership.php"<?= nav_active('leadership.php') ?>>Leadership</a>
      <a href="contact.php"<?= nav_active('contact.php') ?>>Contact</a>
      <a class="nav-button" href="contact.php">Get a Consultation <i class="fa-solid fa-arrow-right"></i></a>
    </nav>
  </div>
</header>
<main>
