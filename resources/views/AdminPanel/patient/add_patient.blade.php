@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Patient</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('route' => 'patient.store' , 'method' => 'POST' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname',null,array('class' => 'form-control','placeholder' => 'First Name'))}}
                                    </div>
                                    <span class="text-danger">@error('Fname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname',null,array('class' => 'form-control','placeholder' => 'Last Name'))}}
                                    </div>
                                    <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('date_of_birth','Date of Birth',array('class' => 'form-control','placeholder' => 'Date of Birth'))}}
                                    </div>
                                    <span class="text-danger">@error('date_of_birth'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('addmission_date','Addmission Date',array('class' => 'form-control','placeholder' => 'Addmission Date'))}}
                                    </div>
                                    <span class="text-danger">@error('addmission_date'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email',null,array('class' => 'form-control','placeholder' => 'Email'))}}
                                    </div>
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Gender' ] )}}
                                </div>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('pat_category',array('In Patient' => 'In Patient' , 'Out Patient' => 'Out Patient'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Patient Category' ] )}}
                                </div>
                                <span class="text-danger">@error('pat_category'){{ $message }} @enderror</span>
                            </div>                               
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address',null,array('class' => 'form-control','placeholder' => 'Address'))}}
                                    </div>
                                    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('phone',null,array('class' => 'form-control','placeholder' => 'Phone'))}}
                                    </div>
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('doctor',$doctorName,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select doctor' ] )}}
                                </div>
                                <span class="text-danger">@error('doctor'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('department',$departname,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select department' ] )}}
                                </div>
                                <span class="text-danger">@error('department'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('status',array('Active' => 'Active' , 'In Active' => 'In Active'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Status' ] )}}
                                </div>
                                <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                            </div>   
                        </div>
                        
                        <div class="row clearfix">                            
                            
                            <div class="">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    {{ Form::close() }}
				</div>
			</div>
		</div>
              
    </div>
</section>
@endsection()