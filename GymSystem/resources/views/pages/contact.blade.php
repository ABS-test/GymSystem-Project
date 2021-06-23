@extends('layout')

@section('title') Contact @endsection

@section('content')
  <div class=" container mapouter mb-5">
      <div class="gmap_canvas">
          <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=chisinau&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
          <a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
              <div>
                  <p>Our location:</p>
                  <p>Moldova.Chisinau.</p>
              </div>
              <div>
                  <p>Phone: 022 00 00 00</p>
                  <p>Email: examplegymsystem@gmail.com</p>
              </div>
          </div>
          <div class="col-lg-6">
          
              @include('messages')

              <form action="{{ route('contact-form') }}" novalidate=""  method="post">
              @csrf
                  <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="firstName">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="lastName">
                      </div>
                  </div>
                      <div class="mb-3">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="you@example.com" required="" name="email">
                      </div>
                      <div class="mb-3">
                          <label for="address">Address <span class="text-muted">(Optional)</span></label>
                          <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
                      </div>
                      <hr class="mb-5">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Contact us</button>
              </form>
          </div>
      </div>
  </div>
@endsection