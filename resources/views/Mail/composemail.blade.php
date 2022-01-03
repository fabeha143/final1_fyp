@php
   if($LoggedUserInfo->role_id == 'admin') {
      $layoutDirectory = 'layouts.master';
      $yeild = 'content';
   } elseif ($LoggedUserInfo->role_id == 'doctor') {
      $layoutDirectory = 'layouts.doctormaster';
      $yeild = 'contentdoctor';
   } else {
      $layoutDirectory = 'layouts.attandantmaster';
      $yeild = 'contentattendant';
   }
@endphp

@extends($layoutDirectory)

@section($yeild)

<section class="content email-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                {{ Form::open(array('route' => '/inbox/send' , 'method' => 'POST' , 'class' => 'body')) }}
                @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-line">
                                {!! Form::text('from', $data->email , array('class' => 'form-control')) !!}
                                
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                {!! Form::text('to', null , array('class' => 'form-control' , 'placeholder' => 'To')) !!}
                                
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                {!! Form::text('subject', null ,array('class' => 'form-control' , 'placeholder' => 'Subject')) !!}
                                </div>
                            </div>
                            <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::textarea('message', null ,array('class' => 'form-control' , 'placeholder' => 'Message')) !!}

                                </div>
                            </div>
                               
                        </div>               
                                              
                        <div class="col-lg-12">
                        {{ Form::submit('Send',array('class' => 'btn btn-large btn-primary openbutton' , 'style' => 'width:500px;'))}}
                        </div>

                    </div>                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection()