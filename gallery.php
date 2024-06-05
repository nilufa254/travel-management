<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

require_once SITE_URI . '/header.php';
?>



<!-- Section Gallary start -->
  <section class="gallary">
    <div class="container">
      <div class="main-txt">
        <h1><span>G</span>allery</h1>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/ahsan-monjil.jpg" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/7-2.jpg" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/japan2.webp" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/G1.jpg" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/G2.webp" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/G3.jpg" alt="" height="230px">
          </div>
        </div>



        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/G4.jpg" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/G5.avif" alt="" height="230px">
          </div>
        </div>


        <div class="col-md-4 py-3 py-md-0">
          <div class="card gallery-card">
            <img src="./image/Hindu-Temples_1.jpg" alt="" height="230px">
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Section Gallary end -->


  <!-- popular destination start-->
  <div class="container-xxl py-5 destination">

    <div class="text-center main-text">
      <h1>Popular <span>Destination</span></h1>
    </div>

    <div class="row g-3">
      <div class="col-lg-7 col-md-6">
        <div class="row g-3">

          <div class="col-lg-12 col-md-12">
            <a href="" class="d-block position-relative overflow-hidden">
              <img src="./image/p_desti1.jpg" alt="" class="img-fluid">
              <div class="bg-white text-danger position-absolute top-0  m-3 py-1 px-2">
                <b>Sundarbun</b>
              </div>
            </a>
          </div>

          <div class="col-lg-6 col-md-12">
            <a href="" class="d-block position-relative overflow-hidden">
              <img src="./image/p_desti2.jpg" alt="" class="img-fluid">
              <div class="bg-white text-danger position-absolute top-0  m-3 py-1 px-2">
                <b>Cox's Bazar</b>
              </div>
            </a>
          </div>

          <div class="col-lg-6 col-md-12">
            <a href="" class="d-block position-relative overflow-hidden">
              <img src="./image/p_desti3.jpg" alt="" class="img-fluid">
              <div class="bg-white text-danger  position-absolute top-0  m-3 py-1 px-2">
                <b>Shajek</b>
              </div>
            </a>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-6" style="min-height:350px;">
        <a href="" class="d-block position-relative h-100 overflow-hidden">
          <img src="./image/p_desti4.jpg" alt="" class="img-fluid position-absolute w-100 h-100"
            style="object-fit: cover;">
          <div class="bg-white text-danger position-absolute top-0  m-3 py-1 px-2">
            <b>Saint Martin</b>
          </div>
        </a>
      </div>
    </div>
  </div>


  <!-- popular destination end -->
<?php

require_once SITE_URI . '/footer.php';