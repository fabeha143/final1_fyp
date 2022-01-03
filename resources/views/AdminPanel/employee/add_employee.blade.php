@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Employee</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('route' => 'employee.store' , 'method' => 'POST' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname',null,array('class' => 'form-control','placeholder'=>'First Name'))}}
                                    </div>
                                    <span class="text-danger">@error('Fname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname',null,array('class' => 'form-control','placeholder'=>'Last Name'))}}
                                    </div>
                                    <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
                                </div>
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Gender' ] )}}
                                </div>
                                <i class="zmdi zmdi-chevron-down" style="position: absolute; right:29px; top:8px"></i>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::text('phone',null,array('class' => 'form-control','placeholder'=>'Phone Number'))}}
                                    </div>
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('joining_date','Joining Date',array('class' => 'form-control','labe;' => 'Joining Date'))}}
                                    </div>
                                    <span class="text-danger">@error('joining_date'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" >
                                    <div class="form-line">
                                    {{ Form::select('role',array('Doctor' => 'Doctor' , 'Admin' => 'Admin', 'Attendant' => 'Attendant'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Role' ] )}}
                                    </div>
                                    <span class="text-danger">@error('role'){{ $message }} @enderror</span>
                                </div>
                                <i class="zmdi zmdi-chevron-down" style="position: absolute; right:29px; top:8px"></i>
                            </div>
                    
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address',null,array('class' => 'form-control','placeholder'=>'Address'))}}
                                </div>
                                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                            </div>
                        </div>
                   
                </div>
  
                        <div class="row clearfix">                            
                            
                            <div class="col-sm-12">
                            {{ Form::submit('Submit',array('class' => 'btn btn-raised g-bg-cyan'))}}
                            {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}}
                            </div>
                        
                        </div>
                       
                    {{ Form::close() }}
				</div>
			</div>
		</div>  
        
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>
                        Employees's Account Information
                        <small>Description text here...</small>
                        </h2>
                    </div>
                    <form method="POST" action="{{ route('/register/save') }}" class="body">
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" name="username" class="form-control" placeholder="Enter Username" value="{{ old('username') }}">
                                <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                         
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" >
                                <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group drop-custum" style="position:relative">
                                <select name="role_id" id="role_id" class="form-control" required >
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="attendant">Attendant</option>
                                </select>
                                <span class="text-danger">@error('role_id'){{ $message }} @enderror</span>
                               
                            </div>
                            <i class="zmdi zmdi-chevron-down" style="position: absolute; top: 8px; right: 28px;"></i>
                        </div>
                    
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-raised g-bg-cyan">Sign Up</button>
                            <!-- {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}} -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
@endsection()