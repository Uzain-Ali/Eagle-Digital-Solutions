<?php
require('../config/db-connect.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$package_name = $_POST['package_name'];
$package_price = $_POST['package_price'];
$customer_first_name = $_POST['customer_first_name'];
$customer_last_name = $_POST['customer_last_name'];
$address =  $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$full_name = $customer_first_name.' '.$customer_last_name;


if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    $secretKey = '6LdvGfYrAAAAAPTPLJgaPtgqAKBRf7gO8hkeZk1T';
    $responseKey = $_POST['g-recaptcha-response']; 
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$responseKey;
    $response = file_get_contents($verifyUrl);
    $responseData = json_decode($response);
    if(!$responseData->success){
        $_SESSION['success'] = "Robot verification failed, please try again.";
        header("Location: ../order.php");
        exit;
    }
    $package_name = mysqli_real_escape_string($db, $package_name);
    $package_price = mysqli_real_escape_string($db, $package_price);
    $customer_first_name = mysqli_real_escape_string($db, $customer_first_name);
    $customer_last_name = mysqli_real_escape_string($db, $customer_last_name);
    $address = mysqli_real_escape_string($db, $address);
    $phone = mysqli_real_escape_string($db, $phone);
    $email = mysqli_real_escape_string($db, $email);

    $sql = "INSERT INTO orders (package_name, package_price, customer_first_name, customer_last_name, address, phone, email, created_at) VALUES ('$package_name', '$package_price', '$customer_first_name', '$customer_last_name', '$address', '$phone', '$email', CURRENT_TIMESTAMP())";

    if ($db->query($sql) === TRUE) {
        $_SESSION['success'] = "Your order has been placed successfully. Check your email for further information.";
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $db->error;
        echo '<script>window.location.href = "../order.php";</script>';
    }
    echo '<script>window.location.href = "../order.php";</script>';



    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'eagledigitalsolutions.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@eagledigitalsolutions.com';
        $mail->Password   = 'incorrect$321';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('info@eagledigitalsolutions.com', 'Eagle Digital Solutions');
        $mail->addAddress($email, $user_name);

        $mail->isHTML(true);
        $mail->Subject = 'Unlocking Success: Your Project Journey Begins Now!';
        $emailTemplate    = file_get_contents('../emails/order_email.html');

        $emailTemplate = str_replace('{{user_name}}', $customer_first_name, $emailTemplate);
        $emailTemplate = str_replace('{{package_name}}', $package_name, $emailTemplate);
        $emailTemplate = str_replace('{{price}}', $package_price, $emailTemplate);

        $emailTemplate = str_replace('{{user_name}}', $customer_first_name, $emailTemplate);
        $emailTemplate = str_replace('{{package_name}}', $package_name, $emailTemplate);
        $emailTemplate = str_replace('{{price}}', $package_price, $emailTemplate);

        $mail->Body    = $emailTemplate;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    $mailToAdditional = new PHPMailer(true);
    try {
        $mailToAdditional->SMTPDebug = SMTP::DEBUG_SERVER;
        $mailToAdditional->isSMTP();
        $mailToAdditional->Host       = 'eagledigitalsolutions.com';
        $mailToAdditional->SMTPAuth   = true;
        $mailToAdditional->Username   = 'info@eagledigitalsolutions.com';
        $mailToAdditional->Password   = 'incorrect$321';
        $mailToAdditional->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mailToAdditional->Port       = 465;

        $mailToAdditional->setFrom('info@eagledigitalsolutions.com', 'Eagle Digital Solutions');
        $mailToAdditional->addAddress('info@eagledigitalsolutions.com', 'Eagle Digital Solutions');

        $mailToAdditional->isHTML(true);
        $mailToAdditional->Subject = 'New Order Has Been Placed!';
        $mailToAdditional->Body    = "Customer First Name: $customer_first_name<br>Customer Full Name: $full_name<br>Customer Last Name: $customer_last_name<br>Package Name: $package_name<br>Package Price: $package_price<br>Phone: $phone<br>Customer Email: $email<br>Customer address: $address";

        $mailToAdditional->send();
    } catch (Exception $e) {
        echo "Message could not be sent to additional recipient. Mailer Error: {$mailToAdditional->ErrorInfo}";
    }
} else {
    $_SESSION['success'] = "Please verify that you are not a robot.";
    header("Location: ../order.php");
    exit;
}