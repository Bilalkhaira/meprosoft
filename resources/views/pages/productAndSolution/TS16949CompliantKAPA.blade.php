@extends('layouts.master')

@section('content')
<section class="hdr_bg">
  <div class="container wrapper bg-image" id="service_head_img" data-image-src="{{ asset('img/new_design_img/paperLess.jpg' )}}"></div>
  <div class="img_dv">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <h1>TS 16949 Compliant KAPA</h1>
        <p>The ISO standard Technical Specification (TS) 16949 outlines specific requirements for manufacturers of automotive production and service parts.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row paperLess_row">
    <div class="col-md-6">
      <img src="{{ asset('img/new_design_img/37.jpeg') }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
    <h3 class="display-7 mb-5">TS 16949 Compliant KAPA</h3>
      <p>The ISO standard Technical Specification (TS) 16949 outlines specific requirements for manufacturers of automotive production and service parts. The standard is addressed predominantly for quality management system (QMS) development. If your company also wants to be TS 16949 compliant, Mesprosoft will leave no stone unturned in making it happen. We are gearing up companies to adapt fastest to the modern business dynamics by making them compliant with the respective ISO standards.</p>
      
    </div>
  </div>
  <div class="row paperLess_form_sec">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Dispatch Automation</h3>
          <p>Businesses with disorganized dispatch systems will eventually struggle for their life. Already such companies that are manually planning their routes, monitoring their vehicles and handing over the assignment to their driver are risking their business growth profile.</p>
          <a href="{{ route('productAndSolution.dispatchAutomation') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Dynamic Machine Scheduling</h3>
          <p>Automation is the next new face of manufacturing sectors. The world realizes the need for a higher level of production and timely availability of products.</p>
          <a href="{{ route('productAndSolution.dynamicMachineScheduling') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
      <div class="row news_row_margin">
        <div class="col-md-3">
          <img src="{{ asset('img/new_design_img/service_link1.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-9">
          <h3 class="display-7 mb-5">Electronic Batch Manufacturing</h3>
          <p>Pharmaceuticals & chemicals companies have long been relying on batch manufacturing processes. A batch record verifies that a company correctly controls and records all crucial steps involved in creating a batch of a product.</p>
          <a href="{{ route('productAndSolution.electronicBatchManufacturing') }}" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="paperLess_form_outer">
        <form action="/action_page.php">
          <h3 class="display-7 mb-5">Request A Demo!</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Phone">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Category Name">
          </div>

          <div class="form-group">
            <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>









@endsection