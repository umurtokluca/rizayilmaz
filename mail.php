<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php of PHPMailer

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ry.rizayilmaz@gmail.com';                     // SMTP username
        $mail->Password   = 'f1reeDom.';                         // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('info@umurtokluca.com', 'Umur Tokluca');
        $mail->addAddress('info@umurtokluca.com');                  // Add a recipient

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Message: $message";

        $mail->send();
        echo 'Message has been sent';
		
		header('Location: index.html');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>