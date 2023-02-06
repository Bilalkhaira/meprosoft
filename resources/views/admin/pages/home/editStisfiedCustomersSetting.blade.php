@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Satisfied Customer</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Edit Satisfied Customer Section</li>
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
                                <label class="col-md-4 col-lg-2 label">Heading</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="text" class="form-control" name="heading" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Text</label>
                                <div class="col-md-8 col-lg-10">
                                    <textarea name="text" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-2 label">Images</label>
                                <div class="col-md-8 col-lg-10">
                                <input type="file" id="files" name="files[]" multiple class="form-control"/>
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
@section('scripts')
<script>
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<div class=\"img-thumb-wrapper card shadow\">" +
                            "<img class=\"img-thumb\" src=\"" + e.target.result +
                            "\" title=\"" + file.name + "\"/>" +
                            // "<br/><span class=\"remove\">Remove</span>" +
                            "</div>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".img-thumb-wrapper").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>
@endsection