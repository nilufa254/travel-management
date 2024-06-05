<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="btn2">
        <img src="./image/Tik mark.jpg" alt="">
        <h2>Thank You!</h2>
        <p>Your details has been successfully submitted. Thanks! </p>
        <button type="button" onclick="closebtn()">OK</button>
    </div>
<script>
    function closebtn(){
        var siteurl = '<?php echo SITE_URL; ?>';
        window.location.href = siteurl;
    }
</script>
</body>
</html>







