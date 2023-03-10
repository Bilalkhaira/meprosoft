@extends('layouts.master')

@section('content')
@if(!empty($data))
<section class="wrapper bg-dark text-white">
    <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                <h1 class="display-1 text-white mb-3">Get in Touch</h1>
                <p class="lead px-xl-10 px-xxl-10">Have any questions? Reach out to us from our contact form and we will
                    get back to you shortly.</p>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col mt-n19 mb-16">
                <div class="card shadow-lg">
                    <div class="row gx-0">
                        <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"
                            data-image-src="{{ asset('img/photos/tm1.jpg') }}">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-13">
                                <h2 class="display-4 mb-3">Let’s Talk</h2>
                                <p class="lead fs-lg">Let's make something great together. We are trusted by over 5000+
                                    clients. Join them by using our services and grow your business.</p>
                                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                    Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor
                                    mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row gy-10 gx-lg-8 gx-xl-12">
                    <div class="col-lg-12">
                        <form class="contact-form needs-validation" method="POST" action="{{ route('saveMsg') }}"
                            novalidate>
                            @csrf
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="first_name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name">First Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="last_name" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_lastname">Last Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Select a department</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Customer Support">Customer Support</option>
                                        </select>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please select a department. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control"
                                            placeholder="Your message" style="height: 150px" required></textarea>
                                        <label for="form_message">Message *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck"> I agree to <a href="#"
                                                class="hover">terms and policy</a>. </label>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                        value="Send message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h1 style="margin-top: 100px;">Corporate Offices</h1>
                <div class="row gy-10 gx-lg-8 gx-xl-12">

                    
                    <div class="col-lg-4">
                        <div>
                            <h3>Bangalore</h3>
                        </div>
                        <div class="d-flex flex-row">

                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Mesprosoft Pvt. Ltd.
                                    4th Floor, AEQUS Towers,
                                    #55, Mahadevapura Post,
                                    Whitefield Main Road,
                                    Bangalore- 560048</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>+ 91 91 10639340</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sandbox@email.com"
                                        class="link-body">sales@mesprosoft.com</a></p>
                                <p><a href="mailto:help@sandbox.com" class="link-body">info@mesprosoft.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h3>Mumbai</h3>
                        </div>
                        <div class="d-flex flex-row">

                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Mesprosoft Pvt. Ltd.
                                    (Kintan Systech Pvt. Ltd.)
                                    201, Kalpataru Plaza,
                                    Chincholi Bunder Road, Malad West,
                                    Mumbai 400 064.</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sales@mesprosoft.com"
                                        class="link-body">sales@mesprosoft.com</a></p>
                                <p><a href="mailto:info@mesprosoft.com" class="link-body">info@mesprosoft.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h3>Pune</h3>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Mesprosoft Pvt. Ltd.
                                    (Hitech Infotech Services)
                                    13, Blossoms,Third Floor,
                                    Brahma Chambers,Tilak Road,
                                    Sadashiv Peth, Pune – 411030</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>+91 20-24444409</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sales@mesprosoft.com"
                                        class="link-body">sales@mesprosoft.com</a></p>
                                <p><a href="mailto:info@mesprosoft.com" class="link-body">info@mesprosoft.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
                <hr>
                <div class="row gy-10 gx-lg-8 gx-xl-12">

                    
                    <div class="col-lg-4">
                        <div>
                            <h3>US
                            </h3>
                        </div>
                        <div class="d-flex flex-row">

                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>
                                    Mesprosoft LLC

                                    2433 FM Road 1092,
                                    Missouri City,
                                    Texas – 77459
                                    United States.</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>+1 214 281 8859,<br>
                                    +1 248 613 2392</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sandbox@email.com"
                                        class="link-body">sales.us@mesprosoft.com</a></p>
                                <p><a href="mailto:help@sandbox.com" class="link-body">info.us@mesprosoft.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h3>Qatar</h3>
                        </div>
                        <div class="d-flex flex-row">

                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Mesprosoft Qatar WLL
                                    No. 21, 6th Floor,
                                    Doha Administration Tower,
                                    Grand Hamad Avenue,
                                    Bank Street, Doha,
                                    Qatar.</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>+ 974 77438545</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:sales@mesprosoft.com"
                                        class="link-body">sales.qatar@mesprosoft.com</a></p>
                                <p><a href="mailto:info@mesprosoft.com" class="link-body">info.qatar@mesprosoft.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h3>Registered Office</h3>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Mesprosoft Pvt. Ltd.
                                    Anandhashram PO
                                    Kasaragod dist,
                                    Kerala, 671531</address>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
            style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
    </div>
</section>
@else
<section class="wrapper bg-light">
  <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

      <div class="col-lg-12">
        <h3 class="display-4 mb-5">No Data Found Of This Page</h3>
      </div>

    </div>
  </div>
</section>
@endif
@endsection
