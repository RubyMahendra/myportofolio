<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format: $email')</script>";
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'turahruby@gmail.com'; // Your Gmail email
        $mail->Password = 'onvh ttgr rjky hfle'; // Your App Password from Google
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set email parameters
        $mail->setFrom('turahruby@gmail.com', 'Ruby Mahendradana');
        $mail->addAddress('turahruby@gmail.com'); // Add your own email here
        $mail->isHTML(true);
        $mail->Subject = 'New Collaboration Interest';
        $mail->Body = "
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        ";

        // Send email
        $mail->send();

        // Redirect back to contactme.php
        header('Location: ../file/home2.php');
        exit;
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
}
?>
