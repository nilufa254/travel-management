<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

require_once SITE_URI . '/header.php';
?>

    <div class="container">
        <div class="main-txt">
            <h1>Contact <span>Us</span></h1>
        </div>

        <div class="contact p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">

                    <h2 class="text-white mb-4"> Get in touch</h2>
                    <!-- address section -->
                    <div>
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill text-success"></i> &nbsp;
                            <p>Address: 86/2 Laxmipur, Rajpara,Rajshahi </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill text-success"></i> &nbsp;
                            <p>Contact Number: +8801 000000007</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-envelope-fill text-success"></i> &nbsp;
                            <p>Email: tasmiraeasmin206@gmail.com </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-browser-chrome text-success"></i> &nbsp;
                            <p>website: www.contact.com </p>
                        </div>
                    </div>
                </div>
                <!-- form section -->
                <div class="col-md-6">
                    <form action="">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="form-floating ">
                                    <input type="text" class="form-control bg-transparent"
                                           id="exampleFormControlInput1" placeholder="Enter your name">
                                    <label for="exampleFormControlInput1" class="form-label text-white">
                                        Enter Your Name
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent"
                                           id="exampleFormControlInput1" placeholder="Enter your Email">
                                    <label for="exampleFormControlInput1" class="form-label text-white">
                                        Enter Your Email
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent"
                                           id="exampleFormControlInput1" placeholder=" Contact Number">
                                    <label for="exampleFormControlInput1" class="form-label text-white">
                                        Contact Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent"
                                           id="exampleFormControlInput1" placeholder=" Destination">
                                    <label for="exampleFormControlInput1" class="form-label text-white">
                                        Destination
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control  bg-transparent" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                    <label for="exampleFormControlTextarea1" class="form-label text-white">
                                        Text Your Message
                                    </label>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-outline-light w-100" type="submit"> Send</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php

require_once SITE_URI . '/footer.php';
