@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Employee</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
					{{ Form::open(array('url' => route('employee.update', ['employee' => $employeeEdit->id]), 'method' => 'put' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname',$employeeEdit->emp_fname,array('class' => 'form-control' , 'placeholder' => 'First Name'))}}
                                </div>
                                <span class="text-danger">@error('Fname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname',$employeeEdit->emp_lname,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::text('phone',$employeeEdit->emp_phone,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row clearfix">                            
                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('joining_date',$employeeEdit->emp_joining_date,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('joining_date'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                            </div>
                             <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('role',array('Doctor' => 'Doctor' , 'Admin' => 'Admin', 'Attendant' => 'Attendant'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Role' ] )}}
                                </div>
                                <span class="text-danger">@error('role'){{ $message }} @enderror</span>
                            </div> 
                          <div>
                              <div>
                              </div>
                          </div>
                        </div>
                        
                        <div class="row clearfix">                            
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address',$employeeEdit->emp_address,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row clearfix">
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">                                                             
                            </div>
                            <div class="col-sm-12">
                            {{ Form::submit('Submit',array('class' => 'btn btn-raised g-bg-cyan'))}}
                            {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}}
                            </div>
                        </div>
                    {{ Form::close() }}
				</div>
			</div>
		</div>        
    </div>
</section>
<div class="color-bg"></div>
@endsection()