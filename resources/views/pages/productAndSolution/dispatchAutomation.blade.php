@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/photos/bg1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">Dispatch Automation</h1>
        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Businesses with disorganized dispatch systems will eventually struggle for their lif.</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">Dispatch Automation (Consumer Where Food)</h3>
        <p>Businesses with disorganized dispatch systems will eventually struggle for their life. Already such
          companies that are manually planning their routes, monitoring their vehicles and handing over the
          assignment to their driver are risking their business growth profile. But those that are capitalizing on
          automation are effectively handling the movement of their inventory by prioritizing all those things which
          might have been overlooked earlier. So come along!
          With exceptional expertise in creating automation for businesses, MesProSoft is optimizing the goods
          dispatch processes for companies. Our services help you eliminate labour-intensive, time-consuming and
          costly activities – worth recommending for consumer-based products.</p>
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
            <p>Semi-Automatic/ Fully System for professional-like inventory control.</p>
          </div>
          <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Improving the cash flow by bringing transparency in the confirmed orders & remaining stocks.</p>
          </div>
          <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
            <p>Weighing up dispatchable capacity to stay prepared earlier.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection