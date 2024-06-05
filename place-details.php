<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$placeID = ! empty( $_GET['placeID'] ) ? $_GET['placeID'] : 0;

if ( ! $placeID ) {
	header( 'Location: ' . SITE_URL );
	die();
}

// MySQL connection
if ( $conn = dbConnect() ) {
	$query = "SELECT places.*, districts.name as districtName FROM places JOIN districts ON districts.ID=places.district_id WHERE places.ID=$placeID";
    //var_dump($query);exit;

	$result = mysqli_query( $conn, $query );
	$place  = [];
	if ( $result ) {
		$place = mysqli_fetch_assoc( $result );
        //var_dump($place);exit;
	}
}

require_once SITE_URI . '/header.php';
if ( ! empty( $place ) ) {
	?>

    <!-- About Start -->
    <section class="about py-3" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-3 py-md-0">
                    <div class="main-txt">
                        <h2 class="mt-5"><span class="text-Warning"><?php echo $place['name']; ?></span></h2>
                        <p><b>Location:</b> <?php echo $place['location']; ?></p>
                        <p><b>District:</b> <?php echo $place['districtName']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6" style="min-height:400px; margin-bottom: 50px;">
                    <div class="position-relative h-100">
                        <img src="<?php echo $place['banner']; ?>" alt="<?php echo $place['name']; ?>" style="object-fit: cover;"
                             class="img-fluid position-relative">
                    </div>
                </div>

                <div class="col-lg-6">
					<?php echo $place['description']; ?>
                </div>

                <div class="col-lg-6">
					<?php echo $place['youtube_link']; ?>
                </div>

                <div class="col-lg-6">
					<?php echo $place['google_map']; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->
	<?php
}

require_once SITE_URI . '/footer.php';
