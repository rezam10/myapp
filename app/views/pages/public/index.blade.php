@extends('layouts.public.master')

@section('content')


  <div class="row">
    <section class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
      <div class="home-banner">
<!-- ------------------------------------------------------------------------------- -->
          <div class="container banner-inner center">
          @if(!Auth::check())
          <div id="login-form" class="row well">
      <!--<h4 class="title-divider">Login</h4>
       <p class="alert alert-warning"><small>For staff use only. No public access.</small></p> -->  
      {{ Form::open(array('url' => 'login', 'id' => 'login')) }}
      @if($errors->any())
        <div class="home-login-error">
          <ul>
            @foreach($errors->all() as $error)
              <li><i class="fa fa-times-circle"></i> {{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @elseif(Session::has('login_error'))
          {{ '<div class="alert alert-danger">'.Session::get('login_error').'</div>' }} 
      @elseif(Session::has('success_register'))       
          {{ '<div class="alert alert-success"><span class="glyphicon glyphicon-thumbs-up"> </span> '.Session::get('success_register').'</div>' }}    
      @endif  

      <div id="results"></div>


      <div class="col-sm-12 col-md-12">

      <div class="form-group">
        {{ Form::label('email', 'Username', array('class' => 'control-label')) }}
        {{ Form::text('email', '', array('placeholder' => '', 'class' => 'form-control input-small')) }}
      </div>

      <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
        {{ Form::password('password', array('placeholder' => '', 'class' => 'form-control input-small')) }}  
      </div>

      <div class="form-group">
        {{ Form::submit('Login', array('class' => 'btn btn-transparent btn-mini btn-block', 'name' => 'submit')) }} 
      </div>

      </div>
        {{ Form::close() }}
    </div>
    @endif
<!-- ------------------------------------------------------------------------------ -->
      </div>
      </div>  
    </section>
  </div>

	<!-- <div class="row">
	  	<section class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
		    <div class="blue-box">
		      <h4 class="title-divider"><span >Dr Reza Moazzeni</span></h4>
		      <blockquote><em>Consultant Cardiologist</em><small>MD FRACP</small></blockquote>
		    </div> 
	  	</section>  
	</div><br/> -->

	<div class="row row-no-negative-margin">
	  	<section class="col-lg-12">  
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a class="videoLink sublime" href="#video1" style="background-image:url('{{ asset('assets/images/amyloidosis.jpg') }}');">
                  <img src="{{ asset('assets/images/play_icon.png') }}" alt="...">
                </a>
                <div class="caption">
                  <h5><strong>Echocardiogram</strong></h5>
                  <!-- <p><a href="#video1" class="sublime btn btn-primary btn-xs" role="button"><i class="fa fa-play-circle-o"></i> Play Video</a> <a href="#inline1" class="fancybox btn btn-default btn-xs">More Info</a></p> -->
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a class="videoLink sublime" href="#video2" style="background-image:url('{{ asset('assets/images/angio7.jpg') }}');">
                  <img src="{{ asset('assets/images/play_icon.png') }}" alt="...">
                </a>
                <div class="caption">
                  <h5><strong>Coronary Angiogram</strong></h5>                 
                  <!-- <p><a href="#video2" class="sublime btn btn-primary btn-xs" role="button"><i class="fa fa-play-circle-o"></i> Play Video</a> <a href="#inline2" class="fancybox btn btn-default btn-xs" role="button">More Info</a></p> -->
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a class="videoLink sublime" href="#video3" style="background-image:url('{{ asset('assets/images/toe.jpg') }}');">
                  <img src="{{ asset('assets/images/play_icon.png') }}" alt="...">
                </a>
                <div class="caption">
                  <h5><strong>Trans-Esophageal Echo</strong></h5>                 
                  <!-- <p><a href="#video3" class=" sublime btn btn-primary btn-xs" role="button"><i class="fa fa-play-circle-o"></i> Play Video</a> <a href="#inline3" class="fancybox btn btn-default btn-xs" role="button">More Info</a></p> -->
                </div>
              </div>
            </div>
	  	</section>
	</div><!-- row -->

  <script type="text/javascript">
    $(function() {
        $(".fancybox").fancybox();
    });
  </script>
@include('pages.public._partials.index.fancy')
@stop
