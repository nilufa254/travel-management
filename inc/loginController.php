<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$email = ! empty( $_POST['email'] ) ? $_POST['email'] : '';
$password = ! empty( $_POST['password'] ) ? $_POST['password'] : '';

if ( ! $email ) {
    $_SESSION['error']['emailError'] = 'Email is Required!';
}

if ( ! $password ) {
    $_SESSION['error']['passwordError'] = 'Password is Required!';
}

// Redirect to Login Page if error
if ( ! empty($_SESSION['error']) ) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}


// MySQL connection
if ( $conn = dbConnect() ) {
    $query = "SELECT * FROM `users` WHERE email='$email';";

    $result = mysqli_query($conn,$query);

    if ( mysqli_num_rows($result) > 0 ) {
        $data = mysqli_fetch_assoc($result);

        if ( md5($password) == $data['password'] ) {
            unset($data['password']);
            $_SESSION['user'] = $data;
            header('Location: ' . SITE_URL . 'admin/dashboard.php');
            die();
        } else {
            $_SESSION['error']['loginError'] = "Invalid Login";
            header('Location: ' . SITE_URL . 'login.php');
            die();
        }
    }

    mysqli_close($conn);
    die();
}
die( 'MySQL Connection Error: ' . mysqli_connect_error() );
?>