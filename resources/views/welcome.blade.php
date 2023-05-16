@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection
@section('content')
<div class="container-fluid bg_img" style="background-image: url({{ asset('img/newHome/slider2.png') }});">
    <div class="row">
        <div class="col-md-6 slider_sec">
            <h1>Mespro Paperless <br> Manufacturing</h1>
            <p>In this example the navigation bar is In this example the navigation bar is In this example the
                navigation bar is In this example the navigation bar is In this example the navigation bar is In
                this example the navigation bar is </p>
            <button class="btn btn-primary read_btn"> Read More</button>
        </div>
        <div class="col-md-6"></div>
    </div>

</div>
<div class="container-fluid sec_padding">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>OUR SERVICES</h1>
        </div>
    </div>

    <div class="row srvc_brder_rw">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <h5>Business Consulting</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <h5>Digital Transformation With Cloud</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <h5>S/4 Hana Conversion</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <h5>Application Support</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3 circle_col">
                    <span class="circle"></span>
                </div>
                <div class="col-md-9">
                    <p>In this example the navigation bar is In this example the navigation bar is In this example</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3 circle_col">
                    <span class="circle"></span>
                </div>
                <div class="col-md-9">
                    <p>Mesprosoft understand that digital transformation is the key to improving business operations and enhancing customer experiences.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3 circle_col">
                    <span class="circle"></span>
                </div>
                <div class="col-md-9">
                    <p>Mesprosoft has extensive expertise in S/4HANA conversion, helping businesses to migrate from their existing SAP systems to the powerful</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3 circle_col">
                    <span class="circle"></span>
                </div>
                <div class="col-md-9">
                    <p>In this example the navigation bar is In this example the navigation bar is In this example</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <a href="{{ route('services.businessConsulting') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <a href="{{ route('services.digitalTransformationWithCloud') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <a href="{{ route('services.hanaConversion') }}" class="btn btn-outline-secondary readMore_btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
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
    <h1 class="product_heading">PRODUCTS & SOLUTIONS</h1>
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


@endsection