@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Services Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Serviecs</li>
            <li class="breadcrumb-item active">Application Migration And Conversion Page Settings</li>
        </ol>
    </nav>
</div>


<section class="section">
    <div class="row">
        <h2>Top Section Settings</h2>

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
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.Mesprosoft provides a broad portfolio of SAP & information technology solutions and business process to its clients worldwide.
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('home.editBuildingEfficiencySection') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>


                    </div>


                </div>


            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>What We Do Section Setting</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('service.createWhatWeDoCard') }}" class="btn btn-primary">Add New Card</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Heading</label>
                            <div class="col-md-8 col-lg-10">
                            What We Do?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Text</label>
                            <div class="col-md-8 col-lg-10">
                            Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical business requirements. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough to give you the thrust for sustained growth and become profitable,
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editWhatWeDoCardMainSection') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Card 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editWhatWeDoCard') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Card 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editWhatWeDoCard') }}" class="btn btn-primary">Edit</a>
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
        <h2>Our Progress & Video Setting Section</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('service.createOurProgessCard') }}" class="btn btn-primary">Add New Card</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Small Heading</label>
                            <div class="col-md-8 col-lg-10">
                            OUR PROCESS
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Larg Heading</label>
                            <div class="col-md-8 col-lg-10">
                            Find out everything you need to know about creating a business process model
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Section Main Video</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editOurProgressSection') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Card 1</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editOurProgressSectionCard') }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <h3>Card 2</h3>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Heading</label>
                            <div class="col-md-8 col-lg-10">
                                Mespro Paperless Manufacturing
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Icon Image</label>
                            <div class="col-md-8 col-lg-4">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Card Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft Manufacturing Add-ons are solutions aimed at improving the Manufacturing processes and SAP utilization who are an existing customer of SAP. Each of our solutions can be implemented as standalone or combine to leverage the efficiency…
                            </div>
                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editWhatWeDoCard') }}" class="btn btn-primary">Edit</a>
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
        <h2>Join Our Community Setting Section</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Small Heading</label>
                            <div class="col-md-8 col-lg-10">
                            JOIN OUR COMMUNITY
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Larg Heading</label>
                            <div class="col-md-8 col-lg-10">
                            We are trusted by over 5000+ clients. Join them now and grow your business.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Completed Projects</label>
                            <div class="col-md-8 col-lg-10">
                            7518
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Satisfied Customers</label>
                            <div class="col-md-8 col-lg-10">
                            5472
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Expert Employees</label>
                            <div class="col-md-8 col-lg-10">
                            2184
                            </div>
                        </div>
                       

                        <div style="float: right;">
                            <a href="{{ route('service.editJoinOurCommunity') }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        </div>

                    </div>

                </div>
              

            </div>

        </div>
    </div>

</section>




@endsection