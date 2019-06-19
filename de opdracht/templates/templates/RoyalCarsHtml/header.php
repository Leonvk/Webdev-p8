<head>
  <?php

  session_start();

  foreach(glob("php/*.php") as $filename)
  {
    include $filename;
  }

  ?>
</head>
<div class="r-header-strip">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="r-logo">
                    <a href="index.php" class="d-inline-block"><img src="assets/images/logo_small.png"
                                                                     class="img-fluid d-block" alt=""></a>
                </div>
                <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="r-header-action float-right">
                    <a href="login-register.php"> <img src="assets/images/user-icon.png" alt=''
                                                        style="height: 29px; width: 28px;"/><span><?php checkAcc(); ?></span></a>
                    <a href="#" class="r-search"> <img src="assets/images/search.png" alt=''
                                                       style="height: 29px; width: 28px;"/> <span>Search</span></a>

                    <div class="r-search-wrapper">
                        <div class="r-search-inner">
                            <form>
                                <input type="text" class="r-search-field" placeholder="Search"/>
                                <button type="submit" class="r-search-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div> <!-- /r-search-wrapper -->
                </div>
                <div class="r-nav-section float-right">
                    <nav>
                        <ul>
                            <li class="r-has-child">
                                <a href="index.php">HOME</a>
                            </li>
                            <li class="r-has-child">
                                <a href="about.html">ABOUT US</a>
                                <ul class="pl-0 ml-0">
                                    <li><a href="faq.html">Faq</a></li>
                                </ul>
                            </li>
                            <li class="r-has-child">
                                <a href="car-listing.html">YACHTS</a>
                                <ul class="pl-0 ml-0">
                                    <li><a href="yacht-list-map.php">Yacht List Map</a></li>
                                    <li><a href="yacht-booking.php">Yacht Booking</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
