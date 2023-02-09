@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/case_study/1.jpg') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                <h1 class="display-1 text-white mb-3">Mespro Paperless Manufacturing</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">The digital revolution is transitioning in almost every advancing field, and
                    manufacturing sites are also untouched by this.</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <div class="col-lg-12">
                <h3 class="display-4 mb-5">Mespro Paperless Manufacturing</h3>
                <p>The manufacturing industry is growing smarter than ever. In new-age businesses, data has become the
                    most valuable asset to any business.</p>
                <p>However, data might be unchanged, but the data-keeping activities are definitely riding an evolution.
                    We are justifying the end of the paper system.</p>
                <p>Manufacturers are transitioning from paper to Automation and are contributing to paper-less office
                    culture in the respective country.</p>
                <p>Paperless offices refer to a complete replacement of written reports and physical document storage
                    with software. </p>
                <p>Understanding this new culture became even easier with SAP and Enterprise Resource Planning
                    (ERP) Software and other powerful solutions provided by Mesprosoft.</p>
                <p>Mesprosoft has been helping manufacturers in the automotive sector escape from paper culture by
                    implementing optimized MRP, bringing Automation into the Dispatch chain, assisting them in
                    dynamic scheduling, and infusing innovation in everything which was supposed to be a paper activity.</p>
                <p>Earlier, our clients from the automotive sector were used to keeping records of their large-scale
                    manufacturing enterprises on paper, which was time-consuming and costly. But things have changed
                    now. </p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-soft-primary">
    <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Benefits driven by Mespro Paperless Manufacturing</h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <!-- <h4 class="mb-1">1. Concept</h4> -->
                        <p>Mespro paperless manufacturing workflow saves money.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <p>Quick exposure to data built a connected environment in the factory.</p>
                    </div>
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <p>Seamless MES integration and ERP systems are a plus point.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <p>Proper data management, standardization, and optimization of the operations.</p>
                    </div>
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <p>Quick plans with minimal workflow errors.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection