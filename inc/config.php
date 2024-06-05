<?php
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/project/');
define('SITE_URI', $_SERVER['DOCUMENT_ROOT'] . '/project/');
define('SITE_TITLE', 'Travel Fellow');

function dbConnect()
{
   $host = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = 'project';
   return mysqli_connect($host, $dbUser, $dbPass, $dbName);
}

function isLoggedIn()
{
   if (!empty($_SESSION['user']['ID'])) {
      return true;
   }

   return false;
}

function getSettings()
{
   // MySQL connection
   if ($conn = dbConnect()) {
      $query = "SELECT * FROM settings";

      $result = mysqli_query($conn, $query);

      $settings = [];

      if (mysqli_num_rows($result) > 0) {
         while ($setting = mysqli_fetch_assoc($result)) {
            $settings[$setting['meta_key']] = $setting['meta_value'];
         }
      }
   }

   return $settings;
}
