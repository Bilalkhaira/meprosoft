@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/case_study/1.jpg') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                <h1 class="display-1 text-white mb-3">Digital Manufacturing</h1>
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
                <h3 class="display-4 mb-5">Digital Manufacturing</h3>
                <p>The digital revolution is transitioning in almost every advancing field, and
                    manufacturing sites are also untouched by this. The fusion has resulted in the
                    birth of a new term Digital Manufacturing.</p>
                <p>Mesprosoft is a pioneer in this segment, encouraging technological inclusions in
                    the manufacturing industry. Our solutions enable discrete Manufacturing for
                    Make to Order and Make to Stock products.</p>
                <p>Manufacturers will be creating a virtual counterpart of the products first to
                    forecast quality precision and real-world usage before they are used.</p>
                <p>In the current scenario, a high level of complex manufacturing is being
                    deployed by manufacturers. Most workplaces are disorganized, contributing to
                    the wastage of material, resources, and precious time.</p>
                <p>There's poor visibility into operations and no stricter way to analyze the protocol
                    adherence to quality standards. But after implementing Mesprosoft modules
                    such as FI/CO, MM, PP, QM, PP, PS BOBJ, and FIORI, the whole ecosystem is
                    streamlined and upgraded for manufacturers.</p>
                <p>Optimized MRP is now enabling a disciplined execution of plans for predictable
                    results. Since manual interaction is replaced with system-driven Responses,
                    enhanced transparency can be observed in the whole ecosystem.</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-soft-primary">
    <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Breaking Down Complete List of Benefits of Digital Manufacturing</h3>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <!-- <h4 class="mb-1">1. Concept</h4> -->
                        <p>Improved adherence to quality and supply protocols.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <p>Complete inventory tracking, including subcontractors.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <p>Enhanced transparency in the billing & collection.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <p>Order execution as envisioned during planning.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection