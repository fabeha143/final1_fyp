@extends('layouts.websitemaster')

@section('websitecontent')
<section class="breadcrumbs" style="background-image: url(images/breadcrumb-bg.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="breadcrumb-content">
              <h4>Doctors</h4>
              <ul class="breadcrumb-menu">
                <li>
                  <a href="index.html">Home</a
                  ><i class="fas fa-angle-double-right"></i>
                </li>
                <li><a href="#">Doctors</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="doctors-area doctor-page">
      <div class="container">
        <div class="row">
          @foreach($Doctorall as $doctors)
          <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">

            <div class="single-doctor">
              <div class="doctor-head">
                <img src="images/doctors/1.jpg" alt="#" />
              </div>
              <div class="doctor-content">
                <h5><a href="#">{{ $doctors->doc_fname }} {{ $doctors->doc_lname }}</a></h5>
                <span>{{$doctors->departments->dep_name}}</span>
                <div class="doctor-social">
                  <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                  <a href="#"> <i class="fab fa-twitter"></i> </a>
                  <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                  <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </section>

    

@endsection