@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/product_solution/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">Mespro Optimized MRP</h1>
        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">f conventional MRP solutions aren't delivering optimal results, let's integrate planning and some powerful
          execution tools that aid in superior inventory control at a reduced cos.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">HOW EFFICIENT IS YOUR MRP RUN?</h3>
        <p>Are your operations not running smoothly? Is your Material Requirement Planning (MRP) lacking
          accuracy? Or have you been going through certain limitations in the current MRP solutions? Well,
          you have found the right place.</p>
        <p>If conventional MRP solutions aren't delivering optimal results, let's integrate planning and some powerful
          execution tools that aid in superior inventory control at a reduced cost. With an optimized MRP,
          Mesprosoft ensures an even allocation of raw materials and resources</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-soft-primary">
  <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

    <div class="row text-center">
      <div class="col-lg-9 mx-auto">
        <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Benefits</h3>
        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <!-- <h4 class="mb-1">1. Concept</h4> -->
            <p>Lower inventory costs for our clients by 2-4%.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Dropped the accumulation of dead stock to zero percent.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
            <p>Real-time alignment of planned purchases with vendors' most recent delivery schedules.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <p>Full transparency, tracking against set dates, and much more with optimized MRP.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


@endsection