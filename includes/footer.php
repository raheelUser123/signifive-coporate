</main>
<?php
if (!isset($hideFooterCTA)) { $hideFooterCTA = false; }
if (!isset($footerCtaTitle)) { $footerCtaTitle = "Your Journey Starts Here"; }
if (!isset($footerCtaDesc)) { $footerCtaDesc = "Every successful relationship begins with a single conversation. Let's take the first step together."; }
if (!isset($footerCtaLink)) { $footerCtaLink = "contact.php"; }
if (!isset($footerCtaBtnText)) { $footerCtaBtnText = "Book a Consultation"; }
?>
<footer class="footer">
  <?php if (!$hideFooterCTA): ?>
  <div class="container">
    <div class="footer-cta-card">
      <div class="footer-cta-content">
        <span class="section-label light">LET'S BUILD SOMETHING MEANINGFUL</span>
        <h2><?= htmlspecialchars($footerCtaTitle) ?></h2>
        <p><?= htmlspecialchars($footerCtaDesc) ?></p>
      </div>
      <div class="footer-cta-action">
        <a href="<?= htmlspecialchars($footerCtaLink) ?>" class="btn btn-gold"><?= htmlspecialchars($footerCtaBtnText) ?> <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="container footer-grid">
    <div class="footer-brand"><img src="assets/images/logo-signifive.png" alt="Signifive Services"><p>Integrated, professional and reliable business solutions built around trust, transparency and long-term value.</p><div class="footer-social"><a href="#"><i class="fa-brands fa-facebook-f"></i></a><a href="#"><i class="fa-brands fa-linkedin-in"></i></a><a href="#"><i class="fa-brands fa-instagram"></i></a></div></div>
    <div><h4>Company</h4><a href="about.php">About Us</a><a href="business-divisions.php">Business Divisions</a><a href="leadership.php">Leadership</a><a href="contact.php">Contact</a></div>
    <div><h4>Divisions</h4><?php foreach($SIGNIFIVE_DIVISIONS as $d): ?><a href="<?= $d['url'] ?>"><?= $d['label'] ?></a><?php endforeach; ?></div>
    <div><h4>Contact</h4><p><i class="fa-solid fa-phone"></i><a href="tel:+923128577037"><?= SITE_PHONE ?></a></p><p><i class="fa-solid fa-envelope"></i><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p><p><i class="fa-solid fa-location-dot"></i><?= SITE_ADDRESS ?></p></div>
  </div>
  <div class="container footer-bottom"><span>© <?= date('Y') ?> Signifive Services. All rights reserved.</span><span><a href="privacy-policy.php">Privacy Policy</a><a href="terms-conditions.php">Terms & Conditions</a></span></div>
</footer>
<script src="assets/js/main.js"></script>
</body></html>

