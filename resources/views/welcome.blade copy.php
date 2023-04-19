<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mesprosoft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

</head>

<body>
    <div class="nav_main">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item first_li">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/newHome/logo.png') }}" alt="" width="70%" height="70%"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_nv nv_mrgin" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nv_mrgin" href="#">OUR SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nv_mrgin" href="#">OUR PRODUCT</a>
            </li>

            <li class="nav-item">
                <a class="nav-link nv_mrgin" href="#">NEWS & EVENTS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link nv_mrgin" href="#">CONTACT US</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid bg_img" style="background-image: url({{ asset('img/newHome/slider2.png') }});">
        <div class="row">
            <div class="col-md-6 slider_sec">
                <h1>Mespro Paperless <br> Manufacturing</h1>
                <p>In this example the navigation bar is In this example the navigation bar is In this example the
                    navigation bar is In this example the navigation bar is In this example the navigation bar is In
                    this example the navigation bar is </p>
                <button class="btn btn-primary"> Read More</button>
            </div>
            <div class="col-md-6"></div>
        </div>

    </div>

    <div class="container-fluid sec_padding">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>OUT SERVICES</h1>
            </div>
        </div>

        <div class="row srvc_brder_rw">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3 circle_col">
                        <span class="circle"></span>
                    </div>
                    <div class="col-md-9">
                        <h5>Business Consulting</h5>
                        <p>In this example the navigation bar is In this example the navigation bar is In this example</p>
                        <a href="{{ route('services.businessConsulting') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3 circle_col">
                        <span class="circle"></span>
                    </div>
                    <div class="col-md-9">
                        <h5>Digital Transformation With Cloud</h5>
                        <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences.</p>
                        <a href="{{ route('services.digitalTransformationWithCloud') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3 circle_col">
                        <span class="circle"></span>
                    </div>
                    <div class="col-md-9">
                        <h5>S/4 Hana Conversion</h5>
                        <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP systems to the powerful</p>
                        <a href="{{ route('services.hanaConversion') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-3 circle_col">
                        <span class="circle"></span>
                    </div>
                    <div class="col-md-9">
                        <h5>Application Support</h5>
                        <p>In this example the navigation bar is In this example the navigation bar is In this example</p>
                        <a href="{{ route('services.applicationSupport') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid about_sec">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/newHome/about.jpg') }}" alt="">
                <div class="about_gray_dv">

                </div>
                <div class="about_yellow_dv">
                    <h2>ABOUT MESPROSOFT</h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center">
                <p>We aim to improve the Business processes of our customers by building good metrics and processes using the world’s best software. All our products & Services current and future are lined up for this goal. Mesprosoft wants to extend its image beyond its customers as “the most trusted IT services Company”, which can deliver what it promise and add value to the customer.</p>
                <a href="{{ route('home.about') }}" class="btn btn-primary">Read More</a>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>

    <img src="{{ asset('img/newHome/img.png') }}" width="100%" alt="">

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="ftr_above_sec">
                    <h5>BTP</h5>
                    <p>Mesprosoft understand that adding value to your business is crucial to its success...</p>
                    <a href="{{ route('productAndSolution.BTP') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftr_above_sec">
                    <h5>Mespro Optimized MRP</h5>
                    <p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning...</p>
                    <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftr_above_sec">
                    <h5>IOT</h5>
                    <p>Mesprosoft is at the forefront of Industry 4.0 capabilities and IoT solutions that drive ....</p>
                    <a href="{{ route('productAndSolution.IOT') }}" type="button" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>

    </div>
    <div class="ftr_abv_dv"></div>

    <div class="container-fluid sec_padding footer">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#"><img src="{{ asset('img/newHome/logo2.png') }}" alt="" width="70%"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 social_img">
                        <a href="https://www.facebook.com/profile.php?id=100064046084575"><img src="{{ asset('img/newHome/fb.png') }}" width="40px" alt=""></a>
                        <a href="https://twitter.com/Mesprosoft"><img src="{{ asset('img/newHome/t.png') }}" width="40px" alt=""></a>
                        <a href="https://www.linkedin.com/company/mesprosoft?trk=hb_tab_compy_id_2543913"><img src="{{ asset('img/newHome/in.png') }}" width="40px" alt=""></a>
                    </div>

                </div>


            </div>
            <div class="col-md-3 nv_col">
                <h5>Get in Touch</h5>
                <address>
                    Mesprosoft Pvt. Ltd.<br>
                    #55,Whitefield Main Road,<br>
                    Mahadevpura Post<br>
                    Bangalore 560048, India</address>
                <a href="mailto:#">info@mesprosoft.com</a>
            </div>
            <div class="col-md-3 nv_col">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{ route('home.about') }}">Home</a></li>
                    <li><a href="{{ route('services.businessConsulting') }}">Our Services</a></li>
                    <li><a href="{{ route('productAndSolution.dispatchAutomation') }}">Products & Solutions</a></li>
                    <li><a href="{{ route('caseStudy.foodIndustry') }}">Case Study</a></li>
                    <li><a href="{{ route('eventAndNews.index') }}">News & Events</a></li>
                    <li><a href="{{ route('careers.index') }}">Careers</a></li>
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 nv_col">
                <h5>CONTACT US</h5> 
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                    <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" readonly id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary " disabled>
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
            </div>
        </div>



    </div>
</body>

</html>