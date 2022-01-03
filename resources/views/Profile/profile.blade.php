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

<section class="content profile-page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
                            <h4 class="mb-0"><strong>{{ $LoggedUserInfo['username'] }}</strong></h4>
                            <span class="text-muted col-white">{{ $LoggedUserInfo['role_id'] }}</span>
                        </div>
                    </div>
                    <div class="profile-sub-header">
                        <div class="box-list">
                            <ul class="text-center">
                                <li> <a href="{{ url('/inbox')}}" class=""><i class="zmdi zmdi-email"></i>
                                    <p>My Inbox</p>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header d-flex">
                        <h2 style="width: 50%;">About Me</h2>
                    </div>
                    <div class="body">
                        <p class="text-default">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Designer <cite title="Source Title">Source Title</cite></small> </blockquote>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">My Post</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="mypost">
                                <div class="wrap-reset">
                                    {{ Form::open(array('route' => 'addpost' , 'method' => 'POST', 'class' => 'mypost-form')) }}
                                        <div class="form-group">
                                            <div class="form-line">
                                                {{ Form::textarea('post',null,array('class' => 'form-control no-resize', 'placeholder'=> 'Write Your Post...'))}}
                                            </div>
                                        </div>
                                        <div class="post-toolbar-b"> {{ Form::submit('Submit',array('class' => 'pull-right btn btn-primary btn-success btn-sm'))}}</div>
                                    

                                        <div class="mypost-list">
                                    @if(count($posts))
                                        @foreach($posts as $list)
                                        <div class="post-box">
                                            <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> {{ $list->created_at}}</span>
                                            <div class="post-img"><img src="images/newsletter-bg.jpg" class="img-fluid" alt /></div>
                                            <div>
                                                <h5>BLOGS</h5>
                                                <p class="mb-0">{{ $list->posts }}</p>
                                                <a class="btn btn-danger btn-sm" href="{{ url('/distroy',$list->id)}}">Delete</a>
                                            </div>
                                        </div>
                                        <hr>
                                    
                                        @endforeach
                                    @endif
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="usersettings">
                               <div class="body">
                                    <h2 class="card-inside-title">Security Settings</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="New Password">
                                                </div>
                                            </div>
                                            <button class="btn btn-raised btn-success btn-sm">Save Changes</button>
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Account Settings</h2>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="E-mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Country">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-12">
                                            <button class="btn btn-raised btn-success">Save Changes</button>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()