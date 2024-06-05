<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if ($conn = dbConnect()) {


    $query = "SELECT `places`.*, `districts`.`name` as district_name, `division`.`name` as division_name FROM `places` JOIN `districts` ON `districts`.ID = `places`.`district_id` JOIN `division` ON `division`.ID = `districts`.`division_id` WHERE 1;";

    $result = mysqli_query($conn, $query);

    $places = [];

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($place = mysqli_fetch_assoc($result)) {
            $places[] = $place;
        }
    }

    mysqli_close($conn);

    // echo "<pre>";
    // print_r($places);
    // echo "</pre>";
    // exit;
}

require_once SITE_URI . '/header.php';
?>

    <!-- Gallary start-->
<?php if ( ! empty( $places ) ) { ?>
    <section class="gallary" style="margin-bottom: 50px;">
        <div class="container">
            <div class="main-txt">
                <h1><span>All</span> Places</h1>
            </div>
            <div class="box-container">
				<?php foreach ( $places as $place ) { ?>
                    <div class="box">
                        <img src="<?php echo $place['banner']; ?>" alt="<?php echo $place['name']; ?>">
                        <div class="content">
                            <h3><?php echo $place['name']; ?></h3>
                            <a href="<?php echo SITE_URL . 'place-details.php?placeID=' . $place['ID']; ?>" class="button">See More</a>
                            <p><?php echo substr( $place['description'], 0, 100 )?></p>
                        </div>
                    </div>
				<?php } ?>
            </div>
    </section>
<?php } ?>
    <!-- Gallary end-->
<?php

require_once SITE_URI . '/footer.php';