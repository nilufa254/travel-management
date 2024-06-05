<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$where = $_POST['where'];
$quantity = $_POST['quantity'];
$arrival = $_POST['arrival'];
$leaving = $_POST['leaving'];
$details = $_POST['details'];

// MySQL connection
if ($conn = dbConnect()) {
	$query = "INSERT INTO `booking` (ID,whereto,quantity,arrival,leaving,details) VALUES(NULL,'$where','$quantity','$arrival','$leaving','$details')";

	//var_dump($query);exit;

	$result = mysqli_query($conn, $query);

	if ( $result ) {
		header('Location: ' . SITE_URL . 'booking-confirmed.php');
		mysqli_close($conn);
		die();
	}
	header('Location: ' . SITE_URL . 'book.php');
	mysqli_close($conn);
	die();
}

die( 'MySQL Connection Error: ' . mysqli_connect_error() );