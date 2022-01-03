<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Good Health</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/bootstrap.min.css"/>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="/plugins/morrisjs/morris.css"/>
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/plugins/dropzone/dropzone.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom Css -->
<link rel="stylesheet" href="/css/main.css"/>

</head>

<body class="theme-cyan">
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div> -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- #Float icon -->



<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="{{ url('/admin/dashboard')}}">Good Health</a> </div>
        <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/inbox/create')}}" title="Go to Inbox"><i class="zmdi zmdi-email"></i></a></li>
                <li><a href="{{ url('/profile')}}" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                <li><a href="{{ url('/logout') }}"><i class="zmdi zmdi-sign-in"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="/images/random-avatar7.jpg" alt=""></div>
            <div class="admin-action-info"><span>Welcome</span>
                <h3>{{$data->username}}</h3>
                
            </div>
            <div class="quick-stats">
                <h5>Today Report</h5>
                <ul>
                    <li><span>{{$patientTotal}}<i>Patient</i></span></li>
                    <li><span>{{$appointmentsall}}<i>Panding</i></span></li>
                    <li><span>{{$Doctor}}<i>Doctor</i></span></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="btn1 active"><a href="{{ url('/admin/dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li><a href=" {{ url('/appointment') }}" ><i class="zmdi zmdi-calendar-check"></i><span >Appointment</span> </a>
                </li>
                <li class="btn1 inactive"><a href="{{ url('/doctor') }}" ><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                </li>
                <li id="btn1 inactive"><a href="{{ url('/patient') }}" ><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                </li>
                <li  id="btnactive"><a href="{{ url('/employee') }}"><i class="zmdi zmdi-account"></i><span>Employee</span> </a>
                </li>
                <!-- <li  id="btnactive"><a href="{{ url('/employeeRole') }}"><i class="zmdi zmdi-account"></i><span>Employee Role</span> </a>
                </li> -->
                
                <li id="btnactive"><a href="{{ url('/department') }}"><i class="zmdi zmdi-account-circle"></i><span>Department</span> </a>
                </li>
                <li id="btnactive"><a href="{{ url('/medicine') }}"><i class="zmdi zmdi-account-circle"></i><span>Medicines</span> </a>
                </li>
                <li id="btnactive"><a href="{{ url('/medicinesCategory') }}"><i class="zmdi zmdi-account-circle"></i><span>Medicines Category</span> </a>
                </li>
                <li id="btnactive"><a href="{{ url('/doseschedule') }}" ><i class="zmdi zmdi-account-circle"></i><span>Dose Schedule</span> </a>
                </li>
                <li id="btnactive"><a href="{{ url('/schedule') }}" ><i class="zmdi zmdi-account-circle"></i><span>Create Schedule</span> </a>
                </li>
                <li id="btnactive"><a href="{{ url('/schedule') }}" ><i class="zmdi zmdi-account-circle"></i><span>Create Schedule</span> </a>
                </li>
                
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
</section>

@yield('content')

<div class="color-bg"></div>

<script src="/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/bundles/chartscripts.bundle.js"></script> <!-- Chart Plugins Js -->
<script src="/bundles/sparklinescripts.bundle.js"></script> <!-- Chart Plugins Js -->

<script src="/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/js/index.js"></script>
<script src="/js/pages/charts/sparkline.min.js"></script>
<script src="/plugins/dropzone/dropzone.js""></script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>

</html>