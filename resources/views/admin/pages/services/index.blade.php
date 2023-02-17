@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Services Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Serviecs</li>
            <!-- <li class="breadcrumb-item active">Application Migration And Conversion Page Settings</li> -->
        </ol>
    </nav>
</div>


<section class="section">
    <div class="row">

        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <form action="">
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-4 label">Select Page And Submit For Edit Page</label>
                                <div class="col-md-8 col-lg-8">
                                    <select class="form-control" name="navbar_id" id="">
                                        @foreach($services_lists as $services_list)
                                        <option value="{{ $services_list->id }}">{{ $services_list->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div style="float: right;">
                                <a href="{{ route('home.editBuildingEfficiencySection') }}" class="btn btn-sm btn-primary">Submit</a>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Top Section Settings</h2>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        @if(!empty($pageData) AND !empty($topSection = json_decode($pageData->top_section)))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                {{$topSection->heading}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                {{$topSection->explanation}}
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/services/'.$topSection->img )}}" alt="">
                            </div>

                        </div>

                        <div style="float: right;">
                            <a href="{{ route('service.editToSection',$pageData->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        @else
                        <div style="float: right;">
                            <a href="{{ route('service.createToSection') }}" class="btn btn-sm btn-primary">Add</a>
                        </div>
                        @endif

                    </div>


                </div>


            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Explanation Section</h2>


        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                What We Do?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Mesprosoft has designed tailored solutions for industries across verticals. Mesprosoft has leveraged SAP technology and its superior features to build solutions that align perfectly with vertical business requirements. So however distinctive your processes may be, you can now integrate and streamline your business processes with our SAP solutions, and ensure that your operations and business performance are strengthened enough to give you the thrust for sustained growth and become profitable,
                            </div>
                        </div>

                        <div style="float: right;">
                            <!-- <a href="{{ route('service.createExplanationSection') }}" class="btn btn-sm btn-primary">Create</a> -->
                            <a href="{{ route('service.editExplanationSection',1) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm  btn-primary">Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section class="section">
    <div class="row">
        <h2>Featurs Setting Section</h2>
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('service.createFeatureSectionCard') }}" class="btn btn-sm btn-primary">Add New Card</a>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                OUR PROCESS
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                Find out everything you need to know about creating a business process model
                            </div>
                        </div>


                        <div style="float: right;">
                            <!-- <a href="{{ route('service.createFeatureSection') }}" class="btn btn-sm btn-primary">Create</a> -->
                            <a href="{{ route('service.editFeatureSection',1) }}" class="btn btn-sm btn-primary">Edit</a>

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
                            <a href="{{ route('service.editFeatureSectionCard',1) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>

                            <a href="#" class="btn btn-sm  btn-primary">Disable</a>
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
                            <a href="{{ route('service.editFeatureSectionCard',1) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>

                            <a href="#" class="btn btn-sm  btn-primary">Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>






@endsection