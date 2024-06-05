<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

$settings = getSettings();

if ( $conn = dbConnect() ) {


	$query = "SELECT `places`.*, `districts`.`name` as district_name, `division`.`name` as division_name FROM `places` JOIN `districts` ON `districts`.ID = `places`.`district_id` JOIN `division` ON `division`.ID = `districts`.`division_id` WHERE 1 LIMIT 0,6;";

	$result = mysqli_query( $conn, $query );

	$places = [];

	if ( mysqli_num_rows( $result ) > 0 ) {
		$i = 1;
		while ( $place = mysqli_fetch_assoc( $result ) ) {
			$places[] = $place;
		}
	}

	mysqli_close( $conn );

	// echo "<pre>";
	// print_r($places);
	// echo "</pre>";
	// exit;
}

require_once SITE_URI . '/header.php';
?>


<!-- Home section start -->
<div class="home">
    <div class="content">
        <h5>Welcome To Bangladesh</h5>
        <h1>Visit <span class="changecontent"></span></h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <a href="./book.php">Book Place</a>
    </div>
</div>
<!-- Home section end -->


<!-- About Start -->
<section class="about" id="about">
    <div class="container">
        <div class="main-txt">
            <h1>About <span>Us</span></h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-6" style="min-height:400px;">
                <div class="position-relative h-100">
                    <img src="./image/about.jpg" alt="" style="object-fit: cover;" class="img-fluid position-relative">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Welcome to <span class="text-Warning">Tourist</span></h2>

                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem ex animi
                    modi consectetur qui perspiciatis itaque porro totam ab est quos obcaecati amet, eligendi autem
                    ut temporibus dolorum nostrum quo.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sed beatae nihil
                    tempora consectetur alias numquam quisquam a nam consequatur.</p>

                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-Warning me-2"></i>Frist Class Flights</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-Warning me-2"></i>Frist Class Flights</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-Warning me-2"></i>Frist Class Flights</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-Warning me-2"></i>Frist Class Flights</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-Warning me-2"></i>Frist Class Flights</p>
                    </div>
                </div>
                <!-- button -->
                <div><a href="./about.php" class="btn btn-warning text-light">Read More</a></div>
            </div>
        </div>
    </div>
</section>

<!-- About end -->

<!-- Gallary start-->
<?php if ( ! empty( $places ) ) { ?>
    <section class="gallary" style="margin-bottom: 50px;">
        <div class="container">
            <div class="main-txt">
                <h1><span>P</span>laces</h1>
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
            <!-- button -->
            <div class="text-center mt-5 mb-5"><a href="./place-list.php" class="btn btn-warning text-light">Read More</a></div>
    </section>
<?php } ?>
<!-- Gallary end-->


<!-- Section Packages start -->
<section class="packages" id="packages">
    <div class="container">
        <div class="main-text">
            <h1><span>P</span>ackages</h1>
        </div>
        <div class="row" style="margin-top: 30px; ">


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/Shanghais-in-China.jpg" alt="">
                    <div class="card-body">
                        <h3>United Kingdom</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/FEATURE-compressed.jpg" alt="">
                    <div class="card-body">
                        <h3>Pakistan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/world-most-visited-cities-london-england.jpg" alt="">
                    <div class="card-body">
                        <h3>London</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/india.jpg" alt="">
                    <div class="card-body">
                        <h3>India</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/japan.jpg" alt="">
                    <div class="card-body">
                        <h3>Japan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card package-card">
                    <img src="./image/the-national-monument-.jpg" alt="">
                    <div class="card-body">
                        <h3>Bangladesh</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, harum.</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h6>Price: <strong>$500</strong></h6>
                        <a href="./book.php">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--  section Packages end -->

<!-- Section Services start -->
<section class="services" id="services">
    <div class="container">
        <div class="main-txt">
            <h1><span>S</span>ervices</h1>
        </div>
        <div class="row" style="margin-top: 30px;">


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-hotel"></i>
                    <div class="card-body">
                        <h3>Afordable Hotel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-utensils"></i>
                    <div class="card-body">
                        <h3>Food & Drinks</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-bullhorn"></i>
                    <div class="card-body">
                        <h3>safty Guide</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-globe-asia"></i>
                    <div class="card-body">
                        <h3>Around The World</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-plane"></i>
                    <div class="card-body">
                        <h3>Fastest Travel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 py-3 py-md-0 mb-3">
                <div class="card">
                    <i class="fas fa-hotel"></i>
                    <div class="card-body">
                        <h3>Adventure</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Services end -->
<?php
require_once SITE_URI . '/footer.php';