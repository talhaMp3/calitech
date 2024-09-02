<x-frontend-layout>
  @section('title', env('APP_NAME') .' || Home')

    <!--==============================
Hero Area
==============================-->

    <div class="th-hero-wrapper hero-5 slider-area" id="hero">
        <div class="swiper th-slider" id="heroSlide5" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('assets/img/hero/1.png') }}">
                        <div class="container">
                            <div class="hero-style5">
                                <span class="sub-title2" data-ani="slideinup" data-ani-delay="0.1s"><span
                                        class="line"></span><img src="{{asset('assets/img/hero/battery_icon.svg')}}"
                                        alt="shape">Welcome To Calitech </span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.2s"> This is what our
                                        customer's want, what they need, and it is what we provide.</span>
                                    {{-- <span class="title2" data-ani="slideinup" data-ani-delay="0.4s"><span class="text-theme">Electrical</span> Services</span> --}}
                                </h1>
                                {{-- <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">We believe in providing top quality workman and are so confident in our level of service that we back it up</p> --}}
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                    <a href="{{route('user.service')}}" class="th-btn rounded-12 style2">Our All Services<i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="!" class="popup-video video-btn" disabled >
                                        <div class="play-btn">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        Play Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('assets/img/hero/2.png') }}">
                        <div class="container">
                            <div class="hero-style5">
                                <span class="sub-title2" data-ani="slideinup" data-ani-delay="0.1s"><span
                                        class="line"></span><img src="{{asset('assets/img/hero/battery_icon.svg')}}"
                                        alt="shape">Welcome To Calitech </span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.2s"> This is what our
                                        customer's want, what they need, and it is what we provide.</span>

                                    {{-- <span class="title2" data-ani="slideinup" data-ani-delay="0.4s"><span class="text-theme">Electrical</span> Services</span> --}}
                                </h1>
                                {{-- <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">We believe in providing top quality workman and are so confident in our level of service that we back it up</p> --}}
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                    <a href="{{route('user.service')}}" class="th-btn rounded-12 style2">Our All Services<i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="!" class="popup-video video-btn" disabled>
                                        <div class="play-btn">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        Play Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('assets/img/hero/3.png') }}">
                        <div class="container">
                            <div class="hero-style5">
                                <span class="sub-title2" data-ani="slideinup" data-ani-delay="0.1s"><span
                                        class="line"></span><img src="{{asset('assets/img/hero/battery_icon.svg')}}"
                                        alt="shape">Welcome To Calitech </span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.2s"> This is what our
                                        customer's want, what they need, and it is what we provide.</span>

                                    {{-- <span class="title2" data-ani="slideinup" data-ani-delay="0.4s"><span class="text-theme">Electrical</span> Services</span> --}}
                                </h1>
                                {{-- <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">We believe in providing top quality workman and are so confident in our level of service that we back it up</p> --}}
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                    <a href="{{route('user.service')}}" class="th-btn rounded-12 style2">Our All Services<i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="!" class="popup-video video-btn" disabled>
                                        <div class="play-btn">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        Play Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-pagination"></div>
        </div>
        <div class="icon-box">
            <button data-slider-prev="#heroSlide5" class="slider-arrow default"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#heroSlide5" class="slider-arrow default"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
Brand Area
==============================-->
    <div class="brand-sec3 ">
        <div class="brand-inner">
            {{-- <div class="swiper th-slider" id="brandSlider2" data-slider-options='{"spaceBetween":30,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"7"}}}'> --}}
            <div class="swiper th-slider" id="brandSlider2"
                data-slider-options='{
    "spaceBetween": 30,
    "autoplay": {
        "delay": 1000,
        "disableOnInteraction": false
    },
    "breakpoints": {
        "0": {"slidesPerView": 1},
        "576": {"slidesPerView": 2},
        "768": {"slidesPerView": 3},
        "992": {"slidesPerView": 4},
        "1200": {"slidesPerView": 4},
        "1300": {"slidesPerView": 5},
        "1500": {"slidesPerView": 7}
    }
}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/1-1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/1-2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/1-3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/1-4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/2-1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/2-2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/2-3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/2-4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/3-1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/3-2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/3-3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/3-4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/4-1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/4-2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/4-3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/4-4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/5-1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/5-2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/5-3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{asset('assets/img/brand/5-4.png')}}" alt="Brand Logo">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
About Area
==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box5">
                        <div class="img1">
                            <img src="{{asset('assets/img/normal/about_5.png')}}" alt="About"
                                style="    border-radius: 24px;
">
                        </div>
                        <div class="customer-box">
                            <div class="box-img">
                                <img src="{{asset('assets/img/normal/avaters.png')}}" alt="About">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title"><span class="counter-number">800</span>+</h4>
                                <p class="box-text">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="box-badge">
                            <div class="spin-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    preserveAspectRatio="none" xml:space="preserve">
                                    <defs>
                                        <path id="circlePath5"
                                            d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath5" fill="none" />
                                        <text fill="#fff">
                                            {{-- <textPath xlink:href="#circlePath5">Rakar The Best Service Provider</textPath> --}}
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/about_badge.svg')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-37">
                            <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5.svg')}}"
                                    alt="shape">About Us</span>
                            <h2 class="sec-title">Our Commitment to Quality.</h2>
                            <p class="sec-text">Established in 2004, Calitech has consistently upheld its leadership in
                                the calibration and validation industry. With a prestigious clientele of over 500
                                clients, Calitech is renowned for its exceptional service and expertise.</p>
                        </div>
                        <div class="about-media-wrap">
                            <div class="about-media">
                                <div class="box-icon">
                                    <img src="{{asset('assets/img/icon/about_media_1.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title">Industry Leadership</h3>
                                <p class="box-text">Since its establishment in 2004</p>
                            </div>
                            <div class="about-media">
                                <div class="box-icon">
                                    <img src="{{asset('assets/img/icon/about_media_1.svg')}}" alt="Icon">
                                </div>
                                <h3 class="box-title">Commitment to Quality</h3>
                                <p class="box-text">Our services are ISO/IEC 17025:2017 certified</p>
                            </div>
                        </div>
                        <div class="btn-group justify-content-center">
                            <a href="{{route('user.about')}}" class="th-btn style4 rounded-10">Discover More<i
                                    class="far fa-arrow-right ms-2"></i></a>
                            <div class="call-btn">
                                <div class="play-btn">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p class="box-label">Call Us 24/7</p>
                                    <h6 class="box-link"><a href="tel:91 26024 23309">91 26024 23309</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Service Area
==============================-->
    <section class="overflow-hidden space" id="service-sec" data-bg-src="{{asset('assets/img/bg/service_bg_5.png')}}">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-xl-6 text-center text-md-start">
                    <div class="title-area">
                        <span class="sub-title2"><span class="line"></span><img
                                src="{{asset('assets/img/theme-img/title_icon5_white.svg')}}" alt="shape">Our Services</span>
                        <h2 class="sec-title text-white">Our Specialized Validation and Technical Services</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="{{route('user.service')}}" class="th-btn style2 rounded-12">View All Services<i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-wrap text-center">
                <div class="swiper th-slider has-shadow" id="serviceSlider3"
                    data-slider-options='{"paginationType":"fraction","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd1.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_1.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">Calibration</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd2.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_2.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">Thermal Validation
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd3.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_3.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">Temperature Mapping
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd4.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_4.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">HVAC Validation
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd5.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_1.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">Steam quality Test
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-block">
                                <div class="box-img">
                                    <img src="{{asset('assets/img/service/sd6.png')}}" alt="Icon">
                                </div>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <img src="{{asset('assets/img/icon/service_block_2.svg')}}" alt="Icon">
                                    </div>
                                    <h3 class="box-title"><a href="{{route('user.service')}}">Comp. Air Validation
                                        </a></h3>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="slider-controller">
                    <button data-slider-prev="#serviceSlider3" class="slider-arrow default text-white slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <div class="slider-pagination white-color" data-slider-id="#serviceSlider3"></div>
                    <button data-slider-next="#serviceSlider3" class="slider-arrow default text-white slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Feature Area
==============================-->
    <section class="overflow-hidden space " id="wcu">
        <div class="shape-mockup" data-top="0%" data-left="0%"><img src="{{asset('assets/img/bg/why_bg_2.png')}}"
                alt="shape"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5.svg')}}" alt="Icon">Why Choose
                    Us</span>
                <h2 class="sec-title">Great Reasons To Hire Rakar</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="why-feature-left">
                        <div class="why-feature">
                            <div class="box-number">01</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_1.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">NABL Accredited Excellence</h3>
                            <p class="box-text">Certified to ISO/IEC 17025:2017 standards, ensuring precise and
                                reliable calibration and validation services.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">02</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_2.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Proven Industry Leadership</h3>
                            <p class="box-text">Over 20 years of experience with a reputation for excellence, trusted
                                by more than 500 esteemed clients.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">03</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_3.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Comprehensive Service Scope</h3>
                            <p class="box-text">Expertise across Mechanical, Electro-technical, Thermal, and more,
                                offering a wide range of calibration and validation services.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4 align-self-end d-none d-xl-block">
                    <div class="why-img2">
                        <img src="{{asset('assets/img/normal/why_2.png')}}" alt="Why">
                    </div>
                </div> --}}
                <div class="col-xl-6 col-md-6">
                    <div class="why-feature-right">
                        <div class="why-feature">
                            <div class="box-number">04</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_4.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">State-of-the-Art Technology</h3>
                            <p class="box-text">Equipped with the latest technology and standards to deliver accurate
                                and compliant results every time.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">05</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_5.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Regulatory Compliance</h3>
                            <p class="box-text">Adherence to global standards such as WHO, USFDA, and more, ensuring
                                compliance and quality in all services.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">06</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_6.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Dedicated Customer Support</h3>
                            <p class="box-text">Committed to providing exceptional service with a focus on client
                                satisfaction and long-term partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
Counter Area
==============================-->
            <div class="">
                <div class="container">
                    <div class="counter-card-wrap style4">
                        <div class="counter-card">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">20</span>+</h2>
                                <p class="box-text text-white">Years of Expertise</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter-card">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">500</span>+</h2>
                                <p class="box-text text-white">Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter-card">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number">1000</span>+</h2>
                                <p class="box-text text-white">Successful Projects</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter-card">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="-number">ISO/IEC 17025:2017</span></h2>
                                <p class="box-text text-white">Certified</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Process Area
==============================-->
    <section class="space" id="process-sec" data-bg-src="{{asset('assets/img/bg/process_bg_2.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5_white.svg')}}"
                                alt="Icon">Our Process</span>
                        <h2 class="sec-title text-white">How We Work</h2>
                        <p class="sec-text text-white">Step-by-step approach to ensure quality and precision in every
                            project.</p>
                    </div>
                </div>
            </div>


            <div class="process-box-wrap">
                <div class="process-box">
                    <div class="box-number">01</div>
                    <div class="box-content">
                        <h3 class="box-title">Consultation</h3>
                        <p class="box-text">Understand client needs and gather details.</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">02</div>
                    <div class="box-content">
                        <h3 class="box-title">Assessment</h3>
                        <p class="box-text">Analyze and develop a tailored validation plan.</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">03</div>
                    <div class="box-content">
                        <h3 class="box-title">Execution</h3>
                        <p class="box-text">Validate using advanced methods and ensure compliance.</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">04</div>
                    <div class="box-content">
                        <h3 class="box-title">Reporting</h3>
                        <p class="box-text">Provide detailed reports with results and actions.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5.svg')}}" alt="shape">Our
                    Certificates</span>
                <h2 class="sec-title">Our Awesome Certificates</h2>
            </div>
            <div class="row gy-4 filter-active">
                <div class="col-xl-4 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/certificates/1.png')}}" alt="Certificates image">
                        </div>
                        <a href="{{asset('assets/img/certificates/1.png')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/certificates/2.png')}}" alt="Certificates image">
                        </div>
                        <a href="{{asset('assets/img/certificates/2.png')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/certificates/3.png')}}" alt="Certificates image">
                        </div>
                        <a href="{{asset('assets/img/certificates/3.png')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="testi-sec">

        <div class="shape-mockup moving d-none d-xxl-block" style="right: 0%; bottom: 0%;">
            <img src="{{asset('assets/img/shape/man_shape_1.png')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{asset('assets/img/normal/contact_1.jpg')}}" alt="Image">
                        </div>
                        <div class="contact-process-wrap">
                            <div class="contact-process">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">Book Online</h3>
                                    <p class="box-text">Willing to go the extra mile to provide a quality job &amp;
                                        service. Although we are based in the Manchester area.</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">Detailed Estimate</h3>
                                    <p class="box-text">Although we are based in the Manchester area, we work with fit
                                        out companies and contractors across the country.</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">Work Planning</h3>
                                    <p class="box-text">We work with fit out companies and other contractors across the
                                        country.Although we are based in the Manchester area.</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">04</div>
                                <div class="media-body">
                                    <h3 class="box-title">Get Delivery</h3>
                                    <p class="box-text">Delivery with fit out companies and other contractors across
                                        the country.Although we are based in the Manchester area.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start align-self-center space-extra" id="appointment">
                    <div class="title-area">
                        <span class="sub-title"><img src="{{asset('assets/img/theme-img/title_icon.svg')}}" alt="shape">Book an
                            appointment</span>
                        <h2 class="sec-title">Request a quote</h2>
                    </div>
                    <form action="mail.php" method="POST" class="input-light ajax-contact pb-30 pb-md-0">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number"
                                    placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled="" selected="" hidden="">Select
                                        Subject</option>
                                    <option value="General Query">General Query</option>
                                    <option value="Help Support">Help Support</option>
                                    <option value="Sales Support">Sales Support</option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Your Message" style="height: 48px;"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Send Message Now<i
                                        class="far fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <div class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5.svg')}}" alt="shape">Our Best
                    Gallery</span>
                <h2 class="sec-title">Our Awesome Gallery</h2>
            </div>
            <div class="row gy-4 filter-active">
                <div class="col-xl-3 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/gallery/gallery_2_1.jpg')}}" alt="gallery image">
                        </div>
                        <a href="{{asset('assets/img/gallery/gallery_2_1.jpg')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/gallery/gallery_2_2.jpg')}}" alt="gallery image">
                        </div>
                        <a href="{{asset('assets/img/gallery/gallery_2_2.jpg')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/gallery/gallery_2_3.jpg')}}" alt="gallery image">
                        </div>
                        <a href="{{asset('assets/img/gallery/gallery_2_3.jpg')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/gallery/gallery_2_4.jpg')}}" alt="gallery image">
                        </div>
                        <a href="{{asset('assets/img/gallery/gallery_2_4.jpg')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  filter-item">
                    <div class="gallery-grid">
                        <div class="box-img">
                            <img src="{{asset('assets/img/gallery/gallery_2_5.jpg')}}" alt="gallery image">
                        </div>
                        <a href="{{asset('assets/img/gallery/gallery_2_5.jpg')}}" class="icon-btn popup-image"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <section class="overflow-hidden space" id="testi-sec" data-bg-src="{{asset('assets/img/bg/testi_bg_5.jpg')}}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><span class="line"></span><img
                        src="{{asset('assets/img/theme-img/title_icon5_white.svg')}}" alt="shape">Testimonial</span>
                <h2 class="sec-title text-white">What our client say</h2>
            </div>
            <div class="slider-wrap text-center">
                <div class="swiper th-slider has-shadow" id="testiSlider5"
                    data-slider-options='{"paginationType":"fraction","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid style2">
                                <div class="box-logo">
                                    <img src="{{asset('assets/img/brand/testi_logo_1.svg')}}" alt="Image">
                                </div>
                                <div class="box-icon">
                                    <svg width="71" height="70" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="70.5" y="70" width="70" height="70" rx="35"
                                            transform="rotate(180 70.5 70)" fill="var(--theme-color)" />
                                        <path
                                            d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="box-profile">
                                    <div class="box-avater">
                                        <img src="{{asset('assets/img/testimonial/testi_3_1.jpg')}}" alt="Avater">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Sumaiya Zara</h3>
                                        <p class="box-desig">CEO Of Company</p>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">Working with Cycalitech has been an absolute game-changer for our operations. Their meticulous approach to calibration and validation ensures that our equipment meets all regulatory standards. We’re especially impressed by their attention to detail and their ability to handle complex projects with ease. Cycalitech has become an invaluable partner in maintaining our commitment to quality.
</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid style2">
                                <div class="box-logo">
                                    <img src="{{asset('assets/img/brand/testi_logo_2.svg')}}" alt="Image">
                                </div>
                                <div class="box-icon">
                                    <svg width="71" height="70" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="70.5" y="70" width="70" height="70" rx="35"
                                            transform="rotate(180 70.5 70)" fill="var(--theme-color)" />
                                        <path
                                            d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="box-profile">
                                    <div class="box-avater">
                                        <img src="{{asset('assets/img/testimonial/testi_3_2.jpg')}}" alt="Avater">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Simon</h3>
                                        <p class="box-desig">Managing Director</p>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">Cycalitech has consistently delivered outstanding service and support. Their expertise in calibration, especially with critical parameters like temperature and pressure, has helped us achieve precise and reliable measurements. The team is professional, knowledgeable, and always available to provide guidance. We couldn’t ask for a better partner to manage our validation needs.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid style2">
                                <div class="box-logo">
                                    <img src="{{asset('assets/img/brand/testi_logo_1.svg')}}" alt="Image">
                                </div>
                                <div class="box-icon">
                                    <svg width="71" height="70" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="70.5" y="70" width="70" height="70" rx="35"
                                            transform="rotate(180 70.5 70)" fill="var(--theme-color)" />
                                        <path
                                            d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="box-profile">
                                    <div class="box-avater">
                                        <img src="{{asset('assets/img/testimonial/testi_3_1.jpg')}}" alt="Avater">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Agelina Margret</h3>
                                        <p class="box-desig">CEO Of Company</p>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">We have been relying on Cycalitech for over a decade, and they never fail to exceed our expectations. Their NABL-accredited lab and strict adherence to ISO/IEC 17025:2017 standards give us complete confidence in their results. The comprehensive reports they provide are invaluable for our compliance audits. Cycalitech truly understands the importance of quality in the pharmaceutical industry.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid style2">
                                <div class="box-logo">
                                    <img src="{{asset('assets/img/brand/testi_logo_2.svg')}}" alt="Image">
                                </div>
                                <div class="box-icon">
                                    <svg width="71" height="70" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="70.5" y="70" width="70" height="70" rx="35"
                                            transform="rotate(180 70.5 70)" fill="var(--theme-color)" />
                                        <path
                                            d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="box-profile">
                                    <div class="box-avater">
                                        <img src="{{asset('assets/img/testimonial/testi_3_2.jpg')}}" alt="Avater">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Robert Danials</h3>
                                        <p class="box-desig">Managing Director</p>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">Cycalitech’s commitment to excellence is evident in every aspect of their service. From the initial consultation to the final validation report, they demonstrate unparalleled professionalism and expertise. Their ability to tailor their services to our specific needs, especially in HVAC system validation, has been a significant asset to our operations. We highly recommend Cycalitech for any calibration and validation requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
                <div class="slider-controller">
                    <button data-slider-prev="#testiSlider5" class="slider-arrow default text-white slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <div class="slider-pagination white-color" data-slider-id="#testiSlider5"></div>
                    <button data-slider-next="#testiSlider5" class="slider-arrow default text-white slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>




</x-frontend-layout>
