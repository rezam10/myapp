
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo3.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>

<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
</div>

<div class="collapse navbar-collapse"  id="my-navbar">
	<ul class="nav nav-justified">
	  <li><a href="{{ url('/') }}"><i class="fa fa-home active"></i></a></li>
	  <li>{{ HTML::link('about', 'About')}}</li>
	  <li>{{ HTML::link('contact', 'Contact')}}</li>
	  @if(!Auth::check())
	  	<li class=""><a href="{{url('login')}}" ><span class="glyphicon glyphicon-log-in small blue"></span> Login</a></li>
	  @else
	  	<li>{{ HTML::link('admin', 'Admin Page')}}</li>
	  	<li>{{ HTML::link('logout', 'Logout')}}</li>  	
	  @endif	
	</ul>
</div>
</div>
</nav>











