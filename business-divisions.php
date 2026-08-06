<?php
$pageTitle = 'Business Divisions';
$pageDescription = 'Signifive Services brings together specialized expertise across multiple industries under one professionally managed organization.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero" style="min-height:60vh; --hero-img:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1600');">
  <div class="container">
    <div class="breadcrumb">Home / Business Divisions</div>
    <div class="hero-content reveal in-view">
      <span class="section-label" style="color:var(--color-gold)">OUR BUSINESS DIVISIONS</span>
      <h1>Five Specialized Divisions. One Trusted Brand.</h1>
      <p class="lead">Signifive Services brings together specialized expertise across multiple industries under one professionally managed organization. Each division operates with its own focus while sharing the same commitment to quality, professionalism, and customer success.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container text-center reveal">
    <span class="section-label">OUR EXPERTISE</span>
    <h2>Delivering Expertise Across Diverse Industries</h2>
    <p class="max-w-md mx-auto">Every client has unique requirements, and every industry demands specialized knowledge. Each division is led by professionals who understand their industry while operating under the shared values and standards that define the Signifive brand.</p>
  </div>
</section>

<section class="section section--off">
  <div class="container">
    <div class="grid grid-3 reveal">
      <?php
      $cards = [
        ['icon'=>'fa-car-side','name'=>'Signifive Automobile','tag'=>'Driving Confidence Through Reliable Automotive Solutions','desc'=>'Vehicle buying, selling, sourcing, procurement, and fleet solutions for individuals and businesses.','img'=>'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=800','url'=>'automobile.php'],
        ['icon'=>'fa-solar-panel','name'=>'Signifive Solar Energy','tag'=>'Powering a Sustainable Future','desc'=>'Residential, commercial, and industrial solar solutions from consultation to installation.','img'=>'https://images.unsplash.com/photo-1509391366360-2e959784a276?q=80&w=800','url'=>'solar-energy.php'],
        ['icon'=>'fa-plane-departure','name'=>'Signifive Hospitality & Tourism','tag'=>'Creating Seamless Travel Experiences','desc'=>'Corporate travel management, tour packages, hotel reservations, and travel consultation.','img'=>'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=800','url'=>'hospitality.php'],
        ['icon'=>'fa-chart-line','name'=>'Taxation & Corporate Consultancy','tag'=>'Simplifying Business Through Professional Advisory','desc'=>'Taxation, accounting, company registration, and corporate advisory services.','img'=>'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800','url'=>'consultancy.php'],
        ['icon'=>'fa-cart-shopping','name'=>'Signifive E-Commerce','tag'=>'Enabling Growth in the Digital Marketplace','desc'=>'Marketplace management, retail, wholesale, and international trade solutions.','img'=>'https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=800','url'=>'ecommerce.php'],
      ];
      foreach ($cards as $c): ?>
      <div class="card division-card">
        <div class="division-media" style="background-image:url('<?php echo $c['img']; ?>');"></div>
        <div class="division-body">
          <div class="division-icon"><i class="fa-solid <?php echo $c['icon']; ?>"></i></div>
          <h5><?php echo $c['name']; ?></h5>
          <p style="font-weight:600;color:var(--color-heading);font-size:15px;"><?php echo $c['tag']; ?></p>
          <p style="font-size:15px;"><?php echo $c['desc']; ?></p>
          <a href="<?php echo $c['url']; ?>" class="btn-text">Explore <?php echo explode(' ', $c['name'])[1] ?? $c['name']; ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container text-center reveal">
    <span class="section-label">WHY OUR MODEL WORKS</span>
    <h2>One Relationship. Multiple Solutions.</h2>
    <p class="max-w-md mx-auto">Choosing Signifive means choosing a partner that understands your evolving needs. Our integrated business model allows you to access multiple professional services through one trusted organization.</p>
  </div>
  <div class="container">
    <div class="grid grid-4 reveal">
      <div class="card"><h6>Integrated Expertise</h6><p style="font-size:15px;">Specialized knowledge across five business divisions.</p></div>
      <div class="card"><h6>Consistent Standards</h6><p style="font-size:15px;">Professional service backed by shared values and operational excellence.</p></div>
      <div class="card"><h6>Long-Term Partnerships</h6><p style="font-size:15px;">Building relationships that extend beyond individual transactions.</p></div>
      <div class="card"><h6>Customer-Focused Solutions</h6><p style="font-size:15px;">Every solution is designed around your unique requirements.</p></div>
    </div>
  </div>
</section>

<?php 
$footerCtaTitle = "Discover the Right Solution for Your Needs";
$footerCtaDesc = "Explore our specialized business divisions and discover how Signifive Services can support your personal and business goals through trusted expertise.";
$footerCtaLink = "contact.php";
$footerCtaBtnText = "Contact Our Team";
require_once __DIR__ . '/includes/footer.php'; 
?>
