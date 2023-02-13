@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/services/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">SAP Support</h1>
        <span class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">In our role as a SAP support provider, Mesprosoft provides a high quality, consistent and high value support service.</span>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">SAP Support</h3>
        <p>In our role as a SAP support provider, Mesprosoft provides a high quality, consistent and high value support service. Mesprosoft’s SAP support covers the full spectrum of SAP functions, adjusts for peaks and troughs in demand, and goes beyond problem solving to enhance the smooth running of your entire business.</p>
      </div>

      <div class="col-lg-12">
       <img src="{{ asset('img/services/sap-support.jpeg') }}" alt="">
      </div>

      <div class="col-lg-12">
        <h4>Features</h4>
        <ul>
          <li>High quality, complete SAP system support.</li>
          <li>Unrivalled flexibility and SAP knowledge transfer.</li>
          <li>Onsite/Offsite Support.</li>
          <li>ITIL based Standard Support.</li>
          <li>Issue Resolution, Custom-Code Root-Cause Analysis and Checks, Service Level Agreements, 24×7 Support Advisory, Continuous Quality Checks, Upgrade Packages and Advanced Support for Enhancement Packages.</li>
          <li>A seamless transition from your current support provider to Mesprosoft.</li>
        </ul>
      </div>

      <div class="col-lg-12">
        <h4>Value Proposition</h4>
        <ul>
          <li>Lower maintenance cost.</li>
          <li>Pro -active maintenance.</li>
          <li>Incorporation of latest Release Business functionalities.</li>
          <li>Updated License maintenance.</li>
        </ul>
      </div>

    </div>
  </div>
</section>



@endsection