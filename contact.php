<?php
$pageTitle = 'Contact Us';
$pageDescription = "Let's start the conversation. Reach out to Signifive Services and we'll connect you with the right business division.";
require_once __DIR__ . '/includes/header.php';
$preselectedDivision = isset($_GET['division']) ? htmlspecialchars($_GET['division']) : '';
?>

<section class="hero" style="min-height:55vh; --hero-img:url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1600');">
  <div class="container">
    <div class="breadcrumb">Home / Contact</div>
    <div class="hero-content reveal in-view">
      <span class="section-label" style="color:var(--color-gold)">CONTACT SIGNIFIVE</span>
      <h1>Let's Start the Conversation</h1>
      <p class="lead">Whether you're looking for professional business solutions, exploring partnership opportunities, or seeking expert guidance, our team is here to help.</p>
    </div>
  </div>
</section>

<!-- CONTACT INFO CARDS -->
<section class="section">
  <div class="container">
    <div class="grid grid-4 reveal">
      <div class="card contact-card">
        <div class="icon-badge"><i class="fa-solid fa-location-dot"></i></div>
        <div><h6>Head Office</h6><p style="font-size:14px;"><?php echo SITE_ADDRESS; ?></p></div>
      </div>
      <div class="card contact-card">
        <div class="icon-badge"><i class="fa-solid fa-phone"></i></div>
        <div><h6>Phone</h6><p style="font-size:14px;"><?php echo SITE_PHONE; ?></p></div>
      </div>
      <div class="card contact-card">
        <div class="icon-badge"><i class="fa-solid fa-envelope"></i></div>
        <div><h6>Email</h6><p style="font-size:14px;"><?php echo SITE_EMAIL; ?></p></div>
      </div>
      <div class="card contact-card">
        <div class="icon-badge"><i class="fa-solid fa-clock"></i></div>
        <div><h6>Business Hours</h6><p style="font-size:14px;">Mon – Sat: 11:00 AM – 7:00 PM</p></div>
      </div>
    </div>
  </div>
</section>

<!-- DIVISION DIRECTORY -->
<section class="section section--off">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <span class="section-label">OUR DIVISIONS</span>
      <h2>Connect with the Right Division</h2>
      <p class="max-w-md mx-auto">To ensure your enquiry reaches the right team, choose the division that best matches your requirements below, or use the general enquiry form.</p>
    </div>
    <div class="grid grid-5 reveal">
      <?php 
      $divisionDescriptions = [
        'automobile'   => 'Procurement, sales & fleet management',
        'solar'        => 'Solar power & renewable energy systems',
        'hospitality'  => 'Corporate travel, tours & bookings',
        'consultancy'  => 'Taxation, advisory & corporate compliance',
        'ecommerce'    => 'Digital commerce & retail platforms'
      ];
      foreach ($SIGNIFIVE_DIVISIONS as $key => $d): 
        $desc = $divisionDescriptions[$key] ?? 'Specialized business solutions';
      ?>
      <div class="contact-division-card" onclick="selectDivisionAndScroll('<?php echo htmlspecialchars($d['label']); ?>')">
        <div class="contact-division-icon">
          <i class="<?php echo $d['icon']; ?>"></i>
        </div>
        <h5 class="contact-division-title"><?php echo $d['label']; ?></h5>
        <p class="contact-division-desc"><?php echo $desc; ?></p>
        <span class="contact-division-btn">
          Select Division <i class="fa-solid fa-arrow-down"></i>
        </span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
function selectDivisionAndScroll(divisionName) {
  const select = document.getElementById('division');
  if (select) {
    for (let i = 0; i < select.options.length; i++) {
      if (select.options[i].value.toLowerCase() === divisionName.toLowerCase() || select.options[i].text.toLowerCase() === divisionName.toLowerCase()) {
        select.selectedIndex = i;
        break;
      }
    }
  }
  const form = document.getElementById('contactForm');
  if (form) {
    form.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
}
</script>

<!-- ENQUIRY FORM -->
<section class="section">
  <div class="container">
    <div class="split reveal">
      <div>
        <span class="section-label">ENQUIRY FORM</span>
        <h2>Tell Us How We Can Help</h2>
        <p>Complete the enquiry form and a member of our team will contact you shortly. The more information you provide, the better we can connect you with the right specialists.</p>

        <div id="formAlert" class="form-alert" style="display:none;"></div>

        <form id="contactForm" novalidate>
          <!-- honeypot spam field, hidden from real users -->
          <input type="text" name="website" style="position:absolute;left:-9999px;" tabindex="-1" autocomplete="off">

          <div class="grid grid-2">
            <div class="form-field">
              <label for="full_name">Full Name *</label>
              <input type="text" id="full_name" name="full_name" required>
            </div>
            <div class="form-field">
              <label for="company_name">Company Name</label>
              <input type="text" id="company_name" name="company_name">
            </div>
          </div>

          <div class="grid grid-2">
            <div class="form-field">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone">
            </div>
            <div class="form-field">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" required>
            </div>
          </div>

          <div class="form-field">
            <label for="division">Business Division</label>
            <select id="division" name="division">
              <option value="">General Enquiry</option>
              <?php foreach ($SIGNIFIVE_DIVISIONS as $key => $d): ?>
              <option value="<?php echo $d['label']; ?>" <?php echo ($preselectedDivision === $key) ? 'selected' : ''; ?>><?php echo $d['label']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-field">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
          </div>

          <div class="form-field">
            <label for="message">Message *</label>
            <textarea id="message" name="message" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%;">Send Message</button>
        </form>
      </div>
      <div class="split-media">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1000" alt="Signifive office">
        <!-- Google Map embed -->
        <iframe
          style="width:100%;height:260px;border:0;border-radius:16px;margin-top:24px;"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps?q=Karam+Tower+Gulistan-e-Johar+Karachi&output=embed">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section--off">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
      <h2>Answers to Common Questions</h2>
    </div>
    <div class="reveal max-w-lg mx-auto">
      <?php
      $faqs = [
        ['Which business division should I contact?','If you\'re unsure which division best matches your requirements, simply contact our general team. We\'ll direct your enquiry to the appropriate specialists.'],
        ['Can I request services from multiple divisions?','Yes. Signifive\'s integrated business model allows us to coordinate support across multiple divisions whenever your requirements extend beyond one area of expertise.'],
        ['How soon will I receive a response?','Our goal is to acknowledge enquiries promptly and provide an appropriate response within one business day.'],
        ['Can I arrange a meeting with your team?','Absolutely. Meetings can be scheduled in advance based on your preferred date, time, and area of interest.'],
      ];
      foreach ($faqs as $f): ?>
      <div class="accordion-item">
        <div class="accordion-header"><span><?php echo $f[0]; ?></span><span class="plus">+</span></div>
        <div class="accordion-body"><p><?php echo $f[1]; ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php 
$footerCtaTitle = "Your Journey Starts Here";
$footerCtaDesc = "Every successful relationship begins with a single conversation. Let's take the first step together.";
$footerCtaLink = "business-divisions.php";
$footerCtaBtnText = "Explore Our Business Divisions";
require_once __DIR__ . '/includes/footer.php'; 
?>
