
<x-frontend-layout>
 @section('title', env('APP_NAME') .' || About Us')
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="overflow-hidden space" data-bg-src="{{asset('assets/img/bg/pattern_bg_5.png')}}" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 text-center text-xl-start">
                    <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon2.svg')}}" alt="shape">About Us</span>
                    <div class="title-area mb-37">
                        <h4 class="sec-title">Who We Are</h4>
                        <p class="sec-text">Calitech, founded in 2004, stands as India’s foremost provider of calibration and validation services. With nearly two decades of experience, we have consistently delivered exceptional service to industry leaders across the nation. Our team, consisting of 37 highly skilled professionals, including 25 specialized Service Engineers, is dedicated to ensuring the accuracy, reliability, and compliance of your instruments and systems. </p>
                    </div>
                    <div class="title-area mb-37">
                        <h4 class="sec-title">Our Expertise</h4>
                        <p class="sec-text">At Calitech, we specialize in a wide range of calibration and validation services, covering areas such as Pressure, Temperature, Dimensional, Electrical, Mass, Time, Noise, Air-Flow, Lux, and Hardness & Tensile Testing Machines. Our expertise extends to thermal validation, HVAC and clean room validation, and Steam Quality Testing. Our state-of-the-art laboratory, designed to comply with ISO 17025 and NABL standards, is equipped with the latest technologies to provide you with precise and dependable results. </p>
                    </div>
                    
                </div>
               
              
            </div>
        </div>
    </div>


    <section class="overflow-hidden space shape-mockup-wrap">
        <div class="shape-mockup" style="top: 0%; left: 0%;"><img src="{{asset('assets/img/bg/why_bg_2.png')}}" alt="shape"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="{{asset('assets/img/theme-img/title_icon5.svg')}}" alt="Icon">Why Choose Calitech?</span>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="why-feature-left">
                        <div class="why-feature">
                            <div class="box-number">01</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_1.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Proven Track Record</h3>
                            <p class="box-text">We have earned the trust of India’s leading corporations, including Dr. Reddy’s Lab, Ranbaxy, Zydus, Intas, Ipca, Wockhardt, and many more, by consistently delivering high-quality services.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">02</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_2.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Advanced Technology</h3>
                            <p class="box-text">Our commitment to using cutting-edge technology ensures that we remain at the forefront of the industry, providing you with the most efficient and effective solutions.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">03</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_3.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Qualified Team</h3>
                            <p class="box-text">Our team of experienced and certified professionals is dedicated to understanding and meeting your specific needs, ensuring the highest levels of service and support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="why-feature-right">
                        <div class="why-feature">
                            <div class="box-number">04</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_4.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Global Standards Compliance</h3>
                            <p class="box-text">Our services and reports adhere to international standards, including ISO, WHO, FDA, UK MHRA, US FDA, TGA Australia, and MCC South Africa, giving you confidence in the results we provide.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">05</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_5.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Transparent and Affordable</h3>
                            <p class="box-text">We offer competitive pricing with no hidden costs, ensuring that you receive prompt, reliable service at a fair price.</p>
                        </div>
                        <div class="why-feature">
                            <div class="box-number">06</div>
                            <div class="box-icon">
                                <img src="{{asset('assets/img/icon/why_feature_6.svg')}}" alt="">
                            </div>
                            <h3 class="box-title">Customized Solutions</h3>
                            <p class="box-text">We understand that every client has unique requirements. That’s why we offer tailored calibration and validation solutions that are specifically designed to meet your industry’s demands, ensuring optimal performance and compliance for your equipment.</p>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </section>

    <!--==============================
Brand Area  
==============================-->
    <div class="bg-title space-extra" data-bg-src="{{asset('assets/img/bg/brand_bg_1.png')}}">
        <div class="container">
            <h2 class="sec-title text-white text-center mb-35">our trusted Clients</h2>
            <div class="swiper th-slider" id="brandSlider2" data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
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


    </x-frontend-layout>