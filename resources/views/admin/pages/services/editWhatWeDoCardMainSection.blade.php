@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>What We Do Section</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Services</li>
            <li class="breadcrumb-item active">Application Migration And Conversion Page Settings</li>
            <li class="breadcrumb-item active">Edit What We Do Sectoin</li>
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
                                <label class="col-md-4 col-lg-2 label">Main Section Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="heading" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Main Section Text</label>
                                <div class="col-md-8 col-lg-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Main Section Button Link</label>
                                <div class="col-md-8 col-lg-10">
                                    <input name="heading" class="form-control" type="text">
                                </div>
                            </div>

                            <div style="float: right;">
                                <button class="btn btn-primary btn-sm">Save</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>




@endsection