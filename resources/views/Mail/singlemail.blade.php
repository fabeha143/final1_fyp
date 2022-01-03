@extends('layouts.master')
@section('content')
<section class="content email-page">
    <div class="container-fluid">
        <div class="row">            
            <div class="col-lg-12">
                <div class="body mail-single">
                    @if(count($singlemail))
                        @foreach($singlemail as $list)
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            {!! Form::open(array('url' => route('inbox.destroy', ['inbox' => $list->id]), 'method' => 'delete')) !!}		
                            <button class="btn btn-raised bg-red waves-effect custom col-white"><i class="zmdi zmdi-delete"></i></button>
                            
                                                    {!! Form::close() !!}</li>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="m-t-0">{{ $list->subject }}</h3>
                            <div class="media">
                                <div class="media-body">
                                    <p class="m-b-0"> <span class="text-muted">from</span> <a href="javascript:;" class="text-default">{{ $list->user->email }}</a> <span class="text-muted text-sm pull-right">{{ $list->created_at }}</span> </p>
                                    <p class="m-b-0"><span class="text-muted">to</span>Me</p>
                                </div>
                            </div>
                            <hr>
                            </div>
                            <div class="col-lg-12">
                                <p>{{ $list->message }}</p>
                                <hr>
                            </div>
                        
                        <div class="col-lg-12">
                            <div class="panel-heading m-t-20">
                            <div class="m-b-10 m-t-10"> Click here to <a href="{{ route('/inbox/create')}}">Reply</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()