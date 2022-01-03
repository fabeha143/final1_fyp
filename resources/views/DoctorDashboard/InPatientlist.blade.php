@extends('layouts.doctormaster')
@section('contentdoctor')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>In Patient List</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>In Patient List</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Addmission Date</th>
                                    <th>Gender</th>
                                    <th>Patient Catogary</th>
                                    <th>Email</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($patientdata))
                                @foreach($patientdata as $list)
                                    <tr>
                                        <td>{{ $list->pat_fname}}</td>
                                        <td>{{ $list->pat_lname}}</td>
                                        <td>{{ $list->pat_phone}}</td>
                                        <td>{{ $list->pat_admission_date}}</td>
                                        <td>{{ $list->pat_gender}}</td>
                                        <td>{{ $list->pat_category}}</td>
                                        <td>{{ $list->pat_email}}</td>
                                        <td>{{ $list->status}}</td>
                                        <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/writePrescriptionpatient',$list->id)}}">Prescribe</a> 
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
