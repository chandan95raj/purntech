@extends('web.app')

@section('content')
    <!-- Start Hero -->
    <section class="container container-customize">
        <div class="digital-agencye-hero style-1">
            <div class="hero-left-column">
                <div class="title-box">
                    <h2 class="title">
                        <span class="digital">Purn</span>
                        <span class="agency">Tech</span>
                    </h2>
                </div>
                <div class="cta-box">
                    <div class="hero-btn">
                        <a href="{{ url('/contact') }}" class="circle-btn circle-btn-anim">
                            <span class="text text-uppercase">
                                Start
                                <i class="flaticon-up-right-arrow"></i>
                                <br />
                                Project
                            </span>
                        </a>
                    </div>
                    <p class="description">
                        We are team of talented developers & designers Making Fintech Awesome
                    </p>
                </div>
                <div class="partners-section">
                    <!-- <div class="da-shape-line"></div> -->
                    <h6 class="partners-title">Our Trusted Partner</h6>
                    <div class="ak-slider partners-logos-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="client-logo style2">
                                    <img src="{{ asset('assets/img/client/client-1.png') }}" alt="" />
                                    <div class="client-info">
                                        <h6 class="client-title">Credesign</h6>
                                        <p class="client-shot-title">Portfolio Template</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-logo style2">
                                    <img src="{{ asset('assets/img/client/client-2.png') }}" alt="" />
                                    <div class="client-info">
                                        <h6 class="client-title">Credesign</h6>
                                        <p class="client-shot-title">Portfolio Template</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-logo style2">
                                    <img src="{{ asset('assets/img/client/client-3.png') }}" alt="" />
                                    <div class="client-info">
                                        <h6 class="client-title">Credesign</h6>
                                        <p class="client-shot-title">Portfolio Template</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-logo style2">
                                    <img src="{{ asset('assets/img/client/client-4.png') }}" alt="" />
                                    <div class="client-info">
                                        <h6 class="client-title">Credesign</h6>
                                        <p class="client-shot-title">Portfolio Template</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners-swiper-controller">
                        <div class="partners-logs-scrollbar"></div>
                        <div class="partners-logs-navigation">
                            <div class="partners-logs-button-next hover-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="10" viewBox="0 0 28 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_278989272_379)">
                                        <path
                                            d="M0.716728 5.58228L6.17073 1.58728V5.24028L26.5947 5.58228L6.17073 5.92428V9.57728L0.716728 5.58228Z"
                                            fill="#353535" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_278989272_379">
                                            <rect width="27" height="9" fill="white"
                                                transform="matrix(-1 0 0 1 27.4551 0.949463)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="partners-logs-button-prev hover-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="10" viewBox="0 0 28 10"
                                    fill="none">
                                    <g clip-path="url(#clip0_2221321372_376)">
                                        <path
                                            d="M27.1934 5.58228L21.7394 1.58728V5.24028L1.31543 5.58228L21.7394 5.92428V9.57728L27.1934 5.58228Z"
                                            fill="#353535" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2221321372_376">
                                            <rect width="27" height="9" fill="white"
                                                transform="translate(0.455078 0.949463)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-right-column">
                <p class="description">
                    We strive to provide innovative and cutting-edge technology solutions to our customers. We are committed
                    to delivering world-class services that meet the evolving needs of our clients.
                </p>
                <div class="image-box">
                    <div class="da-shape-star">
                        <img class="star-shape" src="{{ asset('assets/img/shape/star-1.png') }}" alt="..." />
                    </div>
                    <div class="hero-right-image"></div>
                    <video autoplay muted loop>
                        <source src="{{ asset('assets/videos/digital-agencye.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Start About -->
    <div class="ak-height-95 ak-height-lg-80"></div>
    <section class="about-content container">
        <div class="star-content">
            <img src="{{ asset('assets/img/shape/star-2.png') }}" alt="star" class="star-1" />
            <img src="{{ asset('assets/img/shape/star-2.png') }}" alt="star" class="star-2" />
        </div>
        <div class="about-info">
            <h3 class="about-title text-color-shiption">
                We are dedicated to delivering <span class="highlight ak-black-color">innovative</span> and <span class="highlight">state-of-the-art </span> technology solutions that empower our
                customers with the tools they need to succeed in an ever-evolving digital landscape. Our commitment to
                excellence drives us to provide <span class="highlight">world-class services</span> that are tailored to meet the dynamic and growing
                demands of our clients. By staying ahead of <span class="highlight">technological advancements</span> and continuously refining our
                solutions, we ensure that our customers receive the <span class="highlight"> most efficient, reliable, and forward-thinking </span>  services
                available.
            </h3>

            <div class="fade-animation">
                <a href="{{ url('/about') }}" class="more-btn">
                    <span class="morebtn-text"> About More </span>
                    <span class="primary-icon-anim">
                        <i class="flaticon-up-right-arrow"></i>
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </a>
            </div>

            <img src="{{ asset('assets/img/shape/line-2.png') }}" alt="swirl design" class="swirl" />
        </div>
    </section>
    <!-- End About -->

    <!-- Start Services -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section class="service-bg">
        <div class="container">
            <div class="ak-height-150 ak-height-lg-80"></div>
            <div class="service-content">
                <div class="ak-section-heading ak-style-1">
                    <div class="ak-section-left">
                        <h2 class="ak-section-title text-animation" data-ease="power2.out" data-split-text="chars"
                            data-duration="0.7" data-direction="textTop" data-offset="100%">
                            Our <span class="highlight">Exceptional</span> Digital
                            Transformation <span class="highlight">Services</span>
                        </h2>
                    </div>
                    <div class="ak-section-right">
                        <p class="ak-section-desp text-animation" data-direction="rotationX" data-split-text="lines"
                            data-delay="0.3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. has been industry and typesetting of the printing .
                        </p>
                        <div class="ak-section-caption fade-animation" data-direction="right" data-delay="0.3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="223" height="12"
                                    viewBox="0 0 223 12" fill="none">
                                    <path d="M1.33789 1.18359H221.034L209.173 10.9822" stroke="#eb5d1e"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                            <span> Services </span>
                        </div>
                    </div>
                </div>
                <div class="service-card fade-animation" data-direction="bottom">
                    <img class="service-hover-img" src="{{ asset('assets/img/services/services-hover-1.png') }}"
                        alt="..." />
                    <div class="service-card-item style-1">
                        <div class="service-left-info">
                            <h4 class="service-title">UI/UX Design</h4>
                            <ul class="service-lists">
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Brand Research </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Competitor Analysis </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Design Structure </span>
                                </li>
                            </ul>
                        </div>
                        <div class="service-left-right">
                            <p class="service-desp">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been industry and
                                typesetting.
                            </p>
                            <div class="service-btn-content">
                                <a href="{{ url('/service-details') }}" class="more-btn">
                                    <span class="morebtn-text"> Learn More </span>
                                    <span class="primary-icon-anim">
                                        <i class="flaticon-up-right-arrow"></i>
                                        <i class="flaticon-up-right-arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-stroke-number ak-stroke-number">01</div>
                </div>
                <div class="service-card fade-animation" data-direction="bottom">
                    <img class="service-hover-img" src="{{ asset('assets/img/services/services-hover-2.png') }}"
                        alt="..." />
                    <div class="service-card-item style-1">
                        <div class="service-left-info">
                            <h4 class="service-title">Web Design</h4>
                            <ul class="service-lists">
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Brand Research </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span>Design Analysis</span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span>Design Structure</span>
                                </li>
                            </ul>
                        </div>
                        <div class="service-left-right">
                            <p class="service-desp">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been industry and
                                typesetting.
                            </p>
                            <div class="service-btn-content">
                                <a href="{{ url('/service-details') }}" class="more-btn">
                                    <span class="morebtn-text"> Learn More </span>
                                    <span class="primary-icon-anim">
                                        <i class="flaticon-up-right-arrow"></i>
                                        <i class="flaticon-up-right-arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-stroke-number ak-stroke-number">02</div>
                </div>
                <div class="service-card fade-animation" data-direction="bottom">
                    <img class="service-hover-img" src="{{ asset('assets/img/services/services-hover-3.png') }}"
                        alt="..." />
                    <div class="service-card-item style-1">
                        <div class="service-left-info">
                            <h4 class="service-title">Web Development</h4>
                            <ul class="service-lists">
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Brand Research </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Competitor Analysis</span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span>Modern Code Structure</span>
                                </li>
                            </ul>
                        </div>
                        <div class="service-left-right">
                            <p class="service-desp">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been industry and
                                typesetting.
                            </p>
                            <div class="service-btn-content">
                                <a href="{{ url('/service-details') }}" class="more-btn">
                                    <span class="morebtn-text"> Learn More </span>
                                    <span class="primary-icon-anim">
                                        <i class="flaticon-up-right-arrow"></i>
                                        <i class="flaticon-up-right-arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-stroke-number ak-stroke-number">03</div>
                </div>
                <div class="service-card fade-animation" data-direction="bottom">
                    <img class="service-hover-img" src="{{ asset('assets/img/services/services-hover-4.png') }}"
                        alt="..." />
                    <div class="service-card-item style-1">
                        <div class="service-left-info">
                            <h4 class="service-title">App Development</h4>
                            <ul class="service-lists">
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Brand Research </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span> Competitor Analysis </span>
                                </li>
                                <li class="service-list">
                                    <span>
                                        <i class="flaticon-star-2"></i>
                                    </span>
                                    <span>Modern Code Structure</span>
                                </li>
                            </ul>
                        </div>
                        <div class="service-left-right">
                            <p class="service-desp">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been industry and
                                typesetting.
                            </p>
                            <div class="service-btn-content">
                                <a href="{{ url('/service-details') }}" class="more-btn">
                                    <span class="morebtn-text"> Learn More </span>
                                    <span class="primary-icon-anim">
                                        <i class="flaticon-up-right-arrow"></i>
                                        <i class="flaticon-up-right-arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-stroke-number ak-stroke-number">04</div>
                </div>
            </div>
            <div class="ak-height-150 ak-height-lg-80"></div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start Core Feature -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section class="core-features-area">
        <div class="container">
            <div class="core-features">
                <div class="core-feature-card fade-animation" data-delay="0.15" data-direction="left">
                    <div class="icon">
                        <i class="flaticon-circle"></i>
                    </div>
                    <h6 class="core-feature-title">Strategic Marketing</h6>
                    <p class="core-feature-desp">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been industry.
                    </p>
                    <p class="core-feature-number">01</p>
                </div>
                <div class="core-feature-card fade-animation" data-delay="0.35" data-direction="left">
                    <div class="icon">
                        <i class="flaticon-folded"></i>
                    </div>
                    <h6 class="core-feature-title">Strategic Marketing</h6>
                    <p class="core-feature-desp">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been industry.
                    </p>
                    <p class="core-feature-number">02</p>
                </div>
                <div class="core-feature-card fade-animation" data-delay="0.55" data-direction="left">
                    <div class="icon">
                        <i class="flaticon-twirl"></i>
                    </div>
                    <h6 class="core-feature-title">Strategic Marketing</h6>
                    <p class="core-feature-desp">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been industry.
                    </p>
                    <p class="core-feature-number">03</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Core Feature -->

    <!-- Start portfolio -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section class="container">
        <div class="portfolio-content">
            <div class="d-flex flex-lg-column flex-column-reverse">
                <div class="portfolio-content-top">
                    <a href="{{ url('/portfolio-details') }}" class="portfolio-card style-1">
                        <div class="portfolio-img img-anim-left-show">
                            <img src="{{ asset('assets/img/portfolio/portfolio-1.png') }}" alt="..." />
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-subtitle">Google Marketing</div>
                            <div class="portfolio-text style-1">
                                <h4 class="portfolio-title">Campaign for EcoHome Products</h4>
                                <div class="portfolio-btn">
                                    <i class="flaticon-up-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/portfolio-details') }}" class="portfolio-card style-1">
                        <div class="portfolio-img img-anim-left-show">
                            <img src="{{ asset('assets/img/portfolio/portfolio-2.png') }}" alt="..." />
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-subtitle">Google Marketing</div>
                            <div class="portfolio-text style-1">
                                <h4 class="portfolio-title">Product Launch</h4>
                                <div class="portfolio-btn">
                                    <i class="flaticon-up-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h2 class="portfolio-title-content">
                    Our <span class="highlight">Exceptional</span> Sucessfull
                    <br />
                    <span class="highlight style-2">Projects</span>
                </h2>
                <div class="ak-height-lg-80"></div>
            </div>
            <div class="portfolio-content-bottom">
                <a href="{{ url('/portfolio-details') }}" class="portfolio-card style-1 mb-0 mb-md-5">
                    <div class="portfolio-img img-anim-left-show">
                        <img src="{{ asset('assets/img/portfolio/portfolio-3.png') }}" alt="..." />
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-subtitle">Google Marketing</div>
                        <div class="portfolio-text style-1">
                            <h4 class="portfolio-title">Product Launch Campaign</h4>
                            <div class="portfolio-btn">
                                <i class="flaticon-up-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/portfolio-details') }}" class="portfolio-card style-1">
                    <div class="portfolio-img img-anim-left-show">
                        <img src="{{ asset('assets/img/portfolio/portfolio-4.png') }}" alt="..." />
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-subtitle">Google Marketing</div>
                        <div class="portfolio-text style-1">
                            <h4 class="portfolio-title">
                                Product Launch Campaign for EcoHome Products
                            </h4>
                            <div class="portfolio-btn">
                                <i class="flaticon-up-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End portfolio -->

    <!-- Start  funfact -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <div class="container">
        <div class="funfact-content">
            <div class="funfact style1">
                <div class="funfact-card style-1">
                    <div class="funfact-number">
                        <span id="count1" class="amin_auto_count">65</span>
                        <span>K</span>
                    </div>
                    <p class="funfact-text">Project Completed</p>
                </div>
            </div>
            <div class="funfact style1">
                <div class="funfact-card style-1">
                    <div class="funfact-number">
                        <span id="count2" class="amin_auto_count">8</span>
                        <span>K</span>
                    </div>
                    <p class="funfact-text">Happy Customers</p>
                </div>
            </div>

            <div class="funfact style1">
                <div class="funfact-card style-1">
                    <div class="funfact-number">
                        <span id="count3" class="amin_auto_count">32</span>
                        <span>+</span>
                    </div>
                    <p class="funfact-text">Years of Experience</p>
                </div>
            </div>
            <div class="funfact style1">
                <div class="funfact-card style-1">
                    <div class="funfact-number">
                        <span id="count4" class="amin_auto_count">13</span>
                    </div>
                    <p class="funfact-text">Award Achievement</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End funfact -->

    <!-- Start  Awards-->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <div class="container">
        <div class="ak-section-heading ak-style-1 type-2">
            <div class="ak-section-left">
                <h2 class="ak-section-title text-animation" data-ease="power2.out" data-split-text="chars"
                    data-duration="0.7" data-direction="textTop" data-offset="100%">
                    <span class="highlight">Awards</span> <br />
                    Achievement
                </h2>
            </div>
            <div class="ak-section-right">
                <div class="ak-section-caption fade-animation" data-direction="right" data-delay="0.3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="223" height="12" viewBox="0 0 223 12"
                            fill="none">
                            <path d="M1.33789 1.18359H221.034L209.173 10.9822" stroke="#eb5d1e" stroke-linecap="round" />
                        </svg>
                    </span>
                    <span> Awards </span>
                </div>
            </div>
        </div>
        <div class="ak-height-75 ak-height-lg-50"></div>
        <div class="awards-box">
            <div class="awards-hover-image">
                <img id="awardsHover" src="{{ asset('assets/img/404.html') }}" alt="Hover Image" />
            </div>
            <div class="awards-list">
                <div class="awards-card fade-animation" data-direction="bottom">
                    <div class="awards-hover">
                        <img src="{{ asset('assets/img/award/hover-img-1.png') }}" alt="..." />
                    </div>
                    <h6 class="awards-title">01. Dribbble Award 2024</h6>
                    <p class="awards-type">Audience Choice</p>
                    <p class="awards-category">Design of the day</p>
                    <div class="awards-img">
                        <img src="{{ asset('assets/img/award/awards-1.svg') }}" alt="..." />
                    </div>
                </div>
                <div class="awards-card fade-animation" data-direction="bottom">
                    <div class="awards-hover">
                        <img src="{{ asset('assets/img/award/hover-img-2.png') }}" alt="..." />
                    </div>
                    <h6 class="awards-title">02. Product hunt Award 2024</h6>
                    <p class="awards-type">Audience Choice</p>
                    <p class="awards-category">Feature Product</p>
                    <div class="awards-img">
                        <img src="{{ asset('assets/img/award/awards-2.svg') }}" alt="..." />
                    </div>
                </div>
                <div class="awards-card fade-animation" data-direction="bottom">
                    <div class="awards-hover">
                        <img src="{{ asset('assets/img/award/hover-img-3.png') }}" alt="..." />
                    </div>
                    <h6 class="awards-title">03. Envato Award 2024</h6>
                    <p class="awards-type">Audience Choice</p>
                    <p class="awards-category">Trendsetter</p>
                    <div class="awards-img">
                        <img src="{{ asset('assets/img/award/awards-3.svg') }}" alt="..." />
                    </div>
                </div>
                <div class="awards-card fade-animation" data-direction="bottom">
                    <div class="awards-hover">
                        <img src="{{ asset('assets/img/award/hover-img-4.png') }}" alt="..." />
                    </div>
                    <h6 class="awards-title">04. Google Award 2024</h6>
                    <p class="awards-type">Honorable Mention</p>
                    <p class="awards-category">Best Problem Solver</p>
                    <div class="awards-img">
                        <img src="{{ asset('assets/img/award/awards-4.svg') }}" alt="..." />
                    </div>
                </div>
                <div class="awards-card fade-animation" data-direction="bottom">
                    <div class="awards-hover">
                        <img src="{{ asset('assets/img/award/hover-img-5.png') }}" alt="..." />
                    </div>
                    <h6 class="awards-title">05. Microsoft Award 2024</h6>
                    <p class="awards-type">Honorable Mention</p>
                    <p class="awards-category">Best Developer</p>
                    <div class="awards-img">
                        <img src="{{ asset('assets/img/award/awards-5.svg') }}" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Awards-->

    <!-- Start Video -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <a href="https://www.youtube.com/watch?v=VcaAVWtP48A" class="ak-center ak-video-block ak-style1 ak-video-open ak-bg">
        <img src="{{ asset('assets/img/bg/video-section-bg.png') }}" class="video-img ak-bg" alt="..." />
        <span class="video-player-btn circle-btn-anim ak-center">
            <span class="text">Play Now</span>
        </span>
    </a>
    <!-- End Video -->

    <!-- Start Testmonial -->
    <section>
        <div class="container">
            <div class="testmonial-slider ak-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testmonial-content style-1">
                            <div class="testmonial-card">
                                <div class="ak-height-100 ak-height-lg-50"></div>
                                <p class="testmonial-desp">
                                    “Working with them has been an absolute game-changer for our
                                    business. Their innovative strategies, coupled with their
                                    deep understanding of our industry, have significantly
                                    boosted our online presence.”
                                </p>
                                <div class="ak-height-50 ak-height-lg-30"></div>
                                <div class="testmonial-info">
                                    <img class="testmonial-img"
                                        src="{{ asset('assets/img/testmonial/testmonial-1.png') }}" alt=".." />
                                    <h6 class="testmonial-title">Mostahid Jackma</h6>
                                    <p class="testmonial-shot-desp">From USA</p>
                                </div>
                                <div class="ak-height-100 ak-height-lg-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testmonial-content style-1">
                            <div class="testmonial-card">
                                <div class="ak-height-100 ak-height-lg-50"></div>
                                <p class="testmonial-desp">
                                    “Working with them has been an absolute game-changer for our
                                    business. Their innovative strategies, coupled with their
                                    deep understanding of our industry, have significantly
                                    boosted our online presence.”
                                </p>
                                <div class="ak-height-50 ak-height-lg-30"></div>
                                <div class="testmonial-info">
                                    <img class="testmonial-img"
                                        src="{{ asset('assets/img/testmonial/testmonial-2.png') }}" alt=".." />
                                    <h6 class="testmonial-title">Morgan Brown</h6>
                                    <p class="testmonial-shot-desp">From USA</p>
                                </div>
                                <div class="ak-height-100 ak-height-lg-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testmonial-content style-1">
                            <div class="testmonial-card">
                                <div class="ak-height-100 ak-height-lg-50"></div>
                                <p class="testmonial-desp">
                                    “Working with them has been an absolute game-changer for our
                                    business. Their innovative strategies, coupled with their
                                    deep understanding of our industry, have significantly
                                    boosted our online presence.”
                                </p>
                                <div class="ak-height-50 ak-height-lg-30"></div>
                                <div class="testmonial-info">
                                    <img class="testmonial-img"
                                        src="{{ asset('assets/img/testmonial/testmonial-1.png') }}" alt=".." />
                                    <h6 class="testmonial-title">Mostahid Jackma</h6>
                                    <p class="testmonial-shot-desp">From USA</p>
                                </div>
                                <div class="ak-height-100 ak-height-lg-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testmonial-content style-1">
                            <div class="testmonial-card">
                                <div class="ak-height-100 ak-height-lg-50"></div>
                                <p class="testmonial-desp">
                                    “Working with them has been an absolute game-changer for our
                                    business. Their innovative strategies, coupled with their
                                    deep understanding of our industry, have significantly
                                    boosted our online presence.”
                                </p>
                                <div class="ak-height-50 ak-height-lg-30"></div>
                                <div class="testmonial-info">
                                    <img class="testmonial-img"
                                        src="{{ asset('assets/img/testmonial/testmonial-2.png') }}" alt=".." />
                                    <h6 class="testmonial-title">Morgan Brown</h6>
                                    <p class="testmonial-shot-desp">From USA</p>
                                </div>
                                <div class="ak-height-100 ak-height-lg-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testmonial-swiper-controller">
            <div class="testmonial-button-prev">
                <div>
                    <span class="svg-icon">
                        <i class="flaticon-left-up"></i>
                    </span>
                    <span> Previous </span>
                </div>
            </div>
            <div class="testmonial-button-next">
                <div>
                    <span> Next </span>
                    <span class="svg-icon">
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testmonial -->

    <!-- Start Team  -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section>
        <div class="container">
            <div class="ak-section-heading ak-style-1">
                <div class="ak-section-left">
                    <h2 class="ak-section-title text-animation" data-ease="power2.out" data-split-text="chars"
                        data-direction="textTop" data-duration="0.7" data-offset="100%">
                        Our <span class="highlight">Exceptional</span> Digital Industrial
                        <span class="highlight">Team Members</span>
                    </h2>
                </div>
                <div class="ak-section-right">
                    <p class="ak-section-desp text-animation" data-direction="rotationX" data-split-text="lines"
                        data-delay="0.3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. has been industry and typesetting of the printing .
                    </p>
                    <div class="ak-section-caption fade-animation" data-direction="right" data-delay="0.3">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="223" height="12" viewBox="0 0 223 12"
                                fill="none">
                                <path d="M1.33789 1.18359H221.034L209.173 10.9822" stroke="#eb5d1e"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <span> 426+ Team Members </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-75 ak-height-lg-50"></div>
        <div class="team-swiper-controller">
            <div class="team-logs-scrollbar"></div>
            <div class="team-logs-navigation">
                <div class="team-logs-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="10" viewBox="0 0 28 10"
                        fill="none">
                        <g clip-path="url(#clip0_2879789272_379)">
                            <path
                                d="M0.716728 5.58228L6.17073 1.58728V5.24028L26.5947 5.58228L6.17073 5.92428V9.57728L0.716728 5.58228Z"
                                fill="#353535" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2879789272_379">
                                <rect width="27" height="9" fill="white"
                                    transform="matrix(-1 0 0 1 27.4551 0.949463)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="team-logs-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="10" viewBox="0 0 28 10"
                        fill="none">
                        <g clip-path="url(#clip0_2344554272_376)">
                            <path
                                d="M27.1934 5.58228L21.7394 1.58728V5.24028L1.31543 5.58228L21.7394 5.92428V9.57728L27.1934 5.58228Z"
                                fill="#353535" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2344554272_376">
                                <rect width="27" height="9" fill="white"
                                    transform="translate(0.455078 0.949463)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <div class="mt-4 ak-slider ak-team-slider">
            <div class="swiper-wrapper row row-cols-1 row-cols-md-5 mx-auto flex-nowrap">
                <div class="swiper-slide">
                    <a href="#" class="border-0 team-card">
                        <div class="team-img-top">
                            <img src="{{ asset('assets/img/team/team-1.png') }}" alt="..." />
                            <div class="team-social-icon">
                                <span class="icon">
                                    <i class="flaticon-facebook-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-instagram-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-twitter"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-linkedin"></i>
                                </span>
                            </div>
                        </div>
                        <div class="team-body">
                            <h6 class="team-title">Alex Johnson</h6>
                            <p class="team-text">Creative Director</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="border-0 team-card">
                        <div class="team-img-top">
                            <img src="{{ asset('assets/img/team/team-2.png') }}" alt="..." />
                            <div class="team-social-icon">
                                <span class="icon">
                                    <i class="flaticon-facebook-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-instagram-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-twitter"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-linkedin"></i>
                                </span>
                            </div>
                        </div>
                        <div class="team-body">
                            <h6 class="team-title">Taylor Smith</h6>
                            <p class="team-text">Graphic Designer</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="border-0 team-card">
                        <div class="team-img-top">
                            <img src="{{ asset('assets/img/team/team-3.png') }}" alt="..." />
                            <div class="team-social-icon">
                                <span class="icon">
                                    <i class="flaticon-facebook-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-instagram-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-twitter"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-linkedin"></i>
                                </span>
                            </div>
                        </div>
                        <div class="team-body">
                            <h6 class="team-title">Jamie Lee</h6>
                            <p class="team-text">Art Director</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="border-0 team-card">
                        <div class="team-img-top">
                            <img src="{{ asset('assets/img/team/team-4.png') }}" alt="..." />
                            <div class="team-social-icon">
                                <span class="icon">
                                    <i class="flaticon-facebook-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-instagram-logo"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-twitter"></i>
                                </span>
                                <span class="icon">
                                    <i class="flaticon-linkedin"></i>
                                </span>
                            </div>
                        </div>
                        <div class="team-body">
                            <h6 class="team-title">Morgan Brown</h6>
                            <p class="team-text">UX/UI Designer</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Team  -->

    <!-- Start Scroll text -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <div class="text-moving-container style2">
        <div class="text-moving-bg"></div>
        <div class="text-moving-info">
            <span class="text-moving style2">
                Digital Design / Product Design / Brand Design / Digital Design /
                Product
            </span>
            <span class="text-moving style2">
                Digital Design / Product Design / Brand Design / Digital Desig /
                Product
            </span>
        </div>
    </div>
    <!-- End Scroll text -->

    <!-- Start  Blogs-->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section>
        <div class="container">
            <div class="ak-section-heading ak-style-1">
                <div class="ak-section-left">
                    <h2 class="ak-section-title text-animation" data-ease="power2.out" data-split-text="chars"
                        data-direction="textTop" data-duration="0.7" data-offset="100%">
                        Our <span class="highlight">Exceptional</span> Digital Industrial
                        <span class="highlight">News</span>
                    </h2>
                </div>
                <div class="ak-section-right">
                    <p class="ak-section-desp text-animation" data-direction="rotationX" data-split-text="lines"
                        data-delay="0.3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. has been industry and typesetting of the printing .
                    </p>
                    <div class="ak-section-caption fade-animation" data-direction="right" data-delay="0.3">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="223" height="12" viewBox="0 0 223 12"
                                fill="none">
                                <path d="M1.33789 1.18359H221.034L209.173 10.9822" stroke="#eb5d1e"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <span> Recent News </span>
                    </div>
                </div>
            </div>
            <div class="ak-height-75 ak-height-lg-50"></div>
            <div class="blogs-content fade-animation">
                <a href="{{ url('/blog-details') }}" class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('assets/img/blogs/blog-1.png') }}" alt="Blog Image 1" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-heading">
                            <div class="meta-info">
                                <span class="admin-tag">Alex Johnson</span>
                                <span class="date-tag">01/07/2024</span>
                            </div>
                            <h4 class="blog-title">
                                Partnering for Success Choosing the Right Digital Agency
                            </h4>
                            <p class="blog-description">
                                Lorem ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem ipsum has been industry and
                                typesetting.
                            </p>
                        </div>
                        <div class="blog-card-btn">
                            <i class="flaticon-up-right-arrow"></i>
                            <i class="flaticon-up-right-arrow"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/blog-details') }}" class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('assets/img/blogs/blog-2.png') }}" alt="Blog Image 1" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-heading">
                            <div class="meta-info">
                                <span class="admin-tag">Taylor Smith</span>
                                <span class="date-tag">15/08/2023</span>
                            </div>
                            <h4 class="blog-title">
                                Building the Future How Digital Agencies Drive Innovation
                            </h4>
                            <p class="blog-description">
                                Lorem ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem ipsum has been industry and
                                typesetting.
                            </p>
                        </div>
                        <div class="blog-card-btn">
                            <i class="flaticon-up-right-arrow"></i>
                            <i class="flaticon-up-right-arrow"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/blog-details') }}" class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('assets/img/blogs/blog-3.png') }}" alt="Blog Image 1" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-heading">
                            <div class="meta-info">
                                <span class="admin-tag">Jamie Lee</span>
                                <span class="date-tag">02/04/2024</span>
                            </div>
                            <h4 class="blog-title">
                                Digital Mastery How Agencies Turn Ideas into Reality
                            </h4>
                            <p class="blog-description">
                                Lorem ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem ipsum has been industry and
                                typesetting.
                            </p>
                        </div>
                        <div class="blog-card-btn">
                            <i class="flaticon-up-right-arrow"></i>
                            <i class="flaticon-up-right-arrow"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/blog-details') }}" class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('assets/img/blogs/blog-4.png') }}" alt="Blog Image 1" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-heading">
                            <div class="meta-info">
                                <span class="admin-tag">Casey Miller</span>
                                <span class="date-tag">09/08/2024</span>
                            </div>
                            <h4 class="blog-title">
                                The Art of Digital Marketing Agency Strategies for Growth
                            </h4>
                            <p class="blog-description">
                                Lorem ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem ipsum has been industry and
                                typesetting.
                            </p>
                        </div>
                        <div class="blog-card-btn">
                            <i class="flaticon-up-right-arrow"></i>
                            <i class="flaticon-up-right-arrow"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End  Blogs-->

    <!-- Start Newsletter -->
    <div class="ak-height-150 ak-height-lg-80"></div>
    <section class="container">
        <div class="newsletter-content style-2">
            <div class="newsletter-title-content text-animation">
                <h2 class="newsletter-title">
                    Join Our
                    <span class="highlight text-underlines underline-anim">
                        Newsletter</span>
                    for the Latest <span class="highlight">Exclusive</span> Content
                </h2>
            </div>

            <form class="newsletter-form fade-animation" data-direction="right">
                <input type="email" class="newsletter-input style-2" placeholder="Enter your email..." required />
                <button type="submit" class="newsletter-btn">
                    <span class="newbtn-text"> Newsletter </span>
                    <span class="primary-icon-anim">
                        <i class="flaticon-up-right-arrow"></i>
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </button>
            </form>
        </div>
    </section>
    <!-- End Newsletter -->
@endsection
