<?php
include_once(__DIR__ . '/vendor/autoload.php');
include_once(__DIR__ . '/config/db-connect.php');
include "includes/variables.php";
session_start();

global $APP_URL;

use PayPal\Api\Payer;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;

function createPayPalPayment($packagePrice, $packageName, $apiContext)
{
    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    $amount = new \PayPal\Api\Amount();
    $amount->setTotal($packagePrice);
    $amount->setCurrency('USD');

    $transaction = new Transaction();
    $transaction->setAmount($amount);
    $transaction->setDescription('Payment for ' . $packageName);

    if (is_numeric($packagePrice)) {
        $item = new \PayPal\Api\Item();
        $item->setName($packageName)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($packagePrice);

    } else {
        echo "Invalid package price.";
        return;
    }

    $itemList = new \PayPal\Api\ItemList();
    $itemList->setItems([$item]);
    $transaction->setItemList($itemList);

    $cardNumber = isset($_POST['card_number']) ? $_POST['card_number'] : '';

    if (!isValidCardNumber($cardNumber)) {
        echo "Invalid card number.";
        return;
    }

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl('http://homestead.v7/webprotech.pro/index.php');
    $redirectUrls->setCancelUrl('http://homestead.v7/webprotech.pro/order.php');

    $payment = new \PayPal\Api\Payment();
    $payment->setIntent('sale');
    $payment->setPayer($payer);
    $payment->setRedirectUrls($redirectUrls);
    $payment->setTransactions([$transaction]);

    try {
        $payment->create($apiContext);
        $approvalUrl = $payment->getApprovalLink();
        header("Location: " . $approvalUrl);
        exit;
    } catch (\PayPal\Exception\PayPalConnectionException $ex) {
        echo "PayPal Connection Error: " . $ex->getData();
    } catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
    }
}

function isValidCardNumber($cardNumber)
{
    $url = 'http://homestead.v8/webprotech.pro';
    $errors = [];

    if (empty($_POST["card"])) {
        $errors["card"] = "CARD NAME is required.";
    }

    // Validate CARD NUMBER
    if (empty($cardNumber)) {
        $errors["card_number"] = "CARD NUMBER is required.";
    } elseif (!preg_match('/^\d{16}$/', $cardNumber)) {
        $errors["card_number"] = "Invalid CARD NUMBER. It should be a 16-digit number.";
    }

    // Validate EXP DATE
    if (empty($_POST["card_expiryMonth"]) || empty($_POST["card_expiryYear"])) {
        $errors["card_expiry"] = "EXP DATE is required.";
    } else {
        $currentYear = date("Y");
        $selectedMonth = intval($_POST["card_expiryMonth"]);
        $selectedYear = intval($_POST["card_expiryYear"]);

        if ($selectedYear < $currentYear || ($selectedYear == $currentYear && $selectedMonth < date("n"))) {
            $errors["card_expiry"] = "Invalid EXP DATE. Please select a valid date.";
        }
    }

    // Validate CVV
    if (empty($_POST["card_cvv"])) {
        $errors["card_cvv"] = "CVV is required.";
    } elseif (!preg_match('/^\d{3,4}$/', $_POST["card_cvv"])) {
        $errors["card_cvv"] = "Invalid CVV. It should be a 3 or 4-digit number.";
    }

    if (!empty($errors)) {
        $_SESSION['error'] = 'Invalid Card Credentials.';
        header("Location: " . $url . "/order.php");
        exit;
    }
    return true;
}


if (isset($_POST["type"]) && $_POST["type"] === 'paypal_payment') {

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AcKwbyi3-LtcW9orYwnWecAHjTaU6SDpJ6JiVW6FIP3lO-9yY-DjWoPNoo6vTbfEW2Xitkmkiiz5O1le', // Client ID
            'EJDE3UgCkon13N7w2VTZAJmlGhK3y5NTc_7mzxMwOCq11RsIiBLm44YW08ZHPHrkI4yHqLCfFhXUZbT0' // Secret
        )
    );

    createPayPalPayment($_POST['package_price'], $_POST['package_name'], $apiContext);

    $senderEmail = 'info@webprotech.pro';
    $subject = 'Package Purchase';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $package_name = isset($_POST['package_name']) ? $_POST['package_name'] : '';
    $package_price = isset($_POST['package_price']) ? $_POST['package_price'] : '';
    $customer_first_name = isset($_POST['customer_first_name']) ? $_POST['customer_first_name'] : '';
    $customer_last_name = isset($_POST['customer_last_name']) ? $_POST['customer_last_name'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $zip = isset($_POST['zip']) ? $_POST['zip'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $card = isset($_POST['card']) ? $_POST['card'] : '';
    $card_number = isset($_POST['card_number']) ? $_POST['card_number'] : '';
    $card_expiryMonth = isset($_POST['card_expiryMonth']) ? $_POST['card_expiryMonth'] : '';
    $card_expiryYear = isset($_POST['card_expiryYear']) ? $_POST['card_expiryYear'] : '';
    $card_cvv = isset($_POST['card_cvv']) ? $_POST['card_cvv'] : '';

    $message .= "Subject: $subject\n";
    $message .= "Package Name: $package_name\n";
    $message .= "Package Price: $" . $package_price . "\n";
//    $message .= "Package Price: $package_price\n";
    $message .= "Customer First Name: $customer_first_name\n";
    $message .= "Customer Last Name: $customer_last_name\n";
    $message .= "Country: $country\n";
    $message .= "Zip: $zip\n";
    $message .= "City: $city\n";
    $message .= "State: $state\n";
    $message .= "Address: $address\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Card: $card\n";
    $message .= "Card Number: $card_number\n";
    $message .= "Card Expiry Month: $card_expiryMonth\n";
    $message .= "Card Expiry Year: $card_expiryYear\n";
    $message .= "Card CVV: $card_cvv\n";


    $headers = "From: $senderEmail\r\n";
    $headers .= "Reply-To: $senderEmail\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Send email to recipient
    if (mail($email, $subject, $message, $headers)) {
        // Send email to sender
        if (mail($senderEmail, $subject, $message, $headers)) {
            header("Location: " . $APP_URL . "/order.php");
            $_SESSION['success'] = 'Emails sent successfully!';
        } else {
            echo 'Email to sender could not be sent.';
        }
    } else {
        echo 'Email to recipient could not be sent.';
    }

} else {
    echo "Form submission error!";
}
?>
