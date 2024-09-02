<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>@yield('title', env('APP_NAME'))</title>

    <meta name="author" content="Calitech">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="home-electrician">

    {{-- <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    {{-- <div class="color-scheme">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <p class="color-scheme-text">Check template with your color</p>
        <div class="color-switch-btns">
            <button data-color="#2A07F9"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#068FFF"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#044DBC"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FFAF00"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#F80000"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#231E7A"><i class="fa-solid fa-droplet"></i></button>
        </div>
        <p class="color-scheme-text">Or custom color..</p>
        <input type="color" id="thcolorpicker" value="#2A07F9">
    </div> --}}
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo-tertiary-black.svg')}}" alt="Rakar"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                         <li>
                                            <a href="{{route('user.home')}}">Home</a>
                                        </li>
                                        <li><a href="{{route('user.about')}}">About Us</a></li>
                    <li class="menu-item-has-children">
                    <a href="{{route('user.service')}}">Our Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'calibration']) }}">Calibration</a></li>
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'temperature-mapping-thermal-validation']) }}">Temperature Mapping & Thermal Validation</a></li>
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'hvac-lafs-clean-room-validation']) }}">HVAC System, LAFs & Clean Room Validation</a></li>
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'computer-system-validation']) }}">Computer System Validation (CSV)</a></li>
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'compressed-air-nitrogen-air-validation']) }}">Compressed Air Validation & Nitrogen Air Validation</a></li>
                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'steam-quality-test']) }}">Steam Quality Testing</a></li>
                            </ul>
                    </li>
                     <li><a href="{{route('user.careerList')}}">Career</a></li>
          <a href="{{route('user.contact')}}" class="th-btn rounded-12 style1">Contact Us<i class="fas fa-arrow-right ms-2" ></i></a>

                    {{-- <li><a href="about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Price Plan</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
 
<header class="th-header header-layout1 ">
        <div class="header-top ">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-location-dot"></i> GIDC Char Rasta, Vapi-396195,State Gujarat,India.</li>
                                <li><i class="fas fa-clock"></i> Sun to Friday: 8.00 am - 7.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links ">
                            <ul>
                                <li><i class="fas fa-headset"></i> <a href="{{route('user.contact')}}">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{route('user.home')}}"><img src="{{asset('assets/img/logo-tertiary.svg')}}" alt="Rakar"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                      <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="{{route('user.home')}}">Home</a>
                                        </li>
                                        <li><a href="{{route('user.about')}}">About Us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{route('user.service')}}">Our Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'calibration']) }}">Calibration</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'temperature-mapping-thermal-validation']) }}">Temperature Mapping & Thermal Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'hvac-lafs-clean-room-validation']) }}">HVAC System, LAFs & Clean Room Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'computer-system-validation']) }}">Computer System Validation (CSV)</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'compressed-air-nitrogen-air-validation']) }}">Compressed Air Validation & Nitrogen Air Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'steam-quality-test']) }}">Steam Quality Testing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('user.careerList')}}">Career</a></li>
                                    </ul>
                                </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                            <a href="{{route('user.contact')}}" class="th-btn rounded-12 style1">Contact Us<i class="fas fa-arrow-right ms-2" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{{$slot}}
<footer class="footer-wrapper footer-layout5" data-bg-src="{{asset('assets/img/bg/footer_bg_5.png')}}">
        <div class="footer-contact-area style-black">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <p class="box-text text-white">GIDC Char Rasta, Vapi-396195,State Gujarat,India.</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title text-white">Call Us:</h3>
                            <p class="box-text text-white">
                                <a href="tel:+91 2602423309">+91 26024 23309</a><br>
                                <a href="tel:+91 97252 05412">+91 97252 054 /06/12</a>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title text-white">Email Us:</h3>
                            <p class="box-text text-white"><a href="mailto:contact@calitech.in">contact@calitech.in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contact-area style-black">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <p class="box-text text-white">304-UAE Enterprise Building, Al Garhoud, Dubai, UAE</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title text-white">Call Us:</h3>
                            <p class="box-text text-white"> 
                                <a href="tel:+971507416193">+971 507 416 193</a>
                                <br>
                                <a href="tel:+971501258141">+971 501 258 141</a>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title text-white">Email Us:</h3>
                            <p class="box-text text-white"><a href="mailto:contact@calitech.in">contact@calitech.in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{url('/')}}"><img src="{{asset('assets/img/logo-tertiary.svg')}}" alt="Rakar"></a>
                                </div>
                                <p class="about-text">103-108, Patil Chamber,
New Telephone Exchange Road,
GIDC Char Rasta, Vapi - 396195, State Gujarat, India.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="{{asset('assets/img/icon/footer_title5.svg')}}" alt="icon"> Useful Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{route('user.home')}}">Home</a></li>
                                    <li><a href="{{route('user.about')}}">About Us</a></li>
                                    <li><a href="{{route('user.home')}}#wcu">Why Choose Us</a></li>
                                    <li><a href="{{route('user.service')}}">Services</a></li>
                                    <li><a href="{{route('user.home')}}#testi-sec">Testimonial</a></li>
                                    <li><a href="{{route('user.home')}}#appointment">Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="{{asset('assets/img/icon/footer_title5.svg')}}" alt="icon"> Our Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                     <li><a href="{{ route('user.serviceDetail', ['slug' => 'calibration']) }}">Calibration</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'temperature-mapping-thermal-validation']) }}">Temperature Mapping & Thermal Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'hvac-lafs-clean-room-validation']) }}">HVAC System, LAFs & Clean Room Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'computer-system-validation']) }}">Computer System Validation (CSV)</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'compressed-air-nitrogen-air-validation']) }}">Compressed Air Validation & Nitrogen Air Validation</a></li>
                                                <li><a href="{{ route('user.serviceDetail', ['slug' => 'steam-quality-test']) }}">Steam Quality Testing</a></li>
                                            
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title"><img src="{{asset('assets/img/icon/footer_title5.svg')}}" alt="icon"> Newsletter</h3>
                            <p class="footer-text">Get latest updates and offers.</p>
                            <form class="newsletter-form">
                                <input class="form-control" type="email" placeholder="Enter email address" required="">
                                <button type="submit" class="th-btn style3">Subscribe<i class="far fa-arrow-right ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="{{url('/')}}">Calitech</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end d-none">
                        <div class="footer-links">
                            <ul>
                                <li><a href="about.html">Terms of service</a></li>
                                <li><a href="about.html">Privacy policy</a></li>
                                <li><a href="about.html">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <!-- Swiper Js -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Tilt -->
    <script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>