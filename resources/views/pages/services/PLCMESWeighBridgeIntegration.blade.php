@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/services/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">PLC/MES/Weigh Bridge Integration</h1>
        <span class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">In a complete production environment it is seldom enough to have a standalone system, connected and Automated system brings high level of consistency in Quality and traceability of the products.</span>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">PLC / MES / WEIGH BRIDGE INTEGRATION</h3>
        <p>In a complete production environment it is seldom enough to have a standalone system, connected and Automated system brings high level of consistency in Quality and traceability of the products.</p>
      </div>

      <div class="col-lg-12">
       <img src="{{ asset('img/services/Weigh-Bridge-Integration.jpeg') }}" alt="">
      </div>

      <div class="col-lg-12">
        <h4>Features</h4>
        <ul>
          <li>Mesprosoft integration connectivity services enables your SAP to be connected to Weigh Bridge – ensuring Real-time inward, outward, net weight and tare weight calculation.</li>
          <li>Dispensing Connectivity – Connect your dispensing weigh bridge to ensure you are dispensing the correct amount for blending with indicators of Min and Max levels.</li>
          <li>MES Integration – With SAP OPC connectivity Mesprosoft can connect to PLC and fetch information on production and process parameters directly from PLC and sensors</li>
        </ul>
      </div>

    </div>
  </div>
</section>



@endsection