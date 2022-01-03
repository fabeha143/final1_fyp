@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Set Attendant</h2>
            <small class="text-muted">Welcome to Good Health application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('url' => route('addattendant', ['id' => $allfields->id ]), 'method' => 'post' , 'class' => 'body')) }}
                    @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="row clearfix">
                              
                            <div class="col-lg-6">
                            {{ Form::select('attendant_name',$name,null,['class'=> 'form-control' , 'placeholder' => 'Please Select Attendant' ] )}}
                            </div>
                            <span class="text-danger">@error('attendant_name'){{ $message }} @enderror</span>
                            <div class="col-lg-6">
                            {{ Form::hidden('pres_id',$allfields->id)}}
                            {{ Form::hidden('pres_disease',$allfields->pres_disease)}}
                            {{ Form::hidden('patient_id',$allfields->patient_id)}}
                            {{ Form::hidden('doctor_id',$allfields->doctor_id)}}
                            {{ Form::hidden('department_id',$allfields->department_id)}}
                            {{ Form::hidden('weeks',$allfields->weeks)}}
                            {{ Form::hidden('from_date',$allfields->from_date)}}
                            {{ Form::hidden('till_date',$allfields->till_date)}}
                            {{ Form::hidden('dosage',$allfields->dosage)}}
                            {{ Form::hidden('patient_cat',$allfields->patient_cat)}}
                            {{ Form::hidden('description',$allfields->description)}}
                            {{ Form::hidden('medicines',$allfields->medicines)}}
                            </div>
                                                          
                        </div>
                        
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
              
    </div>
</section>

@endsection()