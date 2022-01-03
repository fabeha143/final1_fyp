@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Create schedule</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Scheduling</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Prescription Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($inpatientDetail))
                                @foreach($inpatientDetail as $list)
                                <tr>
                                    <td>{{ $list->patients->pat_fname}}</td>
                                    <td>{{ $list->doctors->doc_fname}}</td>
                                    <td>{{ $list->id}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/createschedule',$list->id)}}">Set Schedule</a> 
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
