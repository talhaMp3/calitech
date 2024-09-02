<x-frontend-layout>
              @section('title', env('APP_NAME') .' || Contact Us')
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Contact Info Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{asset('assets/img/theme-img/title_icon.svg')}}" alt="Icon">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Our Address</h5>
                            <p class="box-text">GIDC Char Rasta, Vapi-396195,State Gujarat,India.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Phone Number</h5>
                            <p class="box-text">
                                <a href="tel:+91 26024 23309">+91 26024 23309</a>
                                <a href="tel:+91 97252 05406">+91 97252 054 /06/12</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Email Address</h5>
                            <p class="box-text">
                                <a href="mailto:contact@calitech.in">contact@calitech.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4  mt-1">
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Our Address</h5>
                            <p class="box-text">304-UAE Enterprise Building, Al Garhoud, Dubai, UAE</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Phone Number</h5>
                            <p class="box-text">
                                <a href="tel:+971 507 416 193">+971 507 416 193</a>
                                <a href="tel:+971 501 258 141">+971 501 258 141</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Email Address</h5>
                            <p class="box-text">
                                <a href="mailto:contact@calitech.in">contact@calitech.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            
            
        
    </div> <!--==============================
Contact Area   
==============================-->
    <div class="space" data-bg-src="{{asset('assets/img/bg/contact_bg_6.jpg')}}">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 text-center text-xl-start">
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <h2 class="sec-title">Get a Quote</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Select Subject</option>
                                    <option value="General Query">General Query</option>
                                    <option value="Help Support">Help Support</option>
                                    <option value="Sales Support">Sales Support</option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Submit Request<i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>


</x-frontend-layout>