<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @if (isset($headerdata))
        <meta property="og:title" content="{{ $headerdata['meta_title'] }}">
        <meta property="og:description" content="{{ $headerdata['meta_description'] }}">
        <meta property="og:keyword" content="{{ $headerdata['meta_keywords'] }}">
        <meta property="og:url" content="{{ $headerdata['meta_url'] }}">
        <meta property="og:type" content="{{ $headerdata['meta_type'] }}">
        <meta property="og:site_name" content="{{ $headerdata['site_name'] }}">
        <meta property="og:image" content="{{ $headerdata['meta_image'] }}">
        {!! $headerdata['schema'] !!}
    @endif
    <!-- Favicon Icon -->
    <link rel="icon"
        href="@if (isset($headerdata)) {{ $headerdata['meta_image'] }} @else assets/img/logo/favicon.svg @endif" />
    <!-- Site Title -->
    <title>
        @if (isset($headerdata))
            {{ $headerdata['meta_title'] }}
        @else
            PurnTech
        @endif
    </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon_cretio.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body class="dark">
    <!-- Preloader -->
    {{-- <div id="preloader" class="preloader">
        <div class="txt-loading">
            <div class="preloader-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" class="preloader-text-svg">
                    <defs>
                        <linearGradient id="textGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#000" />
                            <stop offset="50%" stop-color="#000" />
                            <stop offset="100%" stop-color="#000" />
                        </linearGradient>
                    </defs>
                    <text class="svg-text" id="svgText">PurnTech</text>
                </svg>
            </div>
            <div class="loading-percent">0%</div>
        </div>
    </div> --}}
    <!-- Preloader -->

    <!-- Start Header Section -->
    <header class="ak-site_header ak-style1 ak-sticky_header">
        <div class="ak-main_header">
            <div class="container container-customize">
                <div class="ak-main_header_in">
                    <div class="ak-main-header-left">
                        <a class="ak-site_branding dark-logo" href="{{ url('/') }}">
                            <img src="assets/img/logo/PurnTechdark.png" alt="PurnTechdark" />
                        </a>
                        <a class="ak-site_branding white-logo" href="{{ url('/') }}">
                            <img src="assets/img/logo/PurnTechLogo.png" alt="PurnTechLogo" />
                        </a>
                    </div>
                    <div class="ak-main-header-center">
                        <div class="ak-nav ak-medium">
                            <ul class="ak-nav_list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/our-works') }}">Our Works</a></li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Access</a>
                                    <ul>
                                        <li><a href="https://pay.purntravel.com/utility/bill-pay"><img
                                                    style="width: 20px; height: 18.6px; border-radius: 50%;"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAASCAMAAABsDg4iAAAAw1BMVEXyZyjyZynyaCnyaCryaSryaSvyay3zbTHzbzPzcTbzdDrzdj3zeED0eUL0fEb0gUz0g0/1hVP1jl/1j2H2kmX2k2b2mG32mW/2m3H3nnb3o333pYD3poH4qYX4sI/4sJD4sZD5tZf5u575u5/5vKD6v6T6v6X6w6r6xKz6ybL7z7v70b7708H71cP82Mf82Mj828384NP95dv96N796N/96d/96eD96+L+7+n+8On+9O/++Pb++fb//Pv//v7///7///8dkEuNAAAAj0lEQVQY033Q1w6CQBCF4bH3CvaCHQt2UVHB8/5P5a7ezGD0u/yTM9ks0U+5mmJWEiKO8OY1eRzD3eoamCIOI4NA1RWLbccxqP4A9nwfVeJLYMHnTw24l1nsecr1MC/xdeesuLt+Wj7p45SVcZrXUjIei9SybSs0v1WTa2zCN/3ZBd3vD/EnMRYLDc3I0B8vj7YZNYgcgbUAAAAASUVORK5CYII="
                                                    alt="BharatConnect" id="pagespeed_img_u89N_CLfaQ1"> Bill Payments</a>
                                        </li>
                                        <li><a href="https://webmail.purntech.com/">Webmail</a></li>
                                        <li><a href="https://erp.purntech.com/">ERP POS By PurnTech</a></li>
                                        <li><a href="https://rcrm.purntech.com/">Project Manager and CRM</a></li>
                                        <li><a href="https://link.purntech.com/">Free URL Shortener</a></li>
                                        <li><a href="https://email.purntech.com/">Email &amp; SMS Marketing</a></li>
                                        <li class="dropdown"><a href="http://hosting.purntech.com/"><span>Free Web
                                                    Hosting</span> <i class="bi bi-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="http://hosting.purntech.com/login.html">Login Free Web
                                                        Hosting</a></li>
                                                <li><a href="http://cpanel.hosting.purntech.com/">CPanel Login(Free Web
                                                        Hosting)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ak-main-header-right">
                        <div class="ak-space-between gap-3">
                            <div class="btn-wrapper">
                                <div class="button-container">
                                    <a href="{{ url('/contact') }}" class="custom-button ak-center">
                                        <svg width="180px" height="50px" viewBox="0 0 180 50">
                                            <rect x="0" y="0" width="180" height="50" rx="30"
                                                ry="30" class="bg-line" />
                                            <rect x="0" y="0" width="180" height="50" rx="30"
                                                ry="30" class="hl-line" />
                                        </svg>
                                        <span>Get Started</span>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <img src="{{asset('assets/img/hpd.png')}}" width="100" height="100" alt="">
                            </div>
                            {{-- <div class="offcanvaopen-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">
                                <i class="flaticon-dots-menu"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-bar-border"></div>
    </header>
    <!-- Start offcanvas body -->
    <div class="offcanvas offcanvas-end style-1" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-black ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-body-coustom-style">
                <div class="offcanvas-logo-content">
                    <a class="ak-site_branding dark-logo" href="{{ url('/') }}">
                        <img src="assets/img/logo/PurnTechdark.png" alt="PurnTechdark" />
                    </a>
                    <a class="ak-site_branding white-logo" href="{{ url('/') }}">
                        <img src="assets/img/logo/PurnTechLogo.png" alt="PurnTechLogo" />
                    </a>
                </div>
                <p class="desp">
                    We thrive on creativity and innovation. Our team is constantly
                    exploring new.
                </p>
                <div class="row row-cols-3 g-3">
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-1.png" class="img-fluid" alt="..." />
                    </div>
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-2.png" class="img-fluid" alt="..." />
                    </div>
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-3.png" class="img-fluid" alt="..." />
                    </div>
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-4.png" class="img-fluid" alt="..." />
                    </div>
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-5.png" class="img-fluid" alt="..." />
                    </div>
                    <div class="col">
                        <img src="assets/img/gallery/mini-gallery-6.png" class="img-fluid" alt="..." />
                    </div>
                </div>

                <div class="offcanvas-footer-contant">
                    <p class="short-title">Say hello!</p>
                    <a class="email" href="emailto:info@email.com"> info@email.com </a>
                    <a class="email" href="telto:(406)555-0120">(406) 555-0120</a>
                    <a href="#">
                        901 N Pitt Str., Suite 170 <br />
                        Alexandria, USA
                    </a>
                    <div class="ak-height-25 ak-height-lg-25"></div>
                    <p class="short-title">Social:</p>
                    <div class="social-icon">
                        <a href="#" class="icon style-2 dark-mode">
                            <i class="flaticon-facebook"></i>
                        </a>
                        <a href="#" class="icon style-2 dark-mode">
                            <i class="flaticon-video"></i>
                        </a>
                        <a href="#" class="icon style-2 dark-mode">
                            <i class="flaticon-linkedin"></i>
                        </a>
                        <a href="#" class="icon style-2 dark-mode">
                            <i class="flaticon-twitter"></i>
                        </a>
                    </div>
                    <div class="ak-height-40 ak-height-lg-40"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End offcanvas body -->
    <div class="ak-height-190 ak-height-lg-80"></div>
    <!-- End Header Section -->

    <div>
        @yield('content')
    </div>

    <!-- Start Footer -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <footer class="ak-footer style-1 ak-bg" data-src="{{asset('assets/img/bg/footer-bg.png')}}">
        <div class="ak-height-120 ak-height-lg-50"></div>
        <img src="assets/img/bg/footer-bgshape.png" class="ak-bg footer-bgshape" alt="bgshape" />
        <div class="container">
            <div class="ak-footer-container">
                <div class="footer-cta">
                    <div class="footer-cta-info">
                        <h1 class="footer-cta-title">Let’s</h1>
                        <h2 class="footer-cta-title-two"><span>work</span> Together</h2>
                    </div>
                    <div class="footer-btn-email">
                        <div class="footer-btn-content">
                            <a href="{{url('/contact')}}" class="footer-btn circle-btn-anim">
                                <span class="text">
                                    Start
                                    <i class="flaticon-up-right-arrow"></i>
                                    <span>Project</span>
                                </span>
                            </a>
                        </div>
                        <div class="footer-email">
                            <p class="email-short-title">Say hello!</p>
                            <a href="emailto:info@purntech.com"> info@purntech.com</a>
                        </div>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="about-company">
                        <img class="footer-logo" src="{{asset('assets/img/logo/PurnTechLogo.png')}}" alt="white-logo.svg" />
                        <p class="about-company-desp">
                            PurnTech Retail Finlife India(OPC) Pvt. Ltd.
                        </p>
                        <br>
                        <p>
                            CIN: U47912DL2023OPC419506 <br>
                            Phone: +91 9934606186 <br>
                            Email: info@purntech.com <br>
                            Grievance/nodal : PankajK@PurnTech.com
                        </p>
                    </div>

                    <div class="address-phn">
                        <a href="telto:(406)555-0120" class="phn">
                            <span>
                                <i class="flaticon-telephone"></i>
                            </span>
                            +91 9934606186
                        </a>
                        <p class="address">203, 2-A/3, S/F Front side, <br> Kundan Mansion, Asaf Ali Road, <br> Turkman Gate
                            New Delhi, DL 110002
                            India</p>
                    </div>

                    <div class="footer-list-content">
                        <ul class="footer-list-menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/our-works') }}">Our Works</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-95 ak-height-lg-50"></div>
        <div class="copy-right-content">
            <div class="container">
                <div class="ak-space-between">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/purntechretail/" class="icon">
                            <i class="flaticon-facebook"></i>
                        </a>
                        <a href="https://instagram.com/purntechretail" class="icon">
                            <i class="flaticon-instagram"></i>
                        </a>
                        <a href="https://twitter.com/purntechretail" class="icon">
                            <i class="flaticon-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com/c/purntechretail" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/purntechretail/" class="icon">
                            <i class="flaticon-linkedin"></i>
                        </a>
                    </div>
                    <a href="#" class="copy-right-text">© <script>document.write(new Date().getFullYear())</script> <span>PurnTech.</span> All rights reserved.</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="mode-toggle">
        <div class="setting-mode">
            <button id="open">
                <i class="flaticon-sun"></i>
            </button>
            <button id="clecel">
                <i class="flaticon-close-button-1"></i>
            </button>
        </div>
        <div class="mode-btn js-mode-type">
            <button data-mode="light" class="mode-light">
                <i class="flaticon-sun"></i>
            </button>
            <button data-mode="dark" class="active mode-dark">
                <i class="flaticon-night-mode"></i>
            </button>
        </div>
    </div>

    <span class="ak-scrollup">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z"
                fill="currentColor" />
        </svg>
    </span>
    <!-- Start Video Popup -->
    <div class="ak-video-popup">
        <div class="ak-video-popup-overlay"></div>
        <div class="ak-video-popup-content">
            <div class="ak-video-popup-layer"></div>
            <div class="ak-video-popup-container">
                <div class="ak-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="ak-video-popup-close"></div>
            </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Script -->
    <script src="{{asset('assets/js/plugins/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/gsap.js')}}"></script>
    <script src="{{asset('assets/js/plugins/splittext.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrolltigger.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrolltoplugins.js')}}"></script>
    <script src="{{asset('assets/js/plugins/lenis.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
