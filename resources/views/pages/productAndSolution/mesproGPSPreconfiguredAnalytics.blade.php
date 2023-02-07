@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/photos/bg1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">Mespro GPS Preconfigured Analytics</h1>
        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Mesprosoft helps you through a comprehensive portfolio of end-to-end Mespro GPS Preconfigured Analyticss while
          adhering to the industry standard for loan document compliance.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">Mespro GPS Preconfigured Analytics</h3>
        <p>Location tracking is an on-demand facility in the transport and logistics industry. As the world is rushing
          towards smart solutions, so do Mesprosoft prebuilt templates, reports and dashboards (Mespro BOBJ –
          GPS), making vehicle tracking a matter of seconds. "Data is the money", but it is even more valuable in the
          logistics industry. If you are also looking for a smart remote monitoring solution that keeps a track record
          of fleet services, Mespro GPS preconfigured analytics has come for your support. Using tech-enabled Key
          Performance Indicators (KPI), we make all good/bad metrics readily accessible to logistic firms.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-soft-primary">
  <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">

    <div class="row text-center">
      <div class="col-lg-9 mx-auto">
        <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">KPI BASED ON</h3>
        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <!-- <h4 class="mb-1">1. Concept</h4> -->
            <p>Human Capital Management.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Working Capitals.</p>
          </div>
          <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
            <p>Revenue.</p>
          </div>
          <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <p>Marketing.</p>
          </div>
          <div class="col-md-2"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Sales.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection