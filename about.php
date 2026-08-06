<?php
$pageTitle = 'About Us';
$pageDescription = 'Signifive Services was established with a vision to simplify business by bringing multiple professional services under one trusted corporate group.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero" style="min-height:60vh; --hero-img:url('https://images.unsplash.com/photo-1541746972996-4e0b0f43e02a?q=80&w=1600');">
  <div class="container">
    <div class="hero-content reveal in-view">
      <span class="section-label" style="color:var(--color-gold)">ABOUT SIGNIFIVE</span>
      <h1>Building Businesses. Creating Opportunities. Inspiring Confidence.</h1>
      <p class="lead">Signifive Services was founded with a clear purpose, to simplify the way individuals and businesses access professional solutions, providing a connected business ecosystem built on trust, expertise, and long-term partnerships.</p>
    </div>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="section">
  <div class="container">
    <div class="split reveal">
      <div class="split-media">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1000" alt="Signifive team at work">
      </div>
      <div>
        <span class="section-label">WHO WE ARE</span>
        <h2>A Diversified Business Group Built for Long-Term Growth</h2>
        <p>Signifive Services was established with a clear vision—to create a professionally managed business group that delivers integrated solutions across multiple industries.</p>
        <p>Rather than operating as individual service providers, our business divisions work together under one trusted brand, enabling individuals and organizations to access specialized expertise through a single point of connection.</p>
      </div>
    </div>
  </div>
</section>

<!-- OUR STORY -->
<section class="section section--off text-center">
  <div class="container">
    <span class="section-label">OUR STORY</span>
    <h2 class="max-w-lg mx-auto">One Vision. Five Specialized Divisions.</h2>
    <div class="reveal max-w-lg mx-auto" style="text-align:left;">
      <p>Every successful organization begins with a vision. Signifive Services was founded on the belief that businesses and individuals often require multiple professional services throughout their journey. Managing different providers for every requirement can be inefficient, time-consuming, and inconsistent.</p>
      <p>We envisioned a different approach. By bringing Automobile, Solar Energy, Hospitality &amp; Tourism, Taxation &amp; Corporate Consultancy, and E-Commerce together under one professionally managed organization, Signifive creates an integrated ecosystem where expertise, trust, and long-term relationships come first.</p>
      <p>Today, we continue building that vision with a commitment to professionalism, innovation, and sustainable growth.</p>
    </div>
  </div>
</section>

<!-- VISION & MISSION -->
<section class="section">
  <div class="container">
    <div class="grid grid-2 reveal">
      <div class="card">
        <span class="section-label">OUR VISION</span>
        <p style="font-size:18px;color:var(--color-heading);">To become one of Pakistan's most trusted diversified business groups, recognized for delivering integrated solutions, professional excellence, and long-term value.</p>
      </div>
      <div class="card">
        <span class="section-label">OUR MISSION</span>
        <p style="font-size:18px;color:var(--color-heading);">To simplify business and personal needs by providing reliable, customer-focused solutions through specialized business divisions operating under one trusted organization.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="section section--off">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:64px;">
      <span class="section-label">OUR VALUES</span>
      <h2>The Principles That Define Every Decision</h2>
    </div>
    <div class="grid grid-3 reveal">
      <?php
      $values = [
        ['Integrity','We believe honesty and transparency are the foundation of every successful relationship.'],
        ['Professionalism','We approach every engagement with expertise, responsibility, and respect.'],
        ['Customer Commitment',"Our clients' goals shape every solution we deliver."],
        ['Collaboration','Strong partnerships are built through teamwork, open communication, and shared success.'],
        ['Innovation','We continuously seek smarter ways to improve experiences, processes, and outcomes.'],
        ['Excellence','We strive to deliver quality that reflects the standards we set for ourselves.'],
      ];
      foreach ($values as $v): ?>
      <div class="card"><h6><?php echo $v[0]; ?></h6><p style="font-size:15px;"><?php echo $v[1]; ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="section text-center">
  <div class="container">
    <span class="section-label">OUR PHILOSOPHY</span>
    <h2 class="max-w-lg mx-auto">Relationships Before Transactions. Value Before Volume.</h2>
    <p class="max-w-md mx-auto">We believe business is built on relationships, not transactions. Every client deserves a partner who listens carefully, understands their objectives, and delivers solutions with consistency and integrity.</p>
  </div>
</section>

<?php 
$footerCtaTitle = "Building Today for a Better Tomorrow";
$footerCtaDesc = "Our ambitions extend beyond growth. Speak with Signifive about business solutions, strategic partnerships or opportunities across our divisions.";
$footerCtaLink = "contact.php";
$footerCtaBtnText = "Contact Our Team";
require_once __DIR__ . '/includes/footer.php'; 
?>
