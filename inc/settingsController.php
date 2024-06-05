<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if ($conn = dbConnect()) {
    if ( ! empty($_POST['banner_heading']) ) {
        $banner_heding = $_POST['banner_heading'];
        $banner_heading_query = "UPDATE settings SET meta_value='$banner_heding' WHERE meta_key='banner_heading';";
        mysqli_query($conn, $banner_heading_query);
    }

    if ( ! empty($_POST['banner_text']) ) {
        $banner_text = $_POST['banner_text'];
        $banner_text_query = "UPDATE settings SET meta_value='$banner_text' WHERE meta_key='banner_text';";
        mysqli_query($conn, $banner_text_query);
    }

    if ( ! empty($_POST['banner_button_1']) ) {
        $banner_button_1 = $_POST['banner_button_1'];
        $banner_button_1_query = "UPDATE settings SET meta_value='$banner_button_1' WHERE meta_key='banner_button_1';";
        mysqli_query($conn, $banner_button_1_query);
    }

    if ( ! empty($_POST['banner_button_2']) ) {
        $banner_button_2 = $_POST['banner_button_2'];
        $banner_button_2_query = "UPDATE settings SET meta_value='$banner_button_2' WHERE meta_key='banner_button_2';";
        mysqli_query($conn, $banner_button_2_query);
    }

    if ( ! empty($_FILES['hero_banner']['name']) ) {
        $banner = $_FILES['hero_banner'];
        move_uploaded_file($banner['tmp_name'], SITE_URI . 'uploads/' . $banner['name']);
    
        $banner_link = SITE_URL . 'uploads/' . $banner['name'];
        $banner_link_query = "UPDATE settings SET meta_value='$banner_link' WHERE meta_key='hero_banner';";
        mysqli_query($conn, $banner_link_query);

    }

    if ( ! empty($_POST['about_heading']) ) {
        $about_heading = $_POST['about_heading'];
        $about_heading_query = "UPDATE settings SET meta_value='$about_heading' WHERE meta_key='about_heading';";
        mysqli_query($conn, $about_heading_query);
    }

    header('Location: ' . SITE_URL . 'admin/dashboard.php');
    mysqli_close($conn);
    die();
}

die( 'MySQL Connection Error: ' . mysqli_connect_error() );
