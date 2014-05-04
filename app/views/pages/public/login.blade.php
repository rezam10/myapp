@extends('layouts.public.master')

@section('content')
<div class="row">
  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <div class="blue-box">
      <h4 class="title-divider"><span><i class="fa fa-sign-in"></i> Login</span></h4>
      {{ Form::open(array('url' => 'login', 'id' => 'login')) }}
      @if($errors->any())
      	<div class="alert alert-danger">
      		<ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
      	</div>
      @elseif(Session::has('login_error'))
      		{{ '<div class="alert alert-danger">'.Session::get('login_error').'</div>' }}	
      @elseif(Session::has('success_register'))       
          {{ '<div class="alert alert-success"><span class="glyphicon glyphicon-thumbs-up"> </span> '.Session::get('success_register').'</div>' }}    
      @endif	

      <div id="results"></div>


      <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

      <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => 'control-label form-info')) }}
        {{ Form::text('email', '', array('placeholder' => '', 'class' => 'form-control input-small')) }}
      </div>

      <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'control-label form-info')) }}
        {{ Form::password('password', array('placeholder' => '', 'class' => 'form-control input-small')) }}  
      </div>

      <div class="form-group">
      	{{ Form::submit('Login', array('class' => 'btn btn-primary btn-mini btn-block', 'name' => 'submit')) }} 
      </div>

      </div>
      	{{ Form::close() }}
    </div>    
  </div>  
</div><!-- row -->

<script type="text/javascript">
  $(function(){ 
    $("#login").on("submit", function(e){
          e.preventDefault(); 
          var results = ''; 
          var data = $(this).serializeArray();

          $.post('login', data, function(data){
            if(data == 'redirect'){window.location.href = 'admin';
              }else{ 
              $.each(data, function(){ 
                  results += '<li>'+this+'</li>';});
                  $("#results").addClass( "alert alert-danger" ).html('<ul>'+results+'</ul>'); 
              }                       
}); }); });
</script>

@stop