<x-frontend-layout>
     @section('title', env('APP_NAME') .' || Calibration')
       @section('description', 'Explore CALITECH Calibration Laboratory, a leading facility committed to precision, accuracy, and quality in the calibration and testing of measurement equipment. Accredited by NABL and certified to ISO/IEC 17025:2017 standards, CALITECH provides reliable calibration services across various parameters, including electrical, mechanical, thermal, and dimensional measurements. With state-of-the-art technology and a highly skilled team, we ensure your equipment performs reliably and meets international standards.')
       @section('keywords', 'CALITECH Calibration Laboratory, NABL accreditation, ISO/IEC 17025:2017 certification, calibration services, precision measurement, electrical calibration, mechanical calibration, thermal calibration, dimensional calibration, quality assurance, reference calibration standards, calibration lab, testing equipment, accurate measurements, calibration technologies, calibration industry leader, aerospace calibration, automotive calibration, pharmaceutical calibration, manufacturing calibration, reliable calibration services')
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Calibration</li>
                </ul>
            </div>
        </div>
    </div>
{{-- @dd($categoriesCollection) --}}
    <!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="page-single mb-30">
                        <div class="page-content">
                            <h2 class="h3 sec-title page-title">Calibration</h2>
                            <p class="">CALITECH Calibration Laboratory is a leading facility dedicated to maintaining the highest standards of quality in the calibration and testing of measurement and standard test equipment. Our laboratory's quality management system is meticulously designed to ensure precision, accuracy, and reliability in all our processes, and it fully complies with the stringent requirements of ISO/IEC 17025:2017. This certification demonstrates our unwavering commitment to excellence, as it is recognized internationally as the benchmark for quality and competence in calibration laboratories.</p>

                            <p class="mb-30">At CALITECH, we understand the critical importance of accurate measurements in various industries, and we take pride in our state-of-the-art laboratory, which is equipped with advanced Reference Calibration Standards. These standards are essential for ensuring that all measurements conducted in our laboratory are traceable to national or international standards, providing our clients with the confidence that their equipment will perform reliably and consistently.</p>

                            <p>Our laboratory is accredited by the National Accreditation Board for Testing and Calibration Laboratories (NABL), a prestigious recognition that further underscores our commitment to quality and competence. The NABL accreditation is a testament to our laboratory's adherence to the highest standards of technical proficiency, ensuring that our calibration and testing services meet or exceed the expectations of our clients.</p>

                            <p>We offer a comprehensive range of calibration services across various parameters, including electrical, mechanical, thermal, and dimensional measurements. Our team of highly skilled and experienced technicians is dedicated to providing precise calibration services tailored to the specific needs of our clients. Whether it's ensuring the accuracy of electrical instruments, verifying the precision of mechanical gauges, or calibrating temperature sensors, we are equipped to handle a wide array of calibration requirements.</p>

                            <p>In addition to our advanced equipment and technical expertise, CALITECH is committed to continuous improvement and innovation. We regularly update our procedures and invest in the latest calibration technologies to stay at the forefront of the industry. Our goal is to not only meet the current standards but to exceed them, providing our clients with the best possible service.</p>

                            <p>Moreover, our laboratory's environment is meticulously controlled to ensure the highest level of accuracy in all calibration processes. Temperature, humidity, and other environmental factors are carefully monitored and maintained within strict limits, as even the slightest variation can impact the accuracy of measurements. This attention to detail ensures that every calibration performed at CALITECH is of the highest quality.</p>

                            <p>We serve a diverse range of industries, including aerospace, automotive, pharmaceuticals, and manufacturing, among others. Our clients trust us to deliver reliable calibration services that enhance the performance and longevity of their equipment, ultimately contributing to the success of their operations.</p>

                            <p>In summary, CALITECH Calibration Laboratory is more than just a service provider; we are a partner in quality assurance, dedicated to supporting our clients with the most accurate and reliable calibration services available. Our commitment to excellence, combined with our NABL accreditation and ISO/IEC 17025:2017 certification, positions us as a leader in the calibration industry. We look forward to continuing to serve our clients with the highest level of precision, quality, and professionalism.</p>

                            <div class="mb-30">
                                <div class="row gy-4 masonary-active">
                                    <div class="col-xl-4 col-md-6 filter-item">
                                        <div class="service-gallery">
                                            <a href="{{asset('assets/img/service/service_inner_2.jpg')}}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                            <img class="rounded-10 w-100" src="{{asset('assets/img/service/service_inner_2.jpg')}}" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-6 filter-item">
                                        <div class="service-gallery">
                                            <a href="{{asset('assets/img/service/service_inner_3.jpg')}}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                            <img class="rounded-10 w-100" src="{{asset('assets/img/service/service_inner_3.jpg')}}" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-6 filter-item">
                                        <div class="service-gallery">
                                            <a href="{{asset('assets/img/service/service_inner_4.jpg')}}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                            <img class="rounded-10 w-100" src="{{asset('assets/img/service/service_inner_4.jpg')}}" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 filter-item">
                                        <div class="service-gallery">
                                            <a href="{{asset('assets/img/service/service_inner_5.jpg')}}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                            <img class="rounded-10 w-100" src="{{asset('assets/img/service/service_inner_5.jpg')}}" alt="service">
                                        </div>
                                    </div>
                                </div>
                            </div>

<div class="row">
    <div class="col-md-6">
        <h4 class="mt-40 mb-4">Mechanical Parameters</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Pressure, Vacuum, Compound Gauges, Indicators & Transmitters</li>
                <li class="fw-normal">Absolute Pressure Gauges & Transmitters</li>
                <li class="fw-normal">Inclined Manometers, Magnehelic Gauges, and Photophilic Gauges</li>
                <li class="fw-normal">Measuring Cylinders, Beakers, Flasks, Pipettes, and Burettes</li>
                <li class="fw-normal">Weight Boxes, Standard Weights, and Weighing Balances</li>
                <li class="fw-normal">Digital Tachometers, RPM Meters, and Indicators</li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-6">
        <h4 class="mt-40 mb-4">Dimensional Metrology</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Digital and Analog Vernier Calipers</li>
                <li class="fw-normal">Digital and Analog Height Gauges</li>
                <li class="fw-normal">Micrometers and Micrometer Setting Standards</li>
                <li class="fw-normal">Measuring Scales, Tapes, and Rules</li>
                <li class="fw-normal">Test Sieves</li>
                <li class="fw-normal">Sound Level Meters</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <!-- Electro-technical Parameters -->
    <div class="col-md-6">
        <h4 class="mt-40 mb-4">Electro-technical Parameters</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Temperature Indicators/Controllers</li>
                <li class="fw-normal">Scanner Strip Chart Recorders/Data Loggers</li>
                <li class="fw-normal">A.C./D.C. Voltmeters/Ammeter Resistance Meters</li>
                <li class="fw-normal">Meggers/Insulation Testers/Earth Testers</li>
                <li class="fw-normal">Timers/Stopwatches/Clocks/Hour Meters</li>
            </ul>
        </div>
    </div>
    
    <!-- Thermal Parameters -->
    <div class="col-md-6">
        <h4 class="mt-40 mb-4">Thermal Parameters</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Temperature Sensors (RTD/Thermocouple)</li>
                <li class="fw-normal">Temperature Gauges</li>
                <li class="fw-normal">Glass, Room, Wall, and Mercury Thermometers</li>
                <li class="fw-normal">Hygrometers (Wet & Dry)/Digital Hygrometers/RH Sensors</li>
                <li class="fw-normal">Temperature Transmitters</li>
                <li class="fw-normal">Wireless Temperature & RH Data Loggers</li>
                <li class="fw-normal">BOD Incubators/Hot Air Ovens</li>
                <li class="fw-normal">Muffle Furnaces/Stability Chambers</li>
            </ul>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

</x-frontend-layout>