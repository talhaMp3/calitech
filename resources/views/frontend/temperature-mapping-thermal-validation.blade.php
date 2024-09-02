<x-frontend-layout>
      @section('title', env('APP_NAME') .' || Temperature Mapping & Thermal Validation')
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
                        <li>Temperature Mapping & Thermal Validation</li>
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
                                <h2 class="h3 sec-title page-title">Temperature Mapping & Thermal Validation</h2>
                                <p class="">At CALITECH, we specialize in comprehensive Temperature and Relative
                                    Humidity Mapping services, performed under our NABL accreditation. Our detailed reports
                                    provide critical insights into the thermal environment, featuring diagrams that
                                    illustrate sensor locations and capturing both minimum and maximum temperatures across
                                    various points. The graphical representation of temperature versus time, along with
                                    analyses of hot and cold spots, standard deviation, and Mean Kinetic Temperature (MKT),
                                    ensures a thorough understanding of temperature variations and their impact on your
                                    storage conditions.</p>

                                <p class="mb-30">For warehouse and cold room environments, we conduct rigorous temperature
                                    and humidity assessments. This includes validating the effectiveness of storage
                                    conditions and ensuring compliance with industry standards. Our meticulous approach
                                    guarantees that your storage areas meet the required specifications, maintaining optimal
                                    conditions for sensitive materials.</p>

                                <p>In addition to temperature mapping, CALITECH offers advanced equipment validation
                                    services in line with the latest 21 CFR Part 11 requirements. We use state-of-the-art
                                    data loggers and software for FO value calculations, adhering to EN 285/HTM 2010
                                    guidelines. Our validation processes encompass a range of equipment, including
                                    autoclaves, dry heat sterilizers, ETO sterilizers, and more. Our reports provide
                                    detailed analysis of empty chamber performance, heat distribution, and penetration
                                    studies, complete with graphical representations and time-lag assessments to ensure
                                    precise and reliable validation.</p>
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
                                        <h4 class="mt-40 mb-4">Temperature Mapping</h4>
                                        <div class="checklist">
                                            <ul>
                                                <li class="fw-normal">Temperature & Relative Humidity Mapping under NABL
                                                    Scope</li>
                                                <li class="fw-normal">Report includes diagrams indicating sensor locations
                                                </li>
                                                <li class="fw-normal">Minimum & Maximum Temperature recorded at all
                                                    locations</li>
                                                <li class="fw-normal">Graphical Representation of Temperature vs. Time</li>
                                                <li class="fw-normal">Analysis of Hot & Cold Spots</li>
                                                <li class="fw-normal">Calculation of Standard Deviation and Mean Kinetic
                                                    Temperature (MKT)</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="mt-40 mb-4">Thermal Validation</h4>
                                        <div class="checklist">
                                            <ul>
                                                <li class="fw-normal">Validation with Latest 21 CFR Part 11 Complying Data
                                                    Logger</li>
                                                <li class="fw-normal">Validation performed as per EN 285/HTM 2010 Guidelines
                                                </li>
                                                <li class="fw-normal">Reports include Empty Chamber and Heat Distribution
                                                    studies</li>
                                                <li class="fw-normal">Assessment of Penetration Study with and without Load
                                                </li>
                                                <li class="fw-normal">Reporting formats include FO, Fd, Fh, Minimum &
                                                    Maximum Temperature</li>
                                                <li class="fw-normal">Graphical Representation of Temperature vs. Time</li>
                                                <li class="fw-normal">Analysis of Hot & Cold Spots and Lag Time</li>
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
