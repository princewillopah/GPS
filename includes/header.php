<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from reactheme.com/products/html/elevate/onepage-seven.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2023 03:59:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title><?php echo $title ?> | GPS CHEMOIL LLC FZC TERMINAL-2</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/hover-revel.css">
    <link rel="stylesheet" href="assets/css/plugins/timepickers.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>

<body class="home-one seven onepage">

    <!-- header style two -->



    <!-- header area start -->
    <header class="heder-two header-six header--sticky">
        <div class="header-two-container">
            <div class="row">
                <div class="col-12">
                    <div class="header-main-wrapper">
                        <div class="logo-area">
                            <a href="index.html" class="logo">
                                <img src="assets/images/_others/logo/logo.svg" alt="image-logo">
                            </a>
                        </div>
                        <!-- header right start -->
                        <div class="rts-header-right">
                            <div class="menu-area" id="menu-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                    <rect width="18" height="2" fill="#0C0A0A" />
                                    <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                    <rect y="14" width="18" height="2" fill="#0C0A0A" />
                                </svg>
                            </div>
                            <!-- top header -->
                            <div class="top">
                                <div class="start-top">
                                    <div class="icon"><i class="fa-sharp fa-solid fa-bolt"></i></div>
                                    <p>Elevating Excellence in Storage Solutions</p>
                                </div>
                                <div class="end-top">
                                    <div class="single-info">
                                        <div class="icon"><i class="fa-thin fa-location-dot"></i> </div>
                                        <p>Korfakhan road - Fujairah - United Arab Emirates</p>
                                    </div>
                                    <div class="single-info">
                                        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                        <a href="mailto:info@gpschemo2.com">info@gpschemo2.com</a>
                                    </div>
                                </div>
                            </div>
                            <!-- top header end -->
                            <!-- bottom header start -->
                            <div class="bottom">
                                <!-- header style two -->
                                <!-- nav area start -->
                                <div class="main-nav-desk nav-area">
                                    <nav>
                                        <ul id="nav">
                                            <li class="menu-item  <?php if ($page == 'home') { echo 'current'; } ?>">
                                                 <a  class="nav-item" href="index.php">Home</a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'about') { echo 'current'; } ?>">
                                                 <a  class="nav-item" href="about.php">About</a>
                                            </li>
                                            <!-- <li class="menu-item">
                                                <a class="nav-item" href="#service">Services</a>
                                            </li> -->
                                            <li class="has-droupdown pages <?php if ($page == 'shipping' || $page == 'rail') { echo 'current'; } ?>">
                                                <a class="nav-link" href="#">Services</a>
                                                <ul class="submenu inner-page">
                                                    
                                                    <li class=" <?php if ($page == 'storage') { echo 'current'; } ?>"><a class="nav-item" href="storage.php">Storage</a></li>
                                                    <li class=" <?php if ($page == 'other-services') { echo 'current'; } ?>"><a class="nav-item" href="other-services.php">Other Services</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-droupdown pages <?php if ($page == 'sustainability' || $page == 'health-safety' || $page == 'security' || $page == 'environment') { echo 'current'; } ?>">
                                                <a class="nav-link" href="health-safety-security-environment.php">HSSE</a>
                                                <ul class="submenu inner-page">
                                                    <li class=" <?php if ($page == 'sustainability') { echo 'current'; } ?>"><a class="nav-item" href="HSSE-sustainability.php">Sustainability</a></li>
                                                    <li class=" <?php if ($page == 'health-safety') { echo 'current'; } ?>"><a class="nav-item" href="HSSE-health-and-safety.php">Health and Safety</a></li>
                                                    <li class=" <?php if ($page == 'security') { echo 'current'; } ?>"><a class="nav-item" href="HSSE-security.php">Security</a></li>
                                                    <li class=" <?php if ($page == 'environment') { echo 'current'; } ?>"><a class="nav-item" href="HSSE-environment.php">Environment</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li class="menu-item <?php if ($page == 'seq') { echo 'current'; } ?>">
                                                <a class="nav-item" href="health-safety-security-environment.php">HSSE</a>
                                            </li> -->
                                            <li class="menu-item <?php if ($page == 'contact') { echo 'current'; } ?>">
                                                <a class="nav-item" href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- nav-area end -->
                                <!-- header style two End -->
                                <div class="right-area">
                                    <!-- <div class="icon-area">
                                        <div class="search" id="search">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </div>
                                        <div class="cart cart-icon">
                                            <i class="fa-regular fa-cart-shopping"></i>
                                        </div>
                                    </div> -->
                                    <!-- <a href="contact.html" class="rts-btn btn-seconday btn-transparent">Get a Quote <i class="fa-solid fa-arrow-up-right"></i></a> -->
                                </div>
                            </div>
                            <!-- bottom header end -->
                        </div>
                        <!-- header right end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- side bar for desktop -->
    <div id="side-bar" class="side-bar header-two ">
      
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk d-none">
            <div class="thumbnail">
                <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-seconday">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu">
        <!-- <div class="mobile-menu d-block d-xl-none"> -->
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu" id="mobile-menu-active">
                    <li class="<?php if ($page == 'home') { echo 'current'; } ?>">
                            <a  class="main" href="index.php">Home</a>
                    </li>
                    <li class="<?php if ($page == 'about') { echo 'current'; } ?>">
                            <a  class="main" href="about.php">About</a>
                    </li>
                    <li class="<?php if ($page == 'storage') { echo 'current'; } ?>">
                            <a class="main" href="storage.php">Storage</a>
                    </li>
                    <li class="<?php if ($page == 'other-services') { echo 'current'; } ?>">
                         <a class="main" href="other-services.php">Other Services</a>
                    </li>
                    <li class="<?php if ($page == 'seq') { echo 'current'; } ?>">
                        <a class="main" href="health-safety-security-environment.php">HSSE</a>
                    </li>
                    <li class="<?php if ($page == 'contact') { echo 'current'; } ?>">
                        <a class="main" href="contact.php">Contact</a>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

