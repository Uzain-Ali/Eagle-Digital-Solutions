<?php
include_once('config/db-connect.php');


function get_packages()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        global $db;
        $select_get_packages = "SELECT * FROM packages_details WHERE id = '{$id}'";
        $run_query_get_packages = mysqli_query($db, $select_get_packages);
        if (!$run_query_get_packages) {
            echo "Database query error: " . mysqli_error($db);
            return null;
        }
        else if ($run_query_get_packages && mysqli_num_rows($run_query_get_packages) > 0) {
            $fetch_single_package = mysqli_fetch_assoc($run_query_get_packages);
            return $fetch_single_package;
        } else {
            return null;
        }
    }
}

?>