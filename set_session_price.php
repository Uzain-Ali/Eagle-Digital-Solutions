<?php
session_start();

if (isset($_POST['price']) AND isset($_POST['package_name'])) {

    $price = floatval($_POST['price']);
    $package_name = $_POST['package_name'];


    $_SESSION['price'] = $price;
    $_SESSION['package_name'] = $package_name;


    echo 'Price has been set in the session.';
} else {

    http_response_code(400);
    echo 'Error: Price data is missing.';
}
?>