<?php
$pageTitle = 'Leadership';
$pageDescription = "Meet the leadership team guiding Signifive Services with integrity, collaboration, and long-term business focus.";
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero" style="--hero-img:url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=85&w=1800&auto=format&fit=crop');">
  <div class="container">
    <div class="breadcrumb">Home / Leadership</div>
    <div class="hero-content reveal in-view">
      <span class="section-label light">OUR LEADERSHIP</span>
      <h1>Leadership Built on Clarity, Trust and Purpose.</h1>
      <p class="lead">Our leadership team brings together strategic thinking, operational discipline and a shared commitment to creating dependable value across every Signifive division.</p>
      <div class="btn-group"><a href="contact.php" class="btn btn-primary">Connect with Our Team <i class="fa-solid fa-arrow-right"></i></a></div>
    </div>
  </div>
</section>

<section class="section text-center">
  <div class="container">
    <span class="section-label">OUR PHILOSOPHY</span>
    <h2 class="max-w-lg mx-auto">Leading with Vision. Growing with Purpose.</h2>
    <p class="max-w-md mx-auto">We lead through integrity, accountability and collaboration. Every decision is shaped by the long-term interests of our clients, teams and business partners.</p>
  </div>
</section>

<section class="section section--off">
  <div class="container">
    <div class="text-center reveal section-heading">
      <span class="section-label">THE PEOPLE BEHIND SIGNIFIVE</span>
      <h2>Meet Our Leadership Team</h2>
      <p>Representative profiles are included and can be replaced with final names, roles and portraits when approved.</p>
    </div>
    <div class="leadership-grid reveal">
      <?php
      $leaders = [
        ['Muhammad Ahmed','Chief Executive Officer','Providing strategic direction and guiding the group’s long-term growth.','https://images.unsplash.com/photo-1560250097-0b93528c311a?q=85&w=700&auto=format&fit=crop'],
        ['Sara Khan','Managing Director','Leading operational excellence and consistent performance across divisions.','https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=85&w=700&auto=format&fit=crop'],
        ['Ali Hassan','Director, Business Development','Building strategic partnerships and identifying new market opportunities.','https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=85&w=700&auto=format&fit=crop'],
        ['Ayesha Noor','Director, Corporate Affairs','Supporting governance, organizational development and stakeholder relations.','https://images.unsplash.com/photo-1580489944761-15a19d654956?q=85&w=700&auto=format&fit=crop'],
      ];
      foreach ($leaders as $l): ?>
      <article class="leader-card">
        <img src="<?= $l[3] ?>" alt="<?= htmlspecialchars($l[0]) ?>">
        <div class="leader-card-body"><div class="leader-name"><?= $l[0] ?></div><div class="leader-role"><?= $l[1] ?></div><p><?= $l[2] ?></p></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="text-center reveal section-heading"><span class="section-label">OUR PRINCIPLES</span><h2>The Principles That Guide Us</h2></div>
    <div class="grid grid-3 reveal">
      <?php
      $principles = [
        ['fa-shield-halved','Integrity','Honest, transparent and ethical decisions in every business relationship.'],
        ['fa-bullseye','Accountability','Clear ownership of commitments, timelines and expected outcomes.'],
        ['fa-lightbulb','Innovation','A practical willingness to improve systems, ideas and customer experiences.'],
        ['fa-people-group','Collaboration','Strong results created through teamwork, partnership and shared knowledge.'],
        ['fa-handshake','Customer Commitment','Every engagement begins with understanding the client’s real priorities.'],
        ['fa-seedling','Sustainable Growth','Long-term value for clients, employees, partners and stakeholders.'],
      ];
      foreach ($principles as $p): ?>
      <article class="card principle-card"><div class="icon-badge"><i class="fa-solid <?= $p[0] ?>"></i></div><h3><?= $p[1] ?></h3><p><?= $p[2] ?></p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php 
$footerCtaTitle = "Partner with a Team Committed to Your Success";
$footerCtaDesc = "Speak with Signifive about business solutions, strategic partnerships or opportunities across our divisions.";
$footerCtaLink = "contact.php";
$footerCtaBtnText = "Contact Our Leadership Team";
require_once __DIR__ . '/includes/footer.php'; 
?>
