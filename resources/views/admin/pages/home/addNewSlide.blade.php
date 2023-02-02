@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Slider</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Create New Slide</li>
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
                                <label class="col-md-4 col-lg-2 label">Slide Heading</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="text" name="heading" class="form-control" required>
                                </div>

                                <label class="col-md-4 col-lg-2 label">Read More Button Link</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="text" name="read_more_link" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Happy Client Card Text</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="text" name="card_text" class="form-control" required>
                                </div>

                                <label class="col-md-4 col-lg-2 label">Contact Us Button Link</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="text" name="contact_link" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Happy Client Card Couting</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="text" name="card_counting" class="form-control" required>
                                </div>

                                <label class="col-md-4 col-lg-2 label">Image</label>
                                <div class="col-md-8 col-lg-4">
                                    <input type="file" name="img" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Text</label>
                                <div class="col-md-8 col-lg-10">
                                    <textarea name="slide_text" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                            </div>

                            <div style="float: right;">
                                <button class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>




@endsection