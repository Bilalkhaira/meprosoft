@extends('layouts.master')

@section('content')

<section class="wrapper bg-light">

    <div class="container">

        <div class="card bg-soft-primary rounded-4 mt-2 mb-13 mb-md-17">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{ asset('img/slider/4.png') }}" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true" style="width: 80%">
                                <h1 id="heading" class="display-2 mb-5" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown;animation-duration: 700ms;animation-timing-function: ease;animation-delay: 600ms;animation-direction: normal;animation-fill-mode: both;font-size: 40px;text-shadow:none;">Your go-to IT services for better efficiency, higher growth and seamless accessibility.</h1>
                                <!-- <p class="lead fs-lg lh-sm mb-7 pe-xl-10" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.</p> -->
                                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-primary rounded-pill me-2" style="background-color: #57a8c7; border: none">Read More</a></span>
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-outline-primary rounded-pill" style="border: 1px solid #57a8c7;">Contact Us</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div class="icon btn btn-circle btn-md btn-soft-primary pe-none mx-auto me-3"> <i class="uil uil-users-alt"></i> </div>
                                        </div>
                                        <div>
                                            <h3 id="heading" class="counter mb-0 text-nowrap" style="visibility: visible;">25000+</h3>
                                            <p class="fs-14 lh-sm mb-0 text-nowrap">Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.card-body -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/slider/4.png') }}" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true" style="width: 80%">
                                <h1 id="heading" class="display-2 mb-5" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown;animation-duration: 700ms;animation-timing-function: ease;animation-delay: 600ms;animation-direction: normal;animation-fill-mode: both;font-size: 40px;text-shadow:none;">Mesprosoft for the win! Best IT services there is, for your business.</h1>
                                <!-- <p class="lead fs-lg lh-sm mb-7 pe-xl-10" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.</p> -->
                                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-primary rounded-pill me-2" style="background-color: #57a8c7; border: none">Read More</a></span>
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-outline-primary rounded-pill" style="border: 1px solid #57a8c7;">Contact Us</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div class="icon btn btn-circle btn-md btn-soft-primary pe-none mx-auto me-3"> <i class="uil uil-users-alt"></i> </div>
                                        </div>
                                        <div>
                                            <h3 id="heading" class="counter mb-0 text-nowrap" style="visibility: visible;">25000+</h3>
                                            <p class="fs-14 lh-sm mb-0 text-nowrap">Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.card-body -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/slider/4.png') }}" alt="New York" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true" style="width: 80%">
                                <h1 id="heading" class="display-2 mb-5" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown;animation-duration: 700ms;animation-timing-function: ease;animation-delay: 600ms;animation-direction: normal;animation-fill-mode: both;font-size: 40px;text-shadow:none;">IT solutions to all your problems.</h1>
                                <!-- <p class="lead fs-lg lh-sm mb-7 pe-xl-10" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.</p> -->
                                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-primary rounded-pill me-2" style="background-color: #57a8c7; border: none">Read More</a></span>
                                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-outline-primary rounded-pill" style="border: 1px solid #57a8c7;">Contact Us</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div class="icon btn btn-circle btn-md btn-soft-primary pe-none mx-auto me-3"> <i class="uil uil-users-alt"></i> </div>
                                        </div>
                                        <div>
                                            <h3 id="heading" class="counter mb-0 text-nowrap" style="visibility: visible;">25000+</h3>
                                            <p class="fs-14 lh-sm mb-0 text-nowrap">Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.card-body -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-image: inherit;">
                    <span class="glyphicon glyphicon-chevron-left" style="margin-left: -40px;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-image: inherit;">
                    <span class="glyphicon glyphicon-chevron-right" style="margin-right: -40px;"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-13 mb-md-17" style="margin-bottom: 0px !important;">
            <div class="col-lg-4">
                <h2 id="heading" class="display-4 mb-3 pe-xxl-5">100% Satisfied Customers</h2>
                <p class="lead fs-lg mb-0 pe-xxl-5">We <span class="underline">bring solutions</span> to make life
                    easier for our customers.</p>
            </div>
            <div class="col-lg-8 logo_main">
                <marquee width="100%" direction="left" height="300px" style="padding-top: 80px;">
                <img src="{{ asset('img/brands/c10.png') }}" alt="" />
                <img src="{{ asset('img/brands/c2.png') }}" alt="" />
                <img src="{{ asset('img/brands/c3.png') }}" alt="" />
                <img src="{{ asset('img/brands/c4.png') }}" alt="" />
                <img src="{{ asset('img/brands/c5.png') }}" alt="" />
                <img src="{{ asset('img/brands/c6.png') }}" alt="" />
                <img src="{{ asset('img/brands/c7.png') }}" alt="" />
                <img src="{{ asset('img/brands/c8.png') }}" alt="" />
                <img src="{{ asset('img/brands/c9.png') }}" alt="" />
                </marquee>
            </div>
            <!-- <div class="col-lg-8 logo_main">
                <div class="row row-cols-2 row-cols-md-3 gx-0 gx-md-8 gx-xl-12 gy-11 mt-n10 brand_img">
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c10.png') }}" alt="" />
                        </figure>
                    </div>

                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c2.png') }}" alt="" />
                        </figure>
                    </div>

                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c3.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c4.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c5.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c6.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c7.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c8.png') }}" alt="" />
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="px-4 px-lg-3 px-xxl-5"><img src="{{ asset('img/brands/c9.png') }}" alt="" />
                        </figure>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
            <div class="col-md-8 col-lg-6 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ asset('img/home/building_efficiency.jpg') }}" alt=""></figure>
            </div>
            <div class="col-lg-6">
                <h2 id="heading" class="display-4 mb-3">BUILDING EFFICIENCY DRIVING GROWTH</h2>
                <p class="lead fs-lg">Mesprosoft Stands for Building Efficiency in all actions in an organization, we
                    help to build Metrics, Streamline Systems and Processes. Our Products and Services Portfolio are a
                    combination in achieving this goal in any organization, regardless of its size and challenges.
                    Mesprosoft helps our customers to get the best value from their IT investments.</p>

                <div class="row gx-xl-10 gy-6">

                    <div class="col-md-12">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/award-2.svg') }}" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                            </div>
                            <div>
                                <h4 id="heading" class="mb-1">Our Values</h4>
                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-20 align-items-center">
            <div class="col-md-8 col-lg-6 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ asset('img/home/services.jpg') }}" alt=""></figure>
            </div>

            <div class="col-lg-6">
                <h2 id="heading" class="display-4 mb-3">Our Services</h2>
                <div class="row gx-xl-10 gy-6">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Enterprise Solution Consulting</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Application Migration & Conversion</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">SAP Support</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">GST Migration</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-20 align-items-center">
            <div class="col-md-8 col-lg-6 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ asset('img/home/product_solution.jpg') }}" alt=""></figure>
            </div>

            <div class="col-lg-6">
                <h2 id="heading" class="display-4 mb-3">Our Products and Solutions</h2>
                <div class="row gx-xl-10 gy-6">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Mespro Paperless Manufacturing</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Mespro GPS-Preconfigured Analytics</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Mespro X-steps</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('img/icons/lineal/bar-chart.svg') }}" class="svg-inject icon-svg icon-svg-sm text-primary me-5" alt="" />
                            </div>
                            <div>
                                <a href="#">
                                    <h4 id="heading" class="mb-1">Mespro Optimized MRP</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="card bg-soft-primary rounded-4 mt-2 mb-13 mb-md-17">

            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{ asset('img/slider/1.png') }}" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-7 offset-lg-5 col-xl-6" style="text-shadow: none;">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-0" style="padding: 0;">
                                    <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh ut fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                        <div class="info p-0">
                                            <h5 class="mb-1" id="heading">Coriss Ambady</h5>
                                            <div class="meta mb-0">Financial Analyst</div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <img src="{{ asset('img/slider/1.png') }}" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-7 offset-lg-5 col-xl-6" style="text-shadow: none;">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-0" style="padding: 0;">
                                    <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh ut fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                        <div class="info p-0">
                                            <h5 class="mb-1" id="heading">Coriss Ambady</h5>
                                            <div class="meta mb-0">Financial Analyst</div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <img src="{{ asset('img/slider/1.png') }}" alt="New York" style="width:100%;">
                        <div class="carousel-caption" style="top: 22%; left: 8%">
                            <div class="col-lg-7 offset-lg-5 col-xl-6" style="text-shadow: none;">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-0" style="padding: 0;">
                                    <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh ut fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                        <div class="info p-0">
                                            <h5 class="mb-1" id="heading">Coriss Ambady</h5>
                                            <div class="meta mb-0">Financial Analyst</div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev" style="background-image: inherit;">
                    <span class="glyphicon glyphicon-chevron-left" style="margin-left: -40px;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next" style="background-image: inherit;">
                    <span class="glyphicon glyphicon-chevron-right" style="margin-right: -40px;"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
            <div class="col-md-8 col-lg-6 position-relative">
                <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                <figure class="rounded"><img src="{{ asset('img/photos/about12.jpg') }}" srcset="{{ asset('img/photos/about12@2x.jpg 2x') }}" alt=""></figure>
            </div>

            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h3 id="heading" class="display-4 mb-3">Mesprosoft Brings Awesomeness</h3>
                <p class="lead fs-lg mb-6">We have considered our solutions to <span class="underline">support every
                        stage</span> of your growth.</p>
                <ul class="progress-list">
                    <li>
                        <p>Saas Solutions</p>
                        <div class="progressbar line primary" data-value="100"></div>
                    </li>
                    <li>
                        <p>Strategy</p>
                        <div class="progressbar line primary" data-value="80"></div>
                    </li>
                    <li>
                        <p>Development</p>
                        <div class="progressbar line primary" data-value="85"></div>
                    </li>
                    <li>
                </ul>
            </div>

        </div>

        <div class="card bg-soft-primary rounded-4">
            <div class="card-body p-md-10 p-xl-11">
                <div class="row gx-lg-8 gx-xl-12 gy-10">
                    <div class="col-lg-6">
                        <h3 id="heading" class="display-4 mb-4">Frequently Asked Questions</h3>
                        <p class="lead fs-lg mb-0">If you don't see an answer to your question, you can send us an email
                            from our contact form.</p>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I get my subscription
                                        receipt?</button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Are there any discounts for
                                        people in need?</button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you offer a free trial
                                        edit?</button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I reset my Account
                                        password?</button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.</p>
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

@endsection