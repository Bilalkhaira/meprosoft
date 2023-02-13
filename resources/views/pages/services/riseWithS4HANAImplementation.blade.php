@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/services/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">S/4 HANA Implementation</h1>
        <span class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">When time is critical – Look no further S/4 HANA is the solution.</span>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">S/4 HANA Implementation</h3>
        <p>When time is critical – Look no further S/4 HANA is the solution. Client running with a vast number of Material codes and complex BOM and business process needed to do intelligent scheduling and MRP Planning ensure the deliveries in strict deadlines and razor thin margins and zero error and penalties. Implemented SAP S/4 HANA, streamlined entire operations in one system, quick and responsive.</p>
      </div>

      <div class="col-lg-12">
       <img src="{{ asset('img/services/s4-hana.jpeg') }}" alt="">
      </div>

    </div>
  </div>
</section>



@endsection