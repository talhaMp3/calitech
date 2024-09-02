<x-frontend-layout>
              @section('title', env('APP_NAME') .' || Our Services')
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Home</a></li>
                    <li>Service Details</li>
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
                            <h2 class="h3 sec-title page-title">{{$categoriesCollection[0]->title}}</h2>
                            <p class="">Assembling furniture may be challenging. If you find it difficult to understand lengthy instruction manuals and bolts and nuts, then schedule the furniture assembly service right away! You may let us handle the assembly of your IKEA furniture when you use our furniture assembly service. We'll quickly arrange your furnishings! Our skilled experts will make sure you don't have to endure the exhausting task of arranging your furniture by yourself. Convenience is the main focus of our services.</p>
                            <p class="mb-30">You may visit our website to see other handyman services that we offer. If you have ever assembled furniture yourself, then you know that the experience is not very different from put together a jigsaw puzzle.</p>

                            <h4 class="mt-40 mb-4">From our gallery</h4>
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

                            <h4 class="mt-40 mb-4">Service Feature Highlights</h4>
                            <div class="checklist">
                                <ul>
                                    <li class="fw-normal">Visit most popular location of Maldives</li>
                                    <li class="fw-normal">Buffet Breakfast for all traveler with good quality.</li>
                                    <li class="fw-normal">Expert guide always guide you and give informations.</li>
                                    <li class="fw-normal">Best Hotel for all also great food.</li>
                                    <li class="fw-normal">Helping all traveler for Money Exchange.</li>
                                    <li class="fw-normal">Buffet Breakfast for all traveler with good quality.</li>
                                    <li class="fw-normal">Buffet Breakfast for all traveler with good quality.</li>
                                </ul>
                            </div>

                            <h4 class="mt-40 mb-4">Some FAQ About This Service</h4>
                            <div class="accordion mt-40" id="faqAccordion">


                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Q1. How do I start the process of renovation a home?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Q2. What factors should I consider when choosing a neighborhood?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Q3. How can I determine the right price for selling my property?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Q4. What are closing costs and who is responsible for paying them?</button>
                                    </div>
                                    <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Q5. How can I negotiate the best price when buying a property?</button>
                                    </div>
                                    <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

@foreach($categoriesCollection as $category)
    <h1>{{ $category->title }} </h1>
    @foreach($category->products as $product)
        <h2>{{ $product->title }}</h2>
        <p>{{ $product->description }}</p>
        <h1>{{$product->item['title']}}</h1>
        <ul>
            @foreach($product->item['lists'] as $list)
                @foreach($list as $listItem)
                    <li>{{ $listItem }}</li>
                @endforeach
            @endforeach
        </ul>
    @endforeach
@endforeach






</x-frontend-layout>