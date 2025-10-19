<?php
include_once('config/db-connect.php');
require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize and extract all form fields
    // Assuming $conn object is available for real_escape_string
    if (!isset($conn)) {
        // Fallback or error handling if $conn is not defined
        // For security, you should use prepared statements, but matching the original structure:
        $name = htmlspecialchars($_POST['user_name'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        $phone = htmlspecialchars($_POST['phone'] ?? '');
        $category = htmlspecialchars($_POST['category_id'] ?? '');
        $description = htmlspecialchars($_POST['description'] ?? '');
        
        // Use a basic sanitization if $conn is not available
        $msg = $description;
    } else {
        $name = $conn->real_escape_string($_POST['user_name'] ?? '');
        $email = $conn->real_escape_string($_POST['email'] ?? '');
        $phone = $conn->real_escape_string($_POST['phone'] ?? '');
        $category = $conn->real_escape_string($_POST['category_id'] ?? '');
        $msg = $conn->real_escape_string($_POST['description'] ?? '');
    }

    // 2. Save to DB (Only run if $conn is defined)
    if (isset($conn)) {
        // Updated SQL to match new form fields (name, email, phone, category, description)
        $sql = "INSERT INTO contacts(user_name, email, phone, category_id, description) VALUES('$name', '$email', '$phone', '$category', '$msg')";
        $conn->query($sql);
    }
    
    // 3. Send email via cPanel SMTP
    $mail = new PHPMailer(true);
    try {
        // --- cPanel SMTP Configuration (Replace with your actual cPanel email credentials) ---
        $mail->isSMTP();
        $mail->Host       = 'mail@eagledigitalsolutions.com'; // Updated to use the main domain as the Outgoing Server
        $mail->SMTPAuth   = true;
        // Use a full cPanel email address and its password
        $mail->Username   = 'info@eagledigitalsolutions.com'; // Your cPanel email address
        $mail->Password   = 'incorrect$321';     // <--- INSERT YOUR PASSWORD HERE
        $mail->SMTPSecure = 'ssl'; // Use SSL encryption
        $mail->Port       = 465;   // Correct port for SSL/SMTPS

        // Sender (must match the authenticated username for cPanel hosting)
        $mail->setFrom('info@eagledigitalsolutions.com', 'Eagle Digital Solutions');
        
        // Recipient (Where the submission notification goes)
        $mail->addAddress('info@eagledigitalsolutions.com'); // Where you want to receive messages

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Project Request: $category";
        
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <table border='1' cellpadding='10' cellspacing='0'>
                <tr><td><b>Interested in:</b></td><td>$category</td></tr>
                <tr><td><b>Name:</b></td><td>$name</td></tr>
                <tr><td><b>Email:</b></td><td>$email</td></tr>
                <tr><td><b>Phone:</b></td><td>$phone</td></tr>
                <tr><td colspan='2'><b>Project Description:</b></td></tr>
                <tr><td colspan='2'>$msg</td></tr>
            </table>
        ";

        $mail->send();
        
        // Set success message for display on redirect
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        $_SESSION['success'] = "Thank you! Your request has been successfully submitted.";

    } catch (Exception $e) {
        // Log the error instead of silently failing
        error_log("PHPMailer Error: " . $e->getMessage());
        
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        $_SESSION['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
        // Redirect back to contact page with error
        header("Location: contact.php?error=1");
        exit;
    }

    // Redirect to contact.php on success
    header("Location: contact.php?success=1");
    exit;
}
?>