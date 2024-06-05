<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$place = $_POST['name'];
$description = $_POST['description'];
$location = $_POST['location'];
$google_map = $_POST['google_map'];
$youtube_embed = $_POST['youtube_embed'];
$district_id = $_POST['district_id'];
$prevImage = $_POST['prev_img'];

$banner = $_FILES['banner'];

// MySQL connection
if ($conn = dbConnect()) {
	if ( ! empty( $banner['name'] ) ) {
		move_uploaded_file( $banner['tmp_name'], SITE_URI . 'uploads/' . $banner['name'] );
		$banner_link = SITE_URL . 'uploads/' . $banner['name'];
	} else if ( $prevImage ) {
		$banner_link = $prevImage;
	}

    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
		$placeID = $_POST['place_id'];
		$query = "UPDATE `student` SET name='$place', description='$description', banner='$banner_link', location='$location', google_map='$google_map', youtube_link='$youtube_embed', district_id='$district_id' WHERE ID=$placeID;";
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
		$placeID = $_POST['place_id'];
        $query = "DELETE FROM places WHERE ID=$placeID;";
    } else {
        $query = "INSERT INTO `places` (ID,name,description, banner, location, google_map,youtube_link, district_id) VALUES(NULL,'$place','$description','$banner_link','$location','$google_map','$youtube_embed','$district_id')";
    }
    

    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/places/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/places/add.php');
    mysqli_close($conn);
    die();


} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );
