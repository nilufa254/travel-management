<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

require_once SITE_URI . '/header.php';
?>

    <!-- Book section start-->
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1><span>B</span>ook</h1>
            </div>
            <div class="row">
                <div class="col-md-6 py-md-0">
                    <div class="card">
                        <img src="./image/istockphoto-922762614-612x612.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="<?php echo SITE_URL . 'inc/bookingController.php' ?>" method="post">

                        <input type="text" name="where" class="form-control" placeholder="Where To" required><br>
                        <input type="text" name="quantity" class="form-control" placeholder="How Many" required><br>
                        <input type="date" name="arrival" class="form-control" placeholder="Arrivals" required><br>
                        <input type="date" name="leaving" class="form-control" placeholder="Leaving" required><br>

                        <textarea class="form-control" rows="5" name="details"
                                  placeholder="Enter Your Name & Details"></textarea>
                        <input type="submit" value="Book Now" class="submit" required>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Book section end -->
<?php

require_once SITE_URI . '/footer.php';
