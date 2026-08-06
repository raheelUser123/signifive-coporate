<?php
/**
 * Handles the Contact Us form submission.
 * Sends the enquiry via authenticated SMTP (cPanel business email) using PHPMailer.
 */

header('Content-Type: application/json');
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/PHPMailer/Exception.php';
require_once __DIR__ . '/lib/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/lib/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function respond($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method.');
}

// ---- Collect & sanitize input ----
$name     = trim(filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$company  = trim(filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$phone    = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$email    = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
$division = trim(filter_input(INPUT_POST, 'division', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$subject  = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$message  = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');

// Honeypot spam trap (hidden field named "website" in the form)
if (!empty($_POST['website'])) {
    respond(true, 'Thank you for contacting Signifive Services.');
}

// ---- Validation ----
if ($name === '' || $email === '' || $message === '') {
    respond(false, 'Please fill in your name, email, and message.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please provide a valid email address.');
}

// ---- Send email via SMTP ----
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = SMTP_SECURE === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO, MAIL_TO_NAME);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Website Enquiry — ' . ($subject !== '' ? $subject : 'General Enquiry');

    $body = "<h2 style='color:#2E5D95;'>New Enquiry from Signifive Website</h2>";
    $body .= "<table style='border-collapse:collapse;width:100%;font-family:Arial,sans-serif;'>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Full Name</td><td style='padding:8px;'>" . htmlspecialchars($name) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Company</td><td style='padding:8px;'>" . htmlspecialchars($company) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Phone</td><td style='padding:8px;'>" . htmlspecialchars($phone) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Email</td><td style='padding:8px;'>" . htmlspecialchars($email) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Business Division</td><td style='padding:8px;'>" . htmlspecialchars($division) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;'>Subject</td><td style='padding:8px;'>" . htmlspecialchars($subject) . "</td></tr>";
    $body .= "<tr><td style='padding:8px;font-weight:bold;vertical-align:top;'>Message</td><td style='padding:8px;'>" . nl2br(htmlspecialchars($message)) . "</td></tr>";
    $body .= "</table>";

    $mail->Body    = $body;
    $mail->AltBody = "New enquiry from $name ($email)\nCompany: $company\nPhone: $phone\nDivision: $division\nSubject: $subject\n\nMessage:\n$message";

    $mail->send();

    // Optional: send a confirmation email to the enquirer
    $mail->clearAddresses();
    $mail->clearReplyTos();
    $mail->addAddress($email, $name);
    $mail->Subject = 'Thank you for contacting Signifive Services';
    $mail->Body = "<p>Dear " . htmlspecialchars($name) . ",</p>"
                . "<p>Thank you for contacting Signifive Services. Your enquiry has been received, and one of our representatives will get back to you as soon as possible.</p>"
                . "<p>Best regards,<br>Signifive Services</p>";
    $mail->AltBody = "Thank you for contacting Signifive Services. Your enquiry has been received, and one of our representatives will get back to you as soon as possible.";
    $mail->send();

    respond(true, 'Thank you for contacting Signifive Services. Your enquiry has been received, and one of our representatives will get back to you shortly.');

} catch (Exception $e) {
    respond(false, 'Your message could not be sent at this time. Please try again later or contact us directly at ' . SITE_EMAIL . '.');
}
