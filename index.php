<?php
$pageTitle='Integrated Business Solutions';
$pageDescription='Signifive Services provides integrated solutions across automobile, solar energy, hospitality, corporate consultancy and e-commerce.';
require 'includes/header.php';
?>
<section class="consalt-hero">
  <div class="container consalt-hero-grid">
    <div class="consalt-hero-copy reveal">
      <span class="eyebrow eyebrow-light">WELCOME TO SIGNIFIVE SERVICES</span>
      <h1>Crafting Integrated<br>Solutions for Your<br>Business</h1>
      <p>We bring specialist knowledge, practical execution and dependable support together to help businesses move forward with confidence.</p>
      <div class="hero-actions"><a class="pill-btn" href="business-divisions.php">Get Started Now</a><a class="hero-phone" href="tel:<?= preg_replace('/\s+/','',SITE_PHONE) ?>"><i class="fa-solid fa-phone"></i> <?= SITE_PHONE ?></a></div>
    </div>
    <div class="consalt-hero-media reveal">
      <div class="hero-spark"><i class="fa-solid fa-asterisk"></i></div>
      <div class="hero-picture"><img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=85&w=1300&auto=format&fit=crop" alt="Signifive consulting team"></div>
      <a class="play-disc" href="about.php" aria-label="Learn about Signifive"><i class="fa-solid fa-play"></i></a>
    </div>
  </div>
</section>

<section class="partner-strip"><div class="container partner-row"><span>Automobile</span><span>Solar Energy</span><span>Hospitality</span><span>Corporate Advisory</span><span>E-Commerce</span></div></section>

<section class="home-feature section-pad">
  <div class="container">
    <div class="consalt-heading text-center reveal"><span class="eyebrow">WHY CHOOSE SIGNIFIVE</span><h2>Unlocking Your Business Potential with<br>Dedicated Expertise</h2><p>One professionally managed group, multiple specialist capabilities and one consistent service standard.</p></div>
    <div class="consalt-feature-grid">
      <?php $features=[['fa-puzzle-piece','Integrated Business Planning','Coordinated support across industries, services and business functions.'],['fa-at','Specialist Consulting','Experienced professionals focused on practical and measurable outcomes.'],['fa-globe','Growth Opportunities','Solutions structured to help you operate, expand and compete effectively.'],['fa-people-group','Long-Term Partnership','Responsive communication, dependable delivery and continued support.']]; foreach($features as $i=>$f): ?>
      <article class="consalt-feature-card reveal"><div class="feature-icon-line"><i class="fa-solid <?= $f[0] ?>"></i></div><h3><?= $f[1] ?></h3><p><?= $f[2] ?></p><div class="feature-index">0<?= $i+1 ?></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="consalt-services notched-section">
  <div class="notch-emblem"><i class="fa-solid fa-asterisk"></i></div>
  <div class="container">
    <div class="consalt-heading dark text-center reveal"><span class="eyebrow eyebrow-light">SOLUTION APPROACH</span><h2>Professional Services Across<br>Every Business Need</h2></div>
    <div class="service-card-grid">
      <?php $services=[['Automobile Solutions','Vehicle sourcing, procurement, sales and fleet support.','automobile.php','https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=85&w=900&auto=format&fit=crop'],['Solar Energy Solutions','Residential, commercial and industrial renewable energy systems.','solar-energy.php','https://images.unsplash.com/photo-1509391366360-2e959784a276?q=85&w=900&auto=format&fit=crop'],['Hospitality & Tourism','Corporate travel, reservations, tours and complete trip planning.','hospitality.php','https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=85&w=900&auto=format&fit=crop']]; foreach($services as $i=>$s): ?>
      <article class="service-show-card reveal <?= $i===1?'active':'' ?>"><div class="service-show-image"><img src="<?= $s[3] ?>" alt="<?= $s[0] ?>"></div><div class="service-show-body"><h3><?= $s[0] ?></h3><p><?= $s[1] ?></p><a href="<?= $s[2] ?>">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="outline-marquee">
  <div class="marquee-track">
    <div class="marquee-content">
      <span>Business <strong>Consulting</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Integrated <strong>Solutions</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Automobile <strong>Services</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Solar <strong>Energy</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Hospitality & <strong>Tourism</strong></span>
      <span class="marquee-dot">◦</span>
      <span>E-Commerce <strong>Solutions</strong></span>
      <span class="marquee-dot">◦</span>
    </div>
    <div class="marquee-content" aria-hidden="true">
      <span>Business <strong>Consulting</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Integrated <strong>Solutions</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Automobile <strong>Services</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Solar <strong>Energy</strong></span>
      <span class="marquee-dot">◦</span>
      <span>Hospitality & <strong>Tourism</strong></span>
      <span class="marquee-dot">◦</span>
      <span>E-Commerce <strong>Solutions</strong></span>
      <span class="marquee-dot">◦</span>
    </div>
  </div>
</div>

<section class="about-consalt section-pad">
  <div class="container about-consalt-grid">
    <div class="about-consalt-media reveal"><img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=85&w=1200&auto=format&fit=crop" alt="Business consulting discussion"><div class="round-seal">SIGNIFIVE • BUSINESS • SOLUTIONS •</div></div>
    <div class="about-consalt-copy reveal"><span class="eyebrow">ABOUT COMPANY</span><h2>One dependable group helping businesses turn ideas into results.</h2><p>Signifive brings together focused divisions in mobility, clean energy, hospitality, corporate advisory and e-commerce. Our teams work with clarity, ownership and a practical understanding of business priorities.</p><ul><li><i class="fa-solid fa-check"></i> Professional specialist teams</li><li><i class="fa-solid fa-check"></i> Transparent project communication</li><li><i class="fa-solid fa-check"></i> Practical solutions built around your goals</li></ul><div class="hero-actions"><a class="pill-btn" href="about.php">More About Us</a><a class="mail-link" href="mailto:<?= SITE_EMAIL ?>"><i class="fa-solid fa-envelope"></i> <?= SITE_EMAIL ?></a></div></div>
  </div>
</section>

<section class="counter-panel"><div class="container"><div class="counter-top"><h2>Perform Market Research to gain<br>Insights into Industry Trends</h2><a class="pill-btn" href="contact.php">Get Started Now</a></div><div class="counter-grid"><div><strong>5+</strong><span>BUSINESS<br>DIVISIONS</span></div><div><strong>250+</strong><span>PROJECTS<br>SUPPORTED</span></div><div><strong>95%</strong><span>CLIENT<br>SATISFACTION GOAL</span></div></div></div></section>

<section class="steps-consalt section-pad">
  <div class="container"><div class="consalt-heading text-center reveal"><span class="eyebrow">OUR WORKING STEPS</span><h2>A Clear, Collaborative Process<br>from Discovery to Delivery</h2><p>Every engagement is structured around transparency, ownership and measurable progress.</p></div><div class="steps-consalt-grid">
  <?php foreach([['fa-file-lines','Discovery & Planning','We understand the requirement, define priorities and agree the project direction.'],['fa-display','Execution & Monitoring','Our specialists deliver the work while keeping progress visible and organized.'],['fa-circle-check','Completion & Support','We review, refine and remain available for support after delivery.']] as $i=>$s): ?><article class="step-folder reveal"><span class="step-no">0<?= $i+1 ?></span><div class="step-round"><i class="fa-solid <?= $s[0] ?>"></i></div><h3><?= $s[1] ?></h3><p><?= $s[2] ?></p><a href="contact.php"><i class="fa-solid fa-arrow-right"></i></a></article><?php endforeach; ?>
  </div></div>
</section>

<section class="pricing-consalt">
  <div class="container pricing-consalt-grid"><div class="pricing-intro reveal"><span class="eyebrow eyebrow-light">PRICING PLANS</span><h2>Choose the Comfortable Support Plan for Your Business</h2><p>Packages are starting points and can be tailored to the selected division, scope and expected outcomes.</p><a class="circle-arrow" href="contact.php"><i class="fa-solid fa-arrow-right"></i></a></div>
  <?php $plans=[['Starter Plan','Individual','$149',['60-minute consultation','Initial business assessment','Priority recommendations','7-day email support']],['Business Plan','Company','$399',['Strategy workshop','Detailed action roadmap','Specialist implementation support','30-day follow-up']]]; foreach($plans as $p): ?><article class="price-folder reveal"><div class="price-head"><span class="price-icon"><i class="fa-solid fa-box-open"></i></span><div><h3><?= $p[0] ?></h3><span><?= $p[1] ?></span></div></div><ul><?php foreach($p[3] as $li): ?><li><i class="fa-regular fa-circle-check"></i><?= $li ?></li><?php endforeach; ?></ul><div class="price-value"><sup>$</sup><?= ltrim($p[2],'$') ?><small>/ project</small></div><a class="outline-pill" href="contact.php">Get Started</a></article><?php endforeach; ?>
  </div>
</section>

<section class="work-consalt section-pad"><div class="container"><div class="consalt-heading text-center reveal"><span class="eyebrow">LATEST WORKS</span><h2>Recent Projects Delivered<br>with Focus and Care</h2></div><div class="work-consalt-grid">
<?php $works=[['Mobility & Fleet Support','Automobile','https://images.unsplash.com/photo-1493238792000-8113da705763?q=85&w=900&auto=format&fit=crop'],['Clean Energy Planning','Solar Energy','https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?q=85&w=900&auto=format&fit=crop'],['Business Growth Advisory','Consultancy','https://images.unsplash.com/photo-1552664730-d307ca884978?q=85&w=900&auto=format&fit=crop']]; foreach($works as $w): ?><article class="work-consalt-card reveal"><img src="<?= $w[2] ?>" alt="<?= $w[0] ?>"><div><span><?= $w[1] ?></span><h3><?= $w[0] ?></h3><a href="business-divisions.php"><i class="fa-solid fa-arrow-right"></i></a></div></article><?php endforeach; ?></div></div></section>

<section class="team-consalt section-pad"><div class="container"><div class="consalt-heading text-center reveal"><span class="eyebrow">OUR TEAM</span><h2>Dedicated Professionals<br>Behind Signifive Services</h2><p>Temporary team profiles are included below and can be replaced with final names, roles and photographs.</p></div><div class="team-consalt-grid">
<?php $team=[['Ahmed Khan','Group Director','https://images.unsplash.com/photo-1560250097-0b93528c311a?q=85&w=700&auto=format&fit=crop'],['Sarah Malik','Corporate Consultant','https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=85&w=700&auto=format&fit=crop'],['Usman Ali','Operations Lead','https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=85&w=700&auto=format&fit=crop'],['Ayesha Noor','Client Success Manager','https://images.unsplash.com/photo-1580489944761-15a19d654956?q=85&w=700&auto=format&fit=crop']]; foreach($team as $t): ?><article class="team-consalt-card reveal"><div class="team-consalt-photo"><img src="<?= $t[2] ?>" alt="<?= $t[0] ?>"><div class="team-hover"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a><a href="mailto:<?= SITE_EMAIL ?>"><i class="fa-solid fa-envelope"></i></a></div></div><h3><?= $t[0] ?></h3><span><?= $t[1] ?></span></article><?php endforeach; ?></div></div></section>

<section class="testimonial-consalt"><div class="container testimonial-card reveal"><div class="testimonial-photo"><img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=85&w=1100&auto=format&fit=crop" alt="Client consultation"><div class="testimonial-rating"><i class="fa-solid fa-star"></i> Average Rating 4.9</div></div><div class="testimonial-text"><div class="testimonial-quote">“</div><div class="stars">★★★★★</div><blockquote>“Signifive understood our priorities, communicated clearly and helped us move from planning to execution with confidence. The team stayed practical, responsive and focused on outcomes throughout the engagement.”</blockquote><div class="testimonial-person"><span>MS</span><div><strong>Business Client</strong><small>Corporate Advisory</small></div></div></div></div></section>

<?php 
$footerCtaTitle = "Ready to discuss your next business move?";
$footerCtaDesc = "Let's connect to discover how Signifive Services can support your personal and business goals.";
$footerCtaLink = "contact.php";
$footerCtaBtnText = "Book a Consultation";
require 'includes/footer.php'; 
?>
