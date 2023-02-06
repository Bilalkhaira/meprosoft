@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Frequently Asked Questions</h1>
    <nav>
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
    </nav>
</div>



<section class="section">
    <div class="row">
        <!-- <h2>Questions Section Setting</h2> -->

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Heading</label>
                            <div class="col-md-8 col-lg-9">
                                Question Heading
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Text</label>
                            <div class="col-md-8 col-lg-9">
                                Question Setting Text
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="http://127.0.0.1:8000/img/slider/4.png" alt="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Question</label>
                            <div class="col-md-8 col-lg-9">
                                Qustion?
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-3 label">Answer</label>
                            <div class="col-md-8 col-lg-9">
                                100%
                            </div>
                        </div>
                       

                        <div style="float: right;">
                            <a href="{{ route('faq.edit',1) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            <a href="#" class="btn btn-sm btn-primary" >Disable</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>


@endsection