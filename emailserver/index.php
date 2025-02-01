<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host       = 'mail.orbizenstudio.com'; // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hello@orbizenstudio.com'; // Your email
    $mail->Password   = 'Orbizenstudio2024+-'; // Your email password or app-specific password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption
    $mail->Port       = 587; // Port for SSL

    $name = $_POST['name'];
    $subject   = $_POST['subject'];
    $price   = $_POST['price'];
    $message   = $_POST['message'];
    $email   = $_POST['email'];

    // Recipients
    $mail->setFrom('client@orbizenstudio.com', $name);
    $mail->addAddress('hello@orbizenstudio.com', 'Orbizen Studio');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;

    $mail->Body    = "<div style='font-family: Arial, sans-serif; line-height: 1.6; color: #f0f0f0; background: #1e1e2f; max-width: 600px; margin: auto; border: 1px solid #444; border-radius: 8px; padding: 20px;'>
        <h2 style='color: #7bdcb5; text-align: center;'>New Inquiry from $name</h2>
        <p><strong>Email:</strong> <a href='mailto:$email' style='color: #7bdcb5;'>$email</a></p>
        <p><strong>Service Requested:</strong> $subject</p>
        <p><strong>Pricing Range:</strong> $price</p>
        <p><strong>Message:</strong></p>
        <div style='background: #2a2a3c; border: 1px solid #555; border-radius: 5px; padding: 15px; color: #e0e0e0;'>
            $message
        </div>
        <br>
        <p style='text-align: center; color: #999;'>This email was sent from your website's contact form.</p>
    </div>
    ";
    
    // Send email
    $mail->send();
    echo "Your message has been sent.";
    exit;
} catch (Exception $e) {
}

return 0;
