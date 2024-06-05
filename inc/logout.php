<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';
$_SESSION = [];

session_destroy();

header('Location: ' . SITE_URL . 'login.php');
die();