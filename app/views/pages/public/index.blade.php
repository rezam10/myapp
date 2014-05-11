@extends('layouts.public.master')

@section('content')

  <div class="row">
    <section class="col-md-10 col-md-offset-1 col-sm-10 col-sm-10-offset-1">
      

        <div class="home-banner">    
            <!-- Login-form -->
            <div class="banner-inner center">
            @if(!Auth::check())
            <div id="login-form" class="row well">

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
            </div>
            <!-- End log-in form -->

        </div>


    
    </section>
  </div>

    <div class="row">
      <div class="col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2"> 
          <div class="blue-box">        
              <a class="videoLink sublime" href="#video1" videofile="amyloidosis" videocaption="Echocardiogram"></a>
              <a class="videoLink sublime" href="#video2" videofile="angio7" videocaption="Coronary Angiogram"></a>
              <a class="videoLink sublime" href="#video3" videofile="toe" videocaption="Trans-Esophageal Echo"></a>
          </div>  
      </div>
    </div>  





  <script type="text/javascript">
    $(function() {
        $(".fancybox").fancybox();
    });
  </script>
@include('pages.public._partials.index.fancy')
@stop
