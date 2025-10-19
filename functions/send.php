
<?php
require('../config/db-connect.php');
session_start();

$category_id = $_POST['category_id'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

$category_id = mysqli_real_escape_string($db, $category_id);
$user_name = mysqli_real_escape_string($db, $user_name);
$email = mysqli_real_escape_string($db, $email);
$phone = mysqli_real_escape_string($db, $phone);
$description = mysqli_real_escape_string($db, $description);

$sql = "INSERT INTO contact (category_id, user_name, email, phone, description, created_at) VALUES ('$category_id', '$user_name', '$email', '$phone', '$description', CURRENT_TIMESTAMP())";

if ($db->query($sql) === TRUE) {
    $_SESSION['success'] = "Your query has been receieved successfully";
} else {
    $_SESSION['success'] = "Error: " . $sql . "<br>" . $db->error;
}

echo '<script>window.location.href = "../contact.php";</script>';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'server348.web-hosting.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@eagledigitalsolutions.com';
    $mail->Password   = '@z41q7#%vBPZ';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('info@eagledigitalsolutions.com', 'WeTech Developers');
    $mail->addAddress($email, $user_name);

    $mail->isHTML(true);
    $mail->Subject = 'We Got Your Message: Help Is on Its Way!';
    $emailTemplate    = file_get_contents('../emails/contact_email.html');

    $emailTemplate = str_replace('{{user_name}}', $user_name, $emailTemplate);

    $mail->Body    = $emailTemplate;

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$mailToAdditional = new PHPMailer(true);
try {
    $mailToAdditional->SMTPDebug = SMTP::DEBUG_SERVER;
    $mailToAdditional->isSMTP();
    $mailToAdditional->Host       = 'server348.web-hosting.com';
    $mailToAdditional->SMTPAuth   = true;
    $mailToAdditional->Username   = 'info@eagledigitalsolutions.com';
    $mailToAdditional->Password   = '@z41q7#%vBPZ';
    $mailToAdditional->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mailToAdditional->Port       = 465;

    $mailToAdditional->setFrom('info@eagledigitalsolutions.com', 'WeTech Developers');
    $mailToAdditional->addAddress('rafayfriends124@gmail.com');

    $mailToAdditional->isHTML(true);
    $mailToAdditional->Subject = 'New Contact Form Submission Details';
    $mailToAdditional->Body    = "Customer: $user_name<br>Category: $category_id<br>Phone: $phone<br>Customer Email: $email<br>Description: $description";

    $mailToAdditional->send();
} catch (Exception $e) {
    echo "Message could not be sent to additional recipient. Mailer Error: {$mailToAdditional->ErrorInfo}";
}
?>