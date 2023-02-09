@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/case_study/1.jpg') }}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                <h1 class="display-1 text-white mb-3">Food Industry</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Technology has dominated the entire food industry in recent years. So do major structural and
                    operational changes happening on the ground with Mesprosoft.</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <div class="col-lg-12">
                <h3 class="display-4 mb-5">Food Industry</h3>
                <p>Technology has dominated the entire food industry in recent years. So do major structural and
                    operational changes happening on the ground with Mesprosoft.</p>
                <p>It is easier for companies now to be a new-age supplier of food products and adapt fastest to the new-
                    age customer expectations.</p>
                <p>Mesprosoft made it possible with the implementation of SAP S/4HANA Solutions for companies,
                    providing them with a complete solution for supply chain automation and process manufacturing
                    management. Our solutions bring enhanced transparency to the most important elements of the Food
                    industry.</p>
                <p>To better summarize the popular industrial utilization of Mesprosoft SAP S/4HANA Solutions where
                    we are popular, these are manufacturing and marketing chains of natural colors, flavors, and savory
                    blends to food and beverage industries worldwide. </p>
                <p>As a result, companies are now building an elevated working ecosystem on the production site,
                    extracting predictable outcomes with detailed planning and an enhanced supply chain.</p>

            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-soft-primary">
    <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Delivered Features to Customers</h3>
                <p>Let’s walk through the list of features delivered to the customers with SAP S/4HANA.</p>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <p>System-Driven Data Forecasting.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <p>Superior Planning for The Operation.</p>
                    </div>
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                        <p>Barcode-Enabled Supply Chain and Operations Handling.</p>
                    </div>
                    <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                        <p>Automation In the Purchasing Cycle.</p>
                    </div>
                    <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <p>Enhanced Transparency in Profits, Products, And Divisions.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection