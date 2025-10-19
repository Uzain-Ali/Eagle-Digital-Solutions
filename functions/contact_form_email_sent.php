<?php
include "../includes/variables.php";

global $APP_URL;

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $senderEmail = 'info@webprotech.pro';
    $subject = 'New Query';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';


    // Concatenate form data into the message body
    $message .= "Subject: $subject\n";
    $message .= "Interested in: $category_id\n";
    $message .= "User Name : $user_name \n";
    $message .= "Email : $email \n";
    $message .= "Phone: $phone\n";
    $message .= "Description: $description\n";


    // Set headers
    $headers = "From: $senderEmail\r\n";
    $headers .= "Reply-To: $senderEmail\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Send email
    if (mail($senderEmail, $subject, $message, $headers)) {

        header("Location: " . $APP_URL . "/contact.php");
        $_SESSION['success'] = 'Email sent successfully!';
    } else {
        echo 'Email could not be sent.';
    }
}
?>
