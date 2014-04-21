@extends('layouts.public.master')

@section('content')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <div class="blue-box">
      <h4 class="title-divider">Register</h4>

    {{ Form::open(array('url'=>'register', 'id' => 'register')) }}
  
  @if($errors->any())
      <div class="alert alert-danger"> 
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div> 
  @endif    

  <div id="results"> </div>  
 	
 	<div class="col-lg-10 col-lg-offset-1">
 	<div class="form-group">
   {{ Form::label('username', 'Username', array('class' => 'control-label form-info')) }}
   {{ Form::text('username', null, array('class'=>'form-control input-small', 'placeholder'=>'', 'id' => 'username')) }}
   </div>
  <!--  <div class="form-group">
   {{ Form::text('lastname', null, array('class'=>'form-control input-small', 'placeholder'=>'Last Name')) }}
   </div> -->
   <div class="form-group">
   {{ Form::label('email', 'Email', array('class' => 'control-label form-info')) }}
   {{ Form::text('email', null, array('class'=>'form-control input-small', 'placeholder'=>'', 'id' => 'email')) }}
   </div>
   <div class="form-group">
   {{ Form::label('password', 'Password', array('class' => 'control-label form-info')) }}
   {{ Form::password('password', array('class'=>'form-control input-small', 'placeholder'=>'', 'id' => 'password')) }}
   </div>
<!--    <div class="form-group">
   {{ Form::password('password_confirmation', array('class'=>'form-control input-small', 'placeholder'=>'Confirm Password')) }}
   </div> -->
   <div class="form-group"> 
   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
   </div>
   </div>
	{{ Form::close() }}

    </div>
  </div>  
</div>

<script type="text/javascript">
  $(function(){ 
    $("#register").on("submit", function(e){
          e.preventDefault(); 
          var results = ''; 
          var data = $(this).serializeArray();

          $.post('register', data, function(data){ 
            if (data == 'redirect') {
                  window.location.href = 'login';
                  }else{  
                  $.each(data, function(){ 
                      results += '<li>'+this+'</li>';});             
                  $("#results").addClass("alert alert-danger").html('<ul>'+results+'</ul>');                  
                }
}); }); });
</script>

@stop























