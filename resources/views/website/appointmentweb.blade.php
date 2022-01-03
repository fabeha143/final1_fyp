@extends('layouts.websitemaster')

@section('websitecontent')

<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Appointment</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="far fa-angle-double-right"></i>
                </li>
                <li><a href="#">Appointment</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="apppoinment-page-area">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 col-md-10 col-12 wow fadeInLeft"
            data-wow-delay="0.1s"
          >
          {{ Form::open(array('route' => '/Appointment/create' , 'method' => 'POST')) }}
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
              
              <div class="appoinment-inner">
                <div class="appoinment-title">
                  <h3>Make An Appointment</h3>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                    corrupti quos dolores et quas molestias excepturi sint
                    occaecati.
                  </p>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::text('patient_name',null,array('class' => 'form-control', 'placeholder' => 'Name'))}}
                    <span class="text-danger">@error('patient_name'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::text('phone_number',null,array('class' => 'form-control', 'placeholder' => 'Phone Number'))}}
                    <span class="text-danger">@error('phone_number'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::text('patient_dob',null,array('class' => 'datepicker', 'placeholder' => 'Date Of Birth'))}}
                    <span class="text-danger">@error('patient_dob'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::select('department', $department,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Department' ]) }}
                    <span class="text-danger">@error('department'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::select('doctor_name', $doctorsdata,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Doctor' ]) }}
                    <span class="text-danger">@error('doctor_name'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::text('appointment_date',null,array('class' => 'datepicker', 'placeholder' => 'Appointment Date'))}}
                    <span class="text-danger">@error('appointment_date'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                    {{ Form::time('appointment_time',null,array('class' => 'form-control', 'placeholder' => 'Appointment Time'))}}
                    <span class="text-danger">@error('appointment_time'){{ $message }} @enderror</span>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="contact-btn">
                      <button type="submit" class="theme-btn">
                        Book An Appoinment
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              {{ Form::close() }}
          </div>
          
          <div
            class="col-lg-6 col-md-10 col-12 wow fadeInRight"
            data-wow-delay="0.2s"
          >
            <div class="appoinment-img">
              <img src="images/appoinment-img.jpg" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection