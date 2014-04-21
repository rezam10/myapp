@extends('layouts.public.master')

@section('content')

<div class="row row-no-negative-margin">
  <section class="col-lg-7">
    <div class="blue-box">
      <h4 class="title-divider">Enquire</h4>
      <!-- <p class="alert alert-info"><small>You can ask clinical or non-clinical questions here. Enquiries will be sent directly to Dr Moazzeni.</small></p> -->
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

  <section class="col-lg-5">
      <div class="blue-bo">
      <!-- <h4 class="title-divider">Practice Locations</h4> -->

      <div class="row">
          <div class="col-lg-12">
          <address>
            <a class="various" data-fancybox-type="iframe" href="https://maps.google.com.au/maps?oe=utf-8&client=firefox-a&ie=UTF-8&q=sydney+adventist+hospital&fb=1&gl=au&hq=sydney+adventist+hospital&hnear=sydney+adventist+hospital&cid=0,0,1081283275368958256&ei=4E5yUr_QIcOKlQWm5YEQ&ved=0CKABEPwS"><small><i class="fa fa-h-square"></i></small> <strong>Sydney Adventist Hospital</strong></a><br>
            <blockquote>Suite 504, 185 Fox Valley Road<br>
            Wahroonga, NSW<br>
            <abbr title="Phone">P :</abbr> (02) 9460 8733</blockquote>
          </address>
          </div>
      </div> 

      <div class="row">
          <div class="col-lg-12">
           <address>
            <a class="various" data-fancybox-type="iframe" href="https://maps.google.com.au/maps?oe=utf-8&client=firefox-a&ie=UTF-8&q=sydney+adventist+hospital&fb=1&gl=au&hq=sydney+adventist+hospital&hnear=sydney+adventist+hospital&cid=0,0,1081283275368958256&ei=4E5yUr_QIcOKlQWm5YEQ&ved=0CKABEPwS"><small><i class="fa fa-plus-square"></i></small> <strong>The Hills Heart Centre</strong></a><br>
            <blockquote>Suite 8, 33 Old Northern Road<br>
            Baulkham Hills, NSW<br>
            <abbr title="Phone">P :</abbr> (02) 9686 2422</blockquote>
          </address>
          </div>
      </div>      

      <div class="row">
          <div class="col-lg-12">
          <address>
            <a class="various" data-fancybox-type="iframe" href="https://maps.google.com.au/maps?oe=utf-8&client=firefox-a&ie=UTF-8&q=sydney+adventist+hospital&fb=1&gl=au&hq=sydney+adventist+hospital&hnear=sydney+adventist+hospital&cid=0,0,1081283275368958256&ei=4E5yUr_QIcOKlQWm5YEQ&ved=0CKABEPwS"><small><i class="fa fa-plus-square"></i></small> <strong>Merrylands Heart Centre</strong></a><br>
            <blockquote>Suite 2, 33 Sherwood Road<br>
            Merrylands, NSW<br>
            <abbr title="Phone">P :</abbr> (02) 9892 4900</blockquote>
          </address>
          </div>
      </div>
  </div><!-- blue-box  -->    
 </section><!-- main -->
</div><!-- row -->
@stop