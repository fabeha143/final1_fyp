@extends('layouts.websitemaster')

@section('websitecontent')

<section
      class="breadcrumbs"
      style="background-image: url(images/breadcrumb-bg.jpg)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Register</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="fas fa-angle-double-right"></i>
                </li>
                <li><a href="#">Register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="register-area">
      <div class="container">
        <div class="row">
          <div
            class="
              col-lg-8
              offset-lg-2
              col-md-10
              offset-md-1
              col-12
              wow
              fadeInUp
            "
            data-wow-delay="0.3s"
          >
            <div class="account-box">
              <div class="account-box-head">
                <h2>Create Your Account</h2>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content.
                </p>
              </div>
              <div class="account-form">
                <form method="POST" action="{{ route('save') }}">
                @if(Session::get('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
                  @endif
                  
                  @if(Session::get('fail'))
                      <div class="alert alert-success">
                          {{ Session::get('fail') }}
                      </div>
                  @endif
                @csrf
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Name *</label>
                        <input
                          type="text"
                          name="name"
                          placeholder=""
                          value="{{ old('name') }}"
                        />
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Phone No *</label>
                        <input
                          type="text"
                          name="phone_number"
                          placeholder=""
                          value="{{ old('phone_number') }}"
                        />
                        <span class="text-danger">@error('phone_number'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Email Address *</label>
                        <input
                          type="Email"
                          name="email"
                          placeholder=""
                          value="{{ old('email') }}"
                        />
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Password *</label>
                        <input
                          class="password"
                          type="Password"
                          name="password"
                          placeholder=""
                        />
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Confirm Password *</label>
                        <input
                          class="password"
                          type="Password"
                          name="password_confirmation"
                          placeholder=""
                        />
                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="bottom-content">
                        <p>
                          Already have an account?
                          <a href="{{ url('/loginpatient')}}">Login.</a>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="account-button">
                        <button type="submit" class="theme-btn">
                          Create Account
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection