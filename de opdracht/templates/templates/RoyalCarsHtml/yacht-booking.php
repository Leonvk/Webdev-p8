<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
      <!-- PAGE TITLE -->
      <title>Home - Coral Yachts</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="description" content="" >
      <meta name="keywords" content="" >

      <!-- FAVICON -->
      <link rel="shortcut icon" href="assets/images/favicon.png">

      <!-- CSS:: FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

	  <script
    	src="https://code.jquery.com/jquery-3.3.1.js"
    	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    	crossorigin="anonymous">
	  </script>
    <script type="text/javascript" src="assets\js\custom.js"></script>

    <?php

    session_start();

    foreach(glob("php/*.php") as $filename)
    {
      include $filename;
    }
    ?>

  </head>
  <body>
       <section id="r-customizer" class="r-customizer">
            <div class="r-selector">
                  <span class="d-block text-center">Color Options</span>
                  <div class="r-color_section r-color_block">
                        <ul class="r-color_selector" id="r-color_selector">
                            <li class="r-color_1" data-attr="color-01"></li>
                            <li class="r-color_6" data-attr="color-06"></li>
                            <li class="r-color_2" data-attr="color-02"></li>
                            <li class="r-color_3" data-attr="color-03"></li>
                            <li class="r-color_4" data-attr="color-04"></li>
                            <li class="r-color_5" data-attr="color-05"></li>
                            <li class="r-color_7" data-attr="color-07"></li>
                            <li class="r-color_8" data-attr="color-08"></li>
                        </ul>
                  </div>
            </div>
            <i id="r-selector_icon" class="fa fa-cog"></i>
      </section>
      <div class="r-wrapper">
        <header>
          <div class="r-header r-header-inner">
            <div class="r-header r-header-inner r-header-strip-01">
            <div id="header"><script>header()</script></div>
            <div class="r-header-inner-banner">
              <div class="r-header-in-over">
                <h1>Coral Yachts<b> Yachts.</b> </h1>
                <div class="r-breadcrum">
                  <ul>
                    <li><a href="#">HOME</a></li>
                    <li><span>YACHTS</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        </header>

        <section class="r-car-info-wrapper">
          <div class="container">
            <div class="r-car-info-header clearfix">
              <div class="r-car-top-info">
                <div class="r-car-rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span class="r-rating-text"> CAR RATING: 5/5 </span>
                </div>
                <h2 class="r-car-name"> Mercedes Benz <span>M Class</span> </h2>
              </div>

              <div class="r-car-offer">
                <div class="r-offer-cost">
                  <span class="fa fa-usd r-currency"></span> 50.00 <small>Per Day</small>
                </div>
                <span class="r-tax-info"> INCLUDED TAXES & CHECKUP </span>
              </div>
            </div> <!-- /r-car-info-header -->

            <div class="r-car-whole-info">
              <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                  <div class="r-car-product-carousel-wrapper">
                    <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider" id="productSlider">
                      <div class="item">
                        <img src="assets/images/boat-chair-couch-271681.jpg" alt="" class="img-fluid" />
                      </div>
                      <div class="item">
                        <img src="assets/images/boat-cruise-deck-1167023.jpg" alt="" class="img-fluid" />
                      </div>
                      <div class="item">
                        <img src="assets/images/boat-1867124_1920.jpg" alt="" class="img-fluid" />
                      </div>
                      <div class="item">
                        <img src="assets/images/beautiful-bikini-blond-762103.jpg" alt="" class="img-fluid" />
                      </div>
                    </div>

                    <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider">
                      <li class="owl-thumb-item"> <img src="assets/images/boat-chair-couch-271681.jpg" alt="" class="img-fluid" /> </li>
                      <li class="owl-thumb-item"> <img src="assets/images/boat-cruise-deck-1167023.jpg" alt="" class="img-fluid" /> </li>
                      <li class="owl-thumb-item"> <img src="assets/images/boat-1867124_1920.jpg" alt="" class="img-fluid" /> </li>
                      <li class="owl-thumb-item"> <img src="assets/images/beautiful-bikini-blond-762103.jpg" alt="" class="img-fluid" /> </li>
                    </ul>
                  </div> <!-- /r-car-product-carousel-wrapper -->
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                  <div class="r-car-info-content">
                    <span class="r-reg-year">Registered 2016</span>
                    <h2 class="r-product-name"> FTL yachts <span>GTR</span> </h2>
                    <p class="r-product-description">This was our first time renting from Coral Yachts and we were very pleased with the whole experience. Your price was lower than other companies.</p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <td>Make Lamborghini</td>
                          <td>Style SUV Premium </td>
                        </tr>
                        <tr>
                          <td>Model M-Class Sport</td>
                          <td>Engine V-6 Cylinder</td>
                        </tr>
                        <tr>
                          <td>Kilometer 42.000 KM</td>
                          <td>Fuel Type Gasoline</td>
                        </tr>
                        <tr>
                          <td>Body Type Sedan Sport</td>
                          <td>5 Years Service Include</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /r-car-info-content -->
                </div>
              </div>
            </div> <!-- /r-car-whole-info -->

            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="r-product-testimonial-wrapper">
                  <h4>Testimonials</h4>
                  <div class="owl-carousel" id="productTestimonial">
                    <div class="r-testimonial-box">
                      "We know the difference is in the details and that’s why our car rental services, in the tourism and business."
                    </div>
                    <div class="r-testimonial-box">
                      "We know the difference is in the details and that’s why our car rental services, in the tourism and business."
                    </div>
                    <div class="r-testimonial-box">
                      "We know the difference is in the details and that’s why our car rental services, in the tourism and business."
                    </div>
                  </div>
                </div>

                <div class="r-product-discount">
                  <span class="r-discount">DISCOUNT 50%</span>
                  <p class="r-discount-content"> Special Offers For <strong>Black Friday.</strong> </p>
                </div>
              </div>

              <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="r-site-default-accordion">
                  <div class="r-accordion-header">
                    <h2 class="r-accordion-heading">Booking Detail</h2>
                  </div>

                  <form action="" method="post">
                    Payment Preference: <select name="payment" class="form-control" required="">
                              <option value="" selected="" disabled=""> - </option>
                              <option value="Directdebit">Directdebit</option>
                              <option value="Creditcard">Creditcard</option>
                              <option value="Paypal">Paypal</option>
                              <option value="Ideal">Ideal</option>
                            </select>
                    <br>
                    Date Start:
                    <input name="datestart" type="date" required="">
                    <br>
                    <br>
                    Date End:
                    <input name="dateend" type="date" required="">
                    <br>
                    <br>
                    Catering:
                    <select name="catering" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Skipper:
                    <select name="skipper" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Flottielje:
                    <select name="flottielje" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Groceries:
                    <select name="groceries" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Transfer:
                    <select name="transfer" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Insurence:
                    <select name="insurence" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    ChildLifejackets:
                    <select name="childLifejackets" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Fishinggear:
                    <select name="fishinggear" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Paddleboard:
                    <select name="paddleboard" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                    <br>
                    Aggreed To Terms:
                    <select name="terms" class="form-control" required="">
                      <option value="" selected="" disabled=""> - </option>
                      <option value="Yes">Yes</option>
                    </select>
                    <br>
                    <div class="col-lg-6 col-md-12 r-submission-btn-wrapper">
                      <input type="reset" class="btn-default" value="Cancel This" />
                      <input name="submit" type="submit" class="btn-primary" value="Reserve Now" />
                    </div>

                  </form>
                  <?php
                    if(isset($_POST["submit"])){
                      booking();
                    }
                  ?>
                  

        </section> <!-- /r-car-info -->

        <section id="r-get-in-touch">
          <div class="r-get-in-touch">
            <div class="container">
              <div class="r-get-header">
                <span>CONTACT US NOW</span>
                <h2>Keep <b>In Touch.</b></h2>
              </div>
              <div class="r-get-form">
                <form action="#">
                  <div class="clearfix">
                    <div class="form-group"><input type="text" placeholder="User name"></div>
                    <div class="form-group"><input type="email" placeholder="Email Address"></div>
                  </div>
                  <div class="form-group"><input type="email" placeholder="Title Message"></div>
                  <div class="form-group">
                    <textarea placeholder="Message"></textarea>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-full">SEND MESSAGE NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="r-footer">
            <div class="container">
              <div class="row clearfix">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="r-footer-block">
                    <img src="assets/images/logo_small.png" class="d-block img-fluid" alt="">
                    <p>
                      We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality.
                    </p>
                    <form action="#">
                      <div class="r-newsletter">
                        <input type="email" placeholder="Subscribe Newsletter">
                        <button class="btn"><i class="fa fa-envelope"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="r-footer-block">
                    <div class="r-footer-widget r-footer-phone">
                      <span><i class="fa fa-phone"></i> CALL US ON LINE 1</span>
                      <h5>100.1212.2000</h5>
                    </div>
                    <div class="r-footer-widget r-footer-nav">
                      <h6>USEFUL LINK</h6>
                      <nav>
                        <ul>
                          <li><a href="#">Private Policy</a></li>
                          <li><a href="#">Term & Conditions</a></li>
                          <li><a href="#">Copyright Notification</a></li>
                          <li><a href="#">Register for New Member</a></li>
                          <li><a href="#">Press Release</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="r-footer-block">
                    <div class="r-footer-widget r-footer-phone">
                      <span><i class="fa fa-phone"></i> CALL US ON LINE 2</span>
                      <h5>100.2424.2000</h5>
                    </div>
                    <div class="r-footer-widget r-footer-nav">
                      <h6>OUR INFO</h6>
                      <nav>
                        <ul>
                          <li><a href="#">About Coral Yachts</a></li>
                          <li><a href="#">Our Mission & Strategy</a></li>
                          <li><a href="#">Our Vision</a></li>
                          <li><a href="#">Coral Yachts Advantages</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="r-footer-block">
                    <div class="r-footer-widget r-footer-map">
                      <a href="#"> <img src="assets/images/beeldmerk.png" class="icon" alt=''/> Coral Yachts on Map</a>
                    </div>
                    <div class="r-footer-widget r-footer-nav">
                      <h6>ACCOUNT INFORMATION</h6>
                      <nav>
                        <ul>
                          <li><a href="#">Login to My Account</a></li>
                          <li><a href="#">Press Releases</a></li>
                          <li><a href="#">User Dashboard</a></li>
                          <li><a href="#">Email Address</a></li>
                          <li><a href="#">Lorem Ipsum dolorsit</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row clearfix r-footer-strip">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 ©2018 Created by jThemes Studio
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <ul>
                   <li><a href="#"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i>.<span>Twitter</span></a></li>
                   <li><a href="#"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
      <!-- JQUERY:: JQUERY.JS -->
      <script src="assets/js/jquery.min.js"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src="assets/js/tether.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/plugins/owl/owl.carousel.min.js"></script>
      <script src="assets/js/plugins/owl/owl.carousel2.thumbs.js"></script>
      <script src="assets/js/custom.js"></script>

  </body>
</html>
