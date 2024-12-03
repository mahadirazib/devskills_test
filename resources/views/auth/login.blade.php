@extends('layouts.app')

@section('title', 'Login')


@section('content')


<section>
  <div class="container" style="min-height: 800px; padding: 100px 0;">
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-5">
        <div class="card rounded-2 shadow border-0">
          <div class="container-fluid p-0 overflow-hidden rounded-top-2" 
            style="height:200px;">
            <img src="{{ asset('storage/top_image.jpg') }}" alt="" style="max-width: 100%; ">
          </div>
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex align-items-center">
              <div class="w-100">
                <h3 class="mb-4 fw-light">Sign In</h3>
              </div>
              <div class="w-100">
                <p class="d-flex justify-content-end">
                  <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                    <img class="mr-4 me-4" style="width: 15px;" src="{{ asset('storage/icons/facebook.svg') }}" alt="">
                  </a>
                  <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                    <img class="w-5" style="width: 15px" src="{{ asset('storage/icons/twitter.svg') }}" alt="">
                  </a>
                </p>
              </div>
            </div>
            <form action="{{ route('login') }}" method="POST" class="signin-form">
              @csrf
              <div class="form-group mt-3 mb-3">
                <input type="text" name="username" class="form-control p-2" placeholder="Username" required>
              </div>
              <div class="form-group mb-3">
                <input id="password-field" type="password" name="password" class="form-control p-2" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group mb-3">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3" style="background-color: #01d28e; border-color:#01d28e;">Sign In</button>
              </div>
              <div class="form-group d-flex justify-content-between mb-4">
                <div class="w-50 text-left">
                  <label class="checkbox-wrap checkbox-primary mb-0 d-flex align-items-center">
                    <input type="checkbox" checked class="mr-2">
                    <span class="ms-2">Remember Me</span>
                  <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-50 text-end">
                  <a href="#" style="color: gray">Forgot Password</a>
                </div>
              </div>
            </form>
            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection
