<?php
include 'php/yachtListFunction.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <!-- PAGE TITLE -->
    <title>Car List Map - Royal Cars</title>

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS:: FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/plugins/scrollbar/jquery.mCustomScrollbar.css">

    <!-- CSS:: MAIN -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="assets\js\custom.js"></script>

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
                <div id="header">
                    <script>header()</script>
                </div>
                <div class="r-header-inner-banner">
                    <div class="r-header-in-over">
                        <h1>Royal Cars <b>Vehicles</b></h1>
                        <div class="r-breadcrum">
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><span>Vehicles</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12 col-xs-12 r-list-area">
                <div class="r-car-search r-carlist-search">
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="r-search-full col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               placeholder="Search yacht by name or location">
                                        <button class="fa fa-search"></button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label> Yachts Brand </label>
                                        <select class="form-control">
                                            <option>Any Brands</option>
                                            <option>Any Brands</option>
                                            <option>Any Brands</option>
                                            <option>Any Brands</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label> Yacht Type </label>
                                        <select class="form-control">
                                            <option>Any Type</option>
                                            <option>Any Type</option>
                                            <option>Any Type</option>
                                            <option>Any Type</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label> Yacht Price </label>
                                        <select class="form-control">
                                            <option>Price Low to High</option>
                                            <option>Price High to Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group mb-0">
                                        <input type="submit" class="form-control btn-primary" value="Search Yacht Now">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix r-sort-val">
                    <div class="pull-left">
                        <span>Sort by : </span>
                        <select class="r-show-cars-filter">
                            <option value="6"> Name</option>
                            <option value="10"> Price</option>
                            <option value="20"> Age</option>
                        </select>
                    </div>
                    <div class="pull-right"><span class="r-total-result">Search succesfull</span></div>
                </div>
                <div class="r-best-offer-list r-car-list-map mCustomScrollbar">
                    <div class="row clearfix">
                        <?php
                        selectYachts();
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="r-footer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <img src="assets/images/logo_small.png" class="d-block img-fluid" alt="">
                            <p>
                                We know the difference is in the details and that’s why our car rental services, in the
                                tourism and business industry, stand out for their quality.
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
                                        <li><a href="#">About Royal Cars</a></li>
                                        <li><a href="#">Our Mission & Strategy</a></li>
                                        <li><a href="#">Our Vision</a></li>
                                        <li><a href="#">Royal Cars Advantages</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <div class="r-footer-widget r-footer-map">
                                <a href="#"> <img src="assets/images/beeldmerk.png" class="icon" alt=''/> RoyalCars on
                                    Map</a>
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

<script src="assets/js/custom.js"></script>

<script src="assets/js/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="assets/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>
</body>
</html>
