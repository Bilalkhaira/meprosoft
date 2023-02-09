@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/product_solution/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">Mespro X-steps</h1>
        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Compared to a traditionally used methodology for production reporting, process manufacturing by
          Mespro cockpit live data of the production process.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">X-STEPS PROCESS MANUFACTURING COCKPIT</h3>
        <p>Compared to a traditionally used methodology for production reporting, process manufacturing by
          Mespro cockpit live data of the production process, which collects test results and takes needed
          parameters into account. The information (e.g., route card or history card) is even obtainable post-
          manufacturing process as the entire history is preserved within the system itself.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-soft-primary">
  <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

    <div class="row text-center">
      <div class="col-lg-9 mx-auto">
        <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Features</h3>
        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
          <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <!-- <h4 class="mb-1">1. Concept</h4> -->
            <p>Alternative ingredients proposals.</p>
          </div>
          <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Real-time consumptions that are not in accordance with the Standard BOM.</p>
          </div>
          <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
            <p>Authorizations and Digital Signatures.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection