@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/services/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">News & Events</h1>
        <span class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Mesprosoft is now ranked among the 20 most promising SAP implementation partners in India, by CIO review magazine.</span>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h4>Mesprosoft is now ranked among the 20 most</h4>
       <p>Mesprosoft is now ranked among the 20 most promising SAP implementation partners in India, by CIO review magazine. <a href="#"  style="color: #ffd000;">read more</a></p>
      </div>

      <div class="col-lg-12">
        <h4>Mesprosoft Introduced</h4>
       <p>Mesprosoft Introduced A New Pay Per Ticket Model For Its Customers. <a href="#" style="color: #ffd000;">read more</a></p>
      </div>

    </div>
  </div>
</section>



@endsection