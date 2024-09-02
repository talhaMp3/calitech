<x-frontend-layout>
                  @section('title', env('APP_NAME') .' || HVAC System, LAFs & Clean Room Validation')
    @section('description',
        'Explore CALITECH Calibration Laboratory, a leading facility committed to precision,
        accuracy, and quality in the calibration and testing of measurement equipment. Accredited by NABL and certified to
        ISO/IEC 17025:2017 standards, CALITECH provides reliable calibration services across various parameters, including
        electrical, mechanical, thermal, and dimensional measurements. With state-of-the-art technology and a highly skilled
        team, we ensure your equipment performs reliably and meets international standards.')
    @section('keywords',
        'CALITECH Calibration Laboratory, NABL accreditation, ISO/IEC 17025:2017 certification,
        calibration services, precision measurement, electrical calibration, mechanical calibration, thermal calibration,
        dimensional calibration, quality assurance, reference calibration standards, calibration lab, testing equipment,
        accurate measurements, calibration technologies, calibration industry leader, aerospace calibration, automotive
        calibration, pharmaceutical calibration, manufacturing calibration, reliable calibration services')
        <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Service Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>HVAC System, LAFs & Clean Room Validation</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="page-single mb-30">
                            <div class="page-content">
                                <h2 class="h3 sec-title page-title">HVAC System, LAFs & Clean Room Validation</h2>
                                <p class="">CALITECH provides comprehensive HVAC system validations adhering to a range of international standards and guidelines, including ISO 14644, EU cGMP, US Federal Standard 209E, WHO, USFDA, TGA (Australia), European standards (EMEA), and MHRA (European Countries). Our validation processes ensure that HVAC systems meet the stringent requirements for various room classifications, guaranteeing optimal performance and compliance with regulatory standards.</p>

                                <p class="mb-30">Utilizing cutting-edge technology and 21 CFR compliance, we conduct a series of rigorous tests to ensure the integrity and efficiency of HVAC systems. Our services include Filter Integrity Leak Tests using POLY ALFA OLIFINE (PAO), Air Flow Visualization Tests (Smoke Tests), and Air Velocity Measurements. These tests are essential for verifying that air filtration systems are functioning correctly and that air flow is adequate for maintaining clean room standards.</p>

                                <p>In addition to filter and air flow assessments, we also perform Light Intensity Measurements, Sound Level Measurements, and Airborne Particle Count Tests. These evaluations help to ensure that environmental conditions within clean rooms and controlled areas are within specified limits, contributing to a controlled and contaminant-free environment.</p>
                                <div class="mb-30">
                                    <div class="row gy-4 masonary-active">
                                        <div class="col-xl-4 col-md-6 filter-item">
                                            <div class="service-gallery">
                                                <a href="{{ asset('assets/img/service/service_inner_2.jpg') }}"
                                                    class="popup-image box-btn"><i
                                                        class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100"
                                                    src="{{ asset('assets/img/service/service_inner_2.jpg') }}"
                                                    alt="service">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-md-6 filter-item">
                                            <div class="service-gallery">
                                                <a href="{{ asset('assets/img/service/service_inner_3.jpg') }}"
                                                    class="popup-image box-btn"><i
                                                        class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100"
                                                    src="{{ asset('assets/img/service/service_inner_3.jpg') }}"
                                                    alt="service">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-md-6 filter-item">
                                            <div class="service-gallery">
                                                <a href="{{ asset('assets/img/service/service_inner_4.jpg') }}"
                                                    class="popup-image box-btn"><i
                                                        class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100"
                                                    src="{{ asset('assets/img/service/service_inner_4.jpg') }}"
                                                    alt="service">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 filter-item">
                                            <div class="service-gallery">
                                                <a href="{{ asset('assets/img/service/service_inner_5.jpg') }}"
                                                    class="popup-image box-btn"><i
                                                        class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100"
                                                    src="{{ asset('assets/img/service/service_inner_5.jpg') }}"
                                                    alt="service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
    <div class="col-md-6">
        <h4 class="mt-40 mb-4">HVAC System Validation</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Filter Integrity Leak Test Using POLY ALFA OLIFINE (PAO)</li>
                <li class="fw-normal">Air Flow Visualization Test (Smoke Test)</li>
                <li class="fw-normal">Air Velocity Measurement</li>
                <li class="fw-normal">Air Changes Per Hour Measurement</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6">
        <h4 class="mt-40 mb-4">LAFs & Clean Room Validation</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Light Intensity Measurement</li>
                <li class="fw-normal">Sound Level Measurement</li>
                <li class="fw-normal">Airborne Particle Count Test</li>
                <li class="fw-normal">Compliance with ISO 14644, EU cGMP, US Federal Standard 209E, WHO, USFDA, TGA, EMEA, and MHRA guidelines</li>
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
