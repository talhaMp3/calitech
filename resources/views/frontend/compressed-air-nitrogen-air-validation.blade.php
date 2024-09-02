<x-frontend-layout>
     @section('title', env('APP_NAME') .' || Compressed Air Validation & Nitrogen Air Validation')
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
                        <li>Compressed Air Validation & Nitrogen Air Validation</li>
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
                                <h2 class="h3 sec-title page-title">Compressed Air Validation & Nitrogen Air Validation</h2>
                                <p class="">Compressed Air Validation is a crucial process for ensuring that
                                    compressed air used in production areas meets the highest standards of purity and
                                    quality. At CALITECH, we employ state-of-the-art equipment to conduct comprehensive
                                    tests in accordance with ISO 8573 guidelines. This validation ensures that the
                                    compressed air is free from contaminants and meets all necessary specifications for safe
                                    and efficient use in various applications.</p>

                                <p class="mb-30">The validation process includes several critical tests such as Non-Viable
                                    Particle Count, Oil Content, Moisture Content, and Carbon Monoxide levels. These tests
                                    are essential for determining the cleanliness and suitability of compressed air for
                                    production environments. Our advanced equipment enables us to accurately measure and
                                    control these parameters, ensuring that the air quality complies with industry standards
                                    and regulatory requirements.</p>

                                <p>For Nitrogen Air Validation, we perform tests to measure Dew Point Temperature, Nitrogen
                                    Oxide, and Carbon Dioxide levels. This validation process ensures that nitrogen used in
                                    industrial processes is of the highest quality and purity. By assessing these
                                    parameters, we confirm that the nitrogen air meets the required specifications for
                                    various applications, thereby enhancing the reliability and safety of your production
                                    processes.</p>

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
                                                <a href="{{ asset('assets/img/service/service_inner_4.jpg') }}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100" src="{{ asset('assets/img/service/service_inner_4.jpg') }}" alt="service">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 filter-item">
                                            <div class="service-gallery">
                                                <a href="{{ asset('assets/img/service/service_inner_5.jpg') }}" class="popup-image box-btn"><i class="fa-light fa-magnifying-glass-plus"></i></a>
                                                <img class="rounded-10 w-100" src="{{ asset('assets/img/service/service_inner_5.jpg') }}"alt="service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="mt-40 mb-4">Compressed Air Validation</h4>
                                        <div class="checklist">
                                            <ul>
                                                <li class="fw-normal">Non-Viable Particle Count Test</li>
                                                <li class="fw-normal">Oil Content</li>
                                                <li class="fw-normal">Moisture Content</li>
                                                <li class="fw-normal">Carbon Monoxide</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="mt-40 mb-4">Nitrogen Air Validation</h4>
                                        <div class="checklist">
                                            <ul>
                                                <li class="fw-normal">Dew Point Temperature</li>
                                                <li class="fw-normal">Nitrogen Oxide</li>
                                                <li class="fw-normal">Carbon Dioxide</li>
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
