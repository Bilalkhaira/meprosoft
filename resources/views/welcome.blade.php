@extends('layouts.master')

@section('content')
<section class="wrapper bg-gray">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
            <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
                <div class="img-mask mask-1"><img src="{{ asset('img/photos/about17.jpg') }}"
                        srcset="{{ asset('img/photos/about17@2x.jpg 2x') }}" alt="" /></div>
                <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <img src="{{ asset('img/icons/lineal/check.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" />
                            </div>
                            <div>
                                <h3 class="counter mb-0 text-nowrap">250+</h3>
                                <p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6 offset-lg-1 col-xxl-5 text-center text-lg-start" data-cues="slideInDown"
                data-group="page-title" data-delay="600">
                <h1 class="display-1 mb-5">Welcome To Mesprosoft</h1>
                <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
We offer a comprehensive suite of services covering the entire SAP lifecycle to help customers implement, optimize and
enhance value from their SAP investments.</p>
                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900">
                    <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Read More</a></span>
                </div>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container py-14 py-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10">
            <div class="col-lg-6 order-lg-2">
                <ul class="progress-list">
                    <li>
                        <p>Web Design</p>
                        <div class="progressbar line soft-violet" data-value="100"></div>
                    </li>
                    <li>
                        <p>Mobile Design</p>
                        <div class="progressbar line soft-blue" data-value="80"></div>
                    </li>
                    <li>
                        <p>Development</p>
                        <div class="progressbar line soft-leaf" data-value="85"></div>
                    </li>
                    <li>
                        <p>SEO</p>
                        <div class="progressbar line soft-pink" data-value="90"></div>
                    </li>
                </ul>
                <!-- /.progress-list -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-3">BUILDING EFFICIENCY DRIVING GROWTH</h2>
                <p class="lead fs-20 mb-5">Mesprosoft Stands for Building Efficiency in all actions in an organization, we help to build Metrics, Streamline Systems and Processes. Our Products and Services Portfolio are a combination in achieving this goal in any organization, regardless of its size and challenges. Mesprosoft helps our customers to get the best value from their IT investments.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-6 text-center">
            <div class="col-md-6 col-lg-3">
                <img src="{{ asset('img/icons/lineal/browser.svg') }}"
                    class="svg-inject icon-svg icon-svg-md text-violet mb-3" alt="" />
                <h4>Enterprise Solution Consulting</h4>
                <p class="mb-2">Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical…</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="{{ asset('img/icons/lineal/smartphone.svg') }}"
                    class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                <h4>Application Migration & Conversion</h4>
                <p class="mb-2">Our SAP Upgrade services enable clients to extract full value from higher versions of SAP ERP. Our robust upgrade roadmap paves the way for broader transformational changes, which in turn deliver…</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="{{ asset('img/icons/lineal/settings-3.svg') }}"
                    class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                <h4>SAP Support</h4>
                <p class="mb-2">In our role as a SAP support provider, Mesprosoft provides a high quality, consistent and high value support service. Mesprosoft’s SAP support covers the full spectrum of SAP functions, adjusts for peaks and troughs in demand…</p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <img src="{{ asset('img/icons/lineal/search-2.svg') }}"
                    class="svg-inject icon-svg icon-svg-md text-pink mb-3" alt="" />
                <h4>GST Migration</h4>
                <p class="mb-2">Not only in India but also in Middle East, respective governments have introduced GST as the new Taxation Law. Mesprosoft have migrated all our customers successfully with GST within the …</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container py-14 pt-md-18 pb-md-16">
        <div class="row align-items-center mb-10">
            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                <h2 class="display-4 mb-3">Latest Projects</h2>
                <p class="lead fs-20 mb-0">Check out some of my latest projects with creative ideas.</p>
            </div>
            <!--/column -->
            <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                <a href="#" class="btn btn-outline-primary rounded-pill mb-0">See All Projects</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="card bg-soft-violet mb-10">
            <div class="card-body p-12 pb-0">
                <div class="row">
                    <div class="col-lg-4 pb-12 align-self-center">
                        <!-- <div class="post-category mb-3 text-violet">Web Design</div> -->
                        <h3 class="h1 post-title mb-3">Mespro Paperless Manufacturing</h3>
                        <p>Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…</p>
                        <a href="#" class="more hover link-violet">See Project</a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7 offset-lg-1 align-self-end">
                        <figure><img class="img-fluid" src="{{ asset('img/photos/f1.png') }}"
                                srcset="{{ asset('img/photos/f1@2x.png 2x') }}" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card bg-soft-blue mb-10">
            <div class="card-body p-12">
                <div class="row gy-10 align-items-center">
                    <div class="col-lg-4 order-lg-2 offset-lg-1">
                        <!-- <div class="post-category mb-3 text-blue">Mobile Design</div> -->
                        <h3 class="h1 post-title mb-3">Mespro GPS-Preconfigured Analytics</h3>
                        <p>The irony of the current times is that the Organizations have tons of data about themselves but unable to use them intelligently for their best results. Mesprosoft prebuilt templates reports and dashboards (Mespro BOBJ –GPS) allow you to quickly see thru…</p>
                        <a href="#" class="more hover link-blue">See Project</a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7">
                        <figure><img class="img-fluid" src="{{ asset('img/photos/f2.png') }}"
                                srcset="{{ asset('img/photos/f2@2x.png 2x') }}" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gx-md-8 gx-xl-10">
            
            <div class="col-lg-6">
                <div class="card bg-soft-leaf mb-10">
                    <div class="card-body p-12 pb-0">
                        <!-- <div class="post-category mb-3 text-leaf">Web Design</div> -->
                        <h3 class="h1 post-title mb-3">Mespro X-steps</h3>
                        <p>Unlike conventional production reporting, Process Manufacturing cockpit a live data capturing at the assemblies or production process ,capturing the assembly parameters, test results , details of Serial numbers and bath details in a single cockpit which later generates itself a history card…</p>
                        <a href="#" class="more hover link-leaf mb-8">See Project</a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="{{ asset('img/photos/f3.png') }}"
                        srcset="{{ asset('img/photos/f3@2x.png 2x') }}" alt="" />
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="card bg-soft-pink">
                    <div class="card-body p-12 pb-0">
                        <!-- <div class="post-category mb-3 text-pink">Mobile Design</div> -->
                        <h3 class="h1 post-title mb-3">Mespro Optimized MRP</h3>
                        <p>With the traditional MRP, the planners were not able to execute the MRP at regular intervals and hence, creating a bottleneck. This is a peculiar case for the manufacturing units with a large amount of data to be processed. Mespro Optimized MRP helps…</p>
                        <a href="#" class="more hover link-pink mb-8">See Project</a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="{{ asset('img/photos/f4.png') }}"
                        srcset="{{ asset('img/photos/f4@2x.png 2x') }}" alt="" />
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection