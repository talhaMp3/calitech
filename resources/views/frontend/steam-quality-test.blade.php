<x-frontend-layout>
      @section('title', env('APP_NAME') .' || steam quality testing')
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
                        <li>steam quality testing</li>
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
                                <h2 class="h3 sec-title page-title">steam quality testing</h2>
                                <p class="">CALITECH offers comprehensive steam quality testing services using
                                    state-of-the-art equipment. Our testing is designed to ensure the purity and
                                    effectiveness of steam used in critical applications such as autoclaves, sterilizers,
                                    manufacturing tanks, SIP systems, lyophilizers, and PSG systems. By utilizing the latest
                                    technology, we provide precise and reliable assessments to meet industry standards and
                                    regulatory requirements.</p>

                                <p class="mb-30">Periodic steam quality testing is a regulatory requirement to ensure
                                    compliance and operational safety. CALITECH is committed to upholding these standards by
                                    conducting thorough evaluations of steam quality. Our testing services align with EN 285
                                    and HTM 2010 guidelines, ensuring that your equipment operates efficiently and meets all
                                    necessary sterilization and safety criteria.</p>

                                <p>Our steam quality tests include essential assessments such as dryness value, superheat
                                    value, and condensable gases. These tests are critical in determining the performance of
                                    steam systems and ensuring their proper functioning. By providing detailed reports and
                                    insights, CALITECH helps maintain the highest standards of quality and reliability in
                                    your steam-based operations.</p>
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
                                        <h4 class="mt-40 mb-4">Steam Quality Tests</h4>
                                        <div class="checklist">
                                            <ul>
                                                <li class="fw-normal">Dryness Value Test</li>
                                                <li class="fw-normal">Superheat Value Test</li>
                                                <li class="fw-normal">Condensable Gases Test</li>
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
