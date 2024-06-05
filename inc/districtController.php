<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$district = $_POST['name'];
$short = $_POST['short'];
$division_id = $_POST['division_id'];

// MySQL connection
if ($conn = dbConnect()) {
    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
        $districtID = $_POST['district_id'];
        $query = "UPDATE districts SET name='$district', short='$short', division_id='$division_id' WHERE ID=$districtID;";
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
        $districtID = $_POST['district_id'];
        $query = "DELETE FROM districts WHERE ID=$districtID;";
    } else {
        $query = "INSERT INTO `districts` (ID,name,short, division_id) VALUES(NULL,'$district','$short','$division_id')";
    }
    

    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/districts/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/districts/add.php');
    mysqli_close($conn);
    die();


} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );
