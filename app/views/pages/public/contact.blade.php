@extends('layouts.public.master')

@section('content')

<div class="row row-no-negative-margin">
  <section class="col-lg-7">
    <div class="blue-box">
      <h4 class="title-divider"><span><i class="fa fa-share"></i> Enquire</span></h4>
      {{ Form::open(array('url' => 'contact')) }} 
        
        @if($errors->any())
	      	<div class="alert alert-danger">
	      		<ul>
	            @foreach($errors->all() as $error)
	              <li>{{ $error }}</li>
	            @endforeach
	          </ul>
	      	</div>
      	@elseif(Session::has('success'))
      		{{ '<div class="alert alert-success"><em>'.Session::get('success').'</em></div>' }}	
      	@endif

        <div class="row">
          <div class="col-lg-8">

            <div class="form-group">     
              {{ Form::label('name', 'Full Name', array('class' => 'control-label form-info')) }}
              {{ Form::text('name', '', array('class' => 'form-control input-sm')) }} 
            </div>

            <div class="form-group">
              {{ Form::label('email', 'Email', array('class' => 'control-label form-info')) }}
              {{ Form::text('email', '', array('class' => 'form-control input-sm')) }}     
            </div>

          </div><!-- col-lg-8 -->
        </div><!-- row -->

      
        <div class="form-group">
        	{{ Form::label('message', 'Message', array('class' => 'control-label form-info')) }}
            {{ Form::textarea('message', '', array('class' => 'form-control input-small', 'rows' => 5)) }}
        </div>

        <div class="form-group">
        	{{ Form::submit('Send Message', array('class' => 'btn btn-primary btn-sm', 'name' => 'submit')) }}
        </div>

      {{ Form::close() }}
  </div>
 </section><!-- main -->

  <section class="col-md-4 col-md-offset-1">
        
          <address>
            <a class="various" data-fancybox-type="iframe" href="https://maps.google.com.au/maps?oe=utf-8&client=firefox-a&ie=UTF-8&q=sydney+adventist+hospital&fb=1&gl=au&hq=sydney+adventist+hospital&hnear=sydney+adventist+hospital&cid=0,0,1081283275368958256&ei=4E5yUr_QIcOKlQWm5YEQ&ved=0CKABEPwS"><small><i class="fa fa-th-large"></i></small> <strong>Sydney Adventist Hospital</strong></a><br>
            <blockquote class="address">Suite 504, 185 Fox Valley Road<br>
            Wahroonga, NSW<br>
            02 9460 8733</blockquote>
          </address>
            
 </section><!-- main -->
</div><!-- row -->
@stop