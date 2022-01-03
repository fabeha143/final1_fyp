@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Doctor</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						
					</div>
					{{ Form::open(array('url' => route('doctor.update', ['doctor' => $doctoredit->id , 'department_data' =>  $department_data]), 'method' => 'put' , 'enctype' => 'multipart/form-data', 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname',$doctoredit->doc_fname,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('Fname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname',$doctoredit->doc_lname,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::date('dateofbirth',$doctoredit->doc_date_of_birth,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('dateofbirth'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                                <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::select('doc_department', $department_data,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select department' ]) }}
                                    </div>
                                    <span class="text-danger">@error('doc_department'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('phone',$doctoredit->doc_phone,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email',$doctoredit->doc_email,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address',$doctoredit->doc_address,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                               
                                    <div class="fallback">
                                    {{ Form::file('files[]',array('files'=> true , 'multiple' => true))}}
                                    </div>
                            </div>
                           
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::textarea('doc_biography',$doctoredit->doc_biography,array('class' => 'form-control'))}}
                                    </div>
                                    <span class="text-danger">@error('doc_biography'){{ $message }} @enderror</span>
                                </div>
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
@endsection()