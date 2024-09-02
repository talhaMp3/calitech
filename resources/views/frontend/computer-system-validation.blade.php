<x-frontend-layout>
                      @section('title', env('APP_NAME') .' || Computer System Validation (CSV)')
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
                        <li>Computer System Validation (CSV)</li>
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
                                <h2 class="h3 sec-title page-title">Computer System Validation (CSV)</h2>
                                <p class="">Computer System Validation (CSV) is essential for ensuring that all computer systems and software impacting product quality are properly validated and comply with regulatory requirements. Whether dealing with large-scale process controls or simple embedded code in regulated devices, pharmaceutical and medical device manufacturers must validate their GxP-critical systems to ensure their reliability and accuracy. This validation process includes evaluating the risks associated with computer systems and ensuring they meet stringent guidelines for product quality and safety.</p>

                                <p class="mb-30">The scope of our Computer System Validation services encompasses a wide range of systems including PLC-based control systems with HMI/MMI user interfaces, camera systems, SCADA systems, micro-controller-based control systems, and the operating software for SCADA systems. We also provide equipment validation services for devices such as incubators and stability chambers. Our services are designed to meet the highest standards of quality and compliance, ensuring that all systems function correctly and reliably in regulated environments.</p>

                                <p>Our Computer System Validation services deliver a comprehensive set of documentation and reports, including Qualification Documentation (GxP, RA, GAP, CSV, IQ, OQ, PQ, VSR), Re-Qualification Documentation (RA, Requalification Protocol, IQ, OQ, PQ), and Re-Validation Documentation (Performance Verification Protocol, IQ, OQ). The workflow involves developing a Master Validation Plan, listing PLC/SCADA/control systems, collecting raw data, conducting GxP, risk, and gap assessments, and generating and executing protocols. We ensure all reports are compiled, acceptance criteria are met, and any deficiencies are addressed through corrective and preventive actions, culminating in a final submission of all reports.</p>
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
        <h4 class="mt-40 mb-4">Scope of Work</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">PLC-based Control Systems</li>
                <li class="fw-normal">PLC-based Control Systems with HMI/MMI User Interface</li>
                <li class="fw-normal">PLC-based Control Systems with SCADA</li>
                <li class="fw-normal">Micro-Controller Based Control Systems</li>
                <li class="fw-normal">Operating Software for SCADA</li>
                <li class="fw-normal">Equipment Validation (e.g., Incubators, Stability Chambers)</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6">
        <h4 class="mt-40 mb-4">CSV Services Deliverables</h4>
        <div class="checklist">
            <ul>
                <li class="fw-normal">Qualification Documentation: GxP, RA, GAP, CSV, IQ, OQ, PQ (if required), VSR, Test Cases (if required)</li>
                <li class="fw-normal">Re-Qualification Documentation: RA, Requalification Protocol (including IQ, OQ, PQ), Test Cases (if required)</li>
                <li class="fw-normal">Re-Validation Documentation: Performance Verification Protocol (including IQ, OQ), Test Cases (if required)</li>
                <li class="fw-normal">Master Validation Plan</li>
                <li class="fw-normal">List of PLC/SCADA/Control Systems</li>
                <li class="fw-normal">Collection of Raw Data and Reference Documents</li>
                <li class="fw-normal">GxP Assessment</li>
                <li class="fw-normal">Risk Assessment</li>
                <li class="fw-normal">Gap Assessment</li>
                <li class="fw-normal">Generation and Execution of Protocols/Reports (IQ, OQ, PQ)</li>
                <li class="fw-normal">Acceptance Criteria and Deficiency Report</li>
                <li class="fw-normal">Change Control</li>
                <li class="fw-normal">Corrective and Preventive Actions</li>
                <li class="fw-normal">Final Submission of All Reports</li>
                <li class="fw-normal">Validation Summary Report</li>
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
