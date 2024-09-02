<x-frontend-layout>
 @section('title', env('APP_NAME') .' || Career')
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Home</a></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{asset('assets/img/theme-img/title_icon.svg')}}" alt="Icon">Grow your career
                    with us</span>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="why-feature-left">
                        <div class="why-feature">
                            <div class="box-number"><a href="{{ route('user.applyNow') }}"><img width="50"
                                        height="50" src="https://img.icons8.com/ios/50/FFFFFF/arrow--v1.png"
                                        alt="arrow--v1" /></a>
                            </div>

                            <h3 class="box-title">Front End Developer</h3>
                            <ul class="d-md-flex flex-wrap text-capitalize gap-5 mt-4 ff-open-sans list-unstyled">
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/fluency-systems-filled/50/101840/marker.png"
                                        alt="marker" /> Los Angeles
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/50/101840/coins.png"
                                        alt="coins" /> 2500-3500/pm
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/ios-filled/50/101840/clock--v3.png"
                                        alt="clock--v3" /> Full Time
                                </li>
                            </ul>

                        </div>
                        <div class="why-feature">
                            <div class="box-number"><a href="{{ route('user.applyNow') }}"><img width="50"
                                        height="50" src="https://img.icons8.com/ios/50/FFFFFF/arrow--v1.png"
                                        alt="arrow--v1" /></a>
                            </div>

                            <h3 class="box-title">Ui/Ux Developer</h3>
                            <ul class="d-md-flex flex-wrap text-capitalize gap-5 mt-4 ff-open-sans list-unstyled">
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/fluency-systems-filled/50/101840/marker.png"
                                        alt="marker" /> New York
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/50/101840/coins.png"
                                        alt="coins" /> 3000-4000/pm
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/ios-filled/50/101840/clock--v3.png"
                                        alt="clock--v3" /> Part Time
                                </li>
                            </ul>

                        </div>
                        <div class="why-feature">
                            <div class="box-number"><a href="{{ route('user.applyNow') }}"><img width="50"
                                        height="50" src="https://img.icons8.com/ios/50/FFFFFF/arrow--v1.png"
                                        alt="arrow--v1" /></a>
                            </div>

                            <h3 class="box-title">Graphic Designer</h3>

                            <ul class="d-md-flex flex-wrap text-capitalize gap-5 mt-4 ff-open-sans list-unstyled">
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/fluency-systems-filled/50/101840/marker.png"
                                        alt="marker" /> San Francisco
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/50/101840/coins.png"
                                        alt="coins" /> 4000-5000/pm
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/ios-filled/50/101840/clock--v3.png"
                                        alt="clock--v3" /> Contract
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="why-feature-right">
                        <div class="why-feature">
                            <div class="box-number"><a href="{{ route('user.applyNow') }}"><img width="50"
                                        height="50" src="https://img.icons8.com/ios/50/FFFFFF/arrow--v1.png"
                                        alt="arrow--v1" />
                                </a>
                            </div>

                            <h3 class="box-title">Javascript Developer</h3>
                            <ul class="d-md-flex flex-wrap text-capitalize gap-5 mt-4 ff-open-sans list-unstyled">
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/fluency-systems-filled/50/101840/marker.png"
                                        alt="marker" /> Chicago
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/50/101840/coins.png"
                                        alt="coins" /> 2000-3000/pm
                                </li>
                                <li class="mr-md-4">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/ios-filled/50/101840/clock--v3.png"
                                        alt="clock--v3" /> Temporary
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
