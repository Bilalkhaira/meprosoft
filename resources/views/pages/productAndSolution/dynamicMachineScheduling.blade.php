@extends('layouts.master')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('img/product_solution/1.jpg') }}">
  <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 text-white mb-3">Dynamic Machine Scheduling</h1>
        <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Automation is the next new face of manufacturing sectors. The world realizes the need for a higher 
level of production and timely availability of products. Meanwhile..</p>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">Dynamic Machine Scheduling</h3>
        <p>Automation is the next new face of manufacturing sectors. The world realizes the need for a higher 
level of production and timely availability of products. Meanwhile, your machine will be experiencing
an aggressive demand for resources, materials and inventories which tends to change dynamically. 
This is where you need to shift towards dynamic machine scheduling, or you need Mesprosoft. 
With fully digital workflows, Mesprosoft empowers flexibility and transparency across manufacturing
processes. This results in improved output, fewer quality losses and almost zero machine downtimes. 
As the automotive sector is on the verge of revolution, Microsoft will deploy a series of analytical and
automation-enabled capabilities into your business so that the fastest adoption is ensured.</p>
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
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <!-- <h4 class="mb-1">1. Concept</h4> -->
            <p>Intelligent scheduling for machines and resources.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
            <p>Automatic selection of operation and system.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
            <p>Better capacity utilization.</p>
          </div>
          <div class="col-md-3"> <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
            <p>MRP / Schedule integration with SAP till final products.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection