<?php

include_once('config/db-connect.php');


function packages_categories(){
    global $db;
    $select_packages_categories = "SELECT * FROM packages_categories";
    $run_query_packages_categories = mysqli_query($db,$select_packages_categories);
    return $run_query_packages_categories;
}

function website_packages(){
    global $db;
    $select_website_packages = "SELECT * FROM packages_details WHERE packages_categories_id=1";
    $run_query_website_packages = mysqli_query($db,$select_website_packages);
    return $run_query_website_packages;
}

function logo_packages(){
    global $db;
    $select_logo_packages = "SELECT * FROM packages_details WHERE packages_categories_id=2";
    $run_query_logo_packages = mysqli_query($db,$select_logo_packages);
    return $run_query_logo_packages;
}

function brand_packages(){
    global $db;
    $select_brand_packages = "SELECT * FROM packages_details WHERE packages_categories_id=3";
    $run_query_brand_packages = mysqli_query($db,$select_brand_packages);
    return $run_query_brand_packages;
}

?>