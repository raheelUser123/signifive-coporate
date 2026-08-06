<?php
/**
 * Shared template rendered by each division page (automobile.php, solar-energy.php, etc.)
 * Expects $division array to be defined before including this file, with keys:
 * slug, name, icon, heroImg, heroHeading, heroCopy, aboutHeading, aboutCopy (array of paragraphs),
 * services (array of ['icon','title','desc']), features (array of ['title','desc']),
 * process (array of ['title','desc']), audiences (array of ['icon','title','desc']),
 * ctaHeading, ctaCopy
 */
require_once __DIR__ . '/header.php';
?>

<?php
function signifive_icon_class(string $title, string $fallback = 'fa-briefcase'): string {
    $t = strtolower($title);
    $map = [
        'buy' => 'fa-car-side', 'sell' => 'fa-handshake', 'sourc' => 'fa-magnifying-glass',
        'fleet' => 'fa-truck-fast', 'consult' => 'fa-comments', 'procurement' => 'fa-building',
        'individual' => 'fa-user', 'corporate' => 'fa-building', 'sme' => 'fa-people-group',
        'government' => 'fa-landmark', 'solar' => 'fa-solar-panel', 'energy' => 'fa-bolt',
        'installation' => 'fa-screwdriver-wrench', 'maintenance' => 'fa-gears', 'hotel' => 'fa-hotel',
        'tour' => 'fa-route', 'travel' => 'fa-plane-departure', 'tax' => 'fa-file-invoice-dollar',
        'audit' => 'fa-chart-line', 'account' => 'fa-calculator', 'company' => 'fa-building-columns',
        'e-commerce' => 'fa-cart-shopping', 'store' => 'fa-store', 'marketing' => 'fa-bullhorn',
        'strategy' => 'fa-chess-knight', 'support' => 'fa-headset'
    ];
    foreach ($map as $needle => $icon) if (str_contains($t, $needle)) return $icon;
    return $fallback;
}
?>


<section class="hero" style="min-height:60vh; --hero-img:url('<?php echo $division['heroImg']; ?>');">
  <div class="container">
    <div class="breadcrumb">Home / Business Divisions / <?php echo $division['name']; ?></div>
    <div class="hero-content reveal in-view">
      <span class="section-label" style="color:var(--color-gold)"><?php echo strtoupper($division['name']); ?></span>
      <h1><?php echo $division['heroHeading']; ?></h1>
      <p class="lead"><?php echo $division['heroCopy']; ?></p>
      <div class="btn-group">
        <a href="contact.php?division=<?php echo urlencode($division['slug']); ?>" class="btn btn-white"><?php echo $division['primaryCta'] ?? 'Get a Consultation'; ?></a>
        <a href="business-divisions.php" class="btn btn-outline-white">Explore Other Divisions</a>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:32px;">
      <span class="section-label">ABOUT THE DIVISION</span>
      <h2><?php echo $division['aboutHeading']; ?></h2>
    </div>
    <div class="reveal max-w-md mx-auto text-center" style="max-width:800px;">
      <?php foreach ($division['aboutCopy'] as $p): ?>
        <p style="max-width:100%;"><?php echo $p; ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section section--off">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:64px;">
      <span class="section-label">WHAT WE OFFER</span>
      <h2>Comprehensive <?php echo $division['name']; ?> Services</h2>
    </div>
    <div class="grid grid-3 reveal division-services-grid">
      <?php foreach ($division['services'] as $s): ?>
      <div class="card">
        <div class="icon-badge"><i class="fa-solid <?php echo signifive_icon_class($s['title']); ?>"></i></div>
        <h6><?php echo $s['title']; ?></h6>
        <p style="font-size:15px;"><?php echo $s['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:64px;">
      <span class="section-label">WHY CHOOSE US</span>
      <h2>Your Trusted <?php echo $division['name']; ?> Partner</h2>
    </div>
    <div class="grid grid-4 reveal">
      <?php foreach ($division['features'] as $f): ?>
      <div class="card">
        <h6><?php echo $f['title']; ?></h6>
        <p style="font-size:15px;"><?php echo $f['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section section--off">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:64px;">
      <span class="section-label">OUR PROCESS</span>
      <h2>The Signifive <?php echo $division['name']; ?> Process</h2>
    </div>
    <div class="timeline reveal">
      <?php foreach ($division['process'] as $i => $step): ?>
      <div class="timeline-step">
        <div class="step-number"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
        <h5><?php echo $step['title']; ?></h5>
        <p style="font-size:15px;"><?php echo $step['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHO WE SERVE -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:64px;">
      <span class="section-label">OUR CLIENTS</span>
      <h2>Who We Serve</h2>
    </div>
    <div class="grid grid-4 reveal division-audience-grid">
      <?php foreach ($division['audiences'] as $a): ?>
      <div class="card text-center">
        <div class="icon-badge"><i class="fa-solid <?php echo signifive_icon_class($a['title'], 'fa-users'); ?>"></i></div>
        <h6><?php echo $a['title']; ?></h6>
        <p style="font-size:15px;"><?php echo $a['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php 
$footerCtaTitle = $division['ctaHeading'];
$footerCtaDesc = $division['ctaCopy'];
$footerCtaLink = "contact.php?division=" . urlencode($division['slug']);
$footerCtaBtnText = $division['primaryCta'] ?? 'Get a Consultation';
require_once __DIR__ . '/footer.php'; 
?>
