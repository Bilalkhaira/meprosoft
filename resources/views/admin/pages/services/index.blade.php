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
                        <form action="{{ route('service.getServicePage') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-4 label">Select Page And Submit For Edit Page</label>
                                <div class="col-md-8 col-lg-8">
                                    <select class="form-control" name="navbar_id" id="navbar">
                                        @if(!empty($services_lists))
                                        @foreach($services_lists as $services_list)
                                        <option value="{{ $services_list->id }}" @if(isset($navbar_id) && $navbar_id == $services_list->id) ? selected  @endif>{{ $services_list->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div style="float: right;">
                                <button class="btn btn-sm btn-primary">Submit</button>
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

        <div class="pagetitle">
            <h1>Top Section Settings</h1>
        </div>

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
                            <form action="{{ route('service.createToSection') }}" method="POST">
                                @csrf
                                <input type="hidden" id="nvbr_id" value="{{ $navbar_id ?? ''}}" name="nvbar_id">
                                <button type="submit" class="btn btn-sm btn-primary">Add</button>
                            </form>
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
        <div class="pagetitle">
            <h1>Explanation Section</h1>
        </div>

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="pt-3 setting_main">

                        @if(!empty($pageData))
                        @if(!empty($pageData) AND !empty($explanationSection = json_decode($pageData->explanation_section)))
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Heading</label>
                            <div class="col-md-8 col-lg-10">
                                {{$explanationSection->heading}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-lg-2 label">Text</label>
                            <div class="col-md-8 col-lg-10">
                                {{$explanationSection->exp}}
                            </div>
                        </div>
                        @if($explanationSection->img != "")
                        <div class="row mb-3">

                            <label class="col-md-4 col-lg-2 label">Background Image</label>
                            <div class="col-md-8 col-lg-10">
                                <img src="{{ asset('img/services/'.$explanationSection->img )}}" alt="">
                            </div>

                        </div>
                        @endif
                        <div style="float: right;">
                            <a href="{{ route('service.editExplanationSection', $pageData->id ?? '') }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        @else
                        <div style="float: right;">
                            <a href="{{ route('service.createExplanationSection', $pageData->id ?? '') }}" class="btn btn-sm btn-primary">Create</a>
                        </div>
                        @endif
                        @else
                        <div style="float: right;">
                            <button class="btn btn-sm btn-primary" disabled>First Create The Top Section</button>
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
        <div class="pagetitle">
            <h1>Card Section</h1>
        </div>
        @if(!empty($pageData))
        <div>
            <a style="float: right;margin-bottom: 20px" href="{{ route('service.createCard', $pageData->id ?? '') }}" class="btn btn-sm btn-primary">Add New Card</a>
        </div>
        @else
        <div>
            <button style="float: right;margin-bottom: 20px" class="btn btn-sm btn-primary" disabled>First Create The Top Section</button>
        </div>
        @endif
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">
                    <div class="row">
                        @if(!empty($pageData['cards']))
                        @foreach($pageData['cards'] as $key => $val)
                        <div class="col-md-4">

                            <div class="pt-3 setting_main">
                                <div class="pagetitle">
                                    <h1>Card {{ $key + 1 }}</h1>
                                </div>
                                <div style="padding-right:40px;float:right">
                                    <form action="{{ route('service.deleteCard', $val->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('service.editCard',$val->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></a>

                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-10">
                                        {{ $val->heading ?? '' }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8 col-lg-4">
                                        <ul>
                                            @foreach(json_decode($val->explanation) as $li)
                                            <li>{{ $li }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        @endforeach

                        @endif
                    </div>


                </div>



            </div>

        </div>
    </div>

</section>

@endsection
