<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$division = $_POST['name'];
$short = $_POST['short'];

// MySQL connection
if ($conn = dbConnect()) {
    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
        $divisionID = $_POST['division_id'];
        $query = "UPDATE division SET name='$division', short='$short' WHERE ID=$divisionID;";
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
        $divisionID = $_POST['division_id'];
        $query = "DELETE FROM division WHERE ID=$divisionID;";
    } else {
        $query = "INSERT INTO `division` (ID,name,short) VALUES(NULL,'$district','$short')";
    }

    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/divisions/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/divisions/add.php');
    mysqli_close($conn);
    die();
} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );
