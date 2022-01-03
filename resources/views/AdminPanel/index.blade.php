@extends('layouts.master')
@section('content')


<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="{{ url('/patient') }}"> <i class="zmdi zmdi-account col-blue"></i></a></div>
                    <div class="content">
                        <div class="text">Patient</div>
                        <div class="number">{{  $patient }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="{{ url('/doctor') }}"><i class="zmdi zmdi-account col-green"></i></a> </div>
                    <div class="content">
                        <div class="text">Doctors</div>
                        <div class="number">{{  $doctor }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="{{ url('/employee') }}"><i class="zmdi zmdi-account col-blush"></i></a></div>
                    <div class="content">
                        <div class="text">Employee</div>
                        <div class="number">{{  $employee }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="{{ url('/appointment') }}"><i class="zmdi zmdi-account col-blush"></i></a></div>
                    <div class="icon"><a href=""><i class="zmdi zmdi-balance col-cyan"></i></a></div>
                    <div class="content">
                        <div class="text">Appointments</div>
                        <div class="number">{{  $appointmentscount }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>New Patient</h2>
                    </div>
                    <div class="body">
                        
                        <canvas id="barChart" height="70"></canvas>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Appointment List <small>Description text here...</small> </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Appointment Id</th>
                                    <th>Patient Name</th>
                                    <th>Appointment Date</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($appointments))
                                    @foreach($appointments as $list)
                                        <tr>
                                            <td>{{ $list->id}}</td>
                                            <td>{{ $list->patient_name}} </td>
                                            <td>{{ $list->appointment_date}}</td>
                                            <td>{{ $list->doctors->doc_fname}} {{ $list->doctors->doc_lname}}</td>
                                            <td><span class="label label-primary">{{ $list->status}}</span> </td>
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
       
	</div>
</section>
<script>
    var datas = <?php echo json_encode($datas);?>;
    var barCanvas =  $('#barChart');
    var barChart = new Chart(barCanvas,{
        type:'bar',
        data:{
            labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
            datasets: [
                {
                    label: "New Patients",
                    data: datas,
                    borderColor: "rgba(0, 188, 212, 0.75)",
                    backgroundColor: "rgba(0, 188, 212, 0.3)",

                }
            ]
        },
        options: {
                responsive: true,
                legend: false,
            },
    })
</script>


@endsection()