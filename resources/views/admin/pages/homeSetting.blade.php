@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Home Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Home Setting</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <h2>Top Slider Setting</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Add New Slide</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Couting</label>
                            <div class="col-md-8 col-lg-10">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Couting</label>
                            <div class="col-md-8 col-lg-10">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Satisfied Customer Setting</h2>
        <!-- <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Add New Slide</a>
        </div> -->

        <div class="col-xl-12">


            <div class="card">

                <div class="card-body">

                    <div class="pt-3">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio.
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Photos</label>
                            <div class="col-md-8 col-lg-10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="satis_customer_imgs">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                            <img src="{{ asset('img/slider/4.png') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editStisfiedCustomersSetting') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Building Efficiency Section Setting </h2>

        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Card Icon</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editBuildingEfficiencySection') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>


            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Our Services Settings</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewService') }}" class="btn btn-primary">Add New Service</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Our Services
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editMainSection') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>

                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Service 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Service Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Service Icon Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewService') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Service 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Service Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Service Icon Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewService') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Our Products and Solutions</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewProduct') }}" class="btn btn-primary">Add New Product</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editProductMainSection') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Product 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Product Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Product Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewProduct') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Product 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Product Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Product Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewProduct') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Slider Setting</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Add New Slide</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Couting</label>
                            <div class="col-md-8 col-lg-10">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Slide 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Slide Heading</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Read More Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Contact Us Button Link</label>
                            <div class="col-md-8 col-lg-10">
                                http://127.0.0.1:8000/admin/homeSetting
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                This is heading
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Couting</label>
                            <div class="col-md-8 col-lg-10">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/slider/4.png') }}" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.createNewSlide') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Percentage Section Setting</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Our Products and Solutions
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Video</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-4">
                                afja;f
                            </div>
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-4">
                                100%
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-4">
                                afja;f
                            </div>
                            <label class="col-md-4 col-lg-2 label">Percentage</label>
                            <div class="col-md-8 col-lg-4">
                                100%
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editPercentageSection') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Questions Section Setting</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Question Heading
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Question Setting Text
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Question</label>
                            <div class="col-md-8 col-lg-8">
                                Qustion?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Answer</label>
                            <div class="col-md-8 col-lg-8">
                                100%
                            </div>
                        </div>
                       

                        <div style="float: right;">
                            <a href="{{ route('home.editQuestonsSection') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>


@endsection