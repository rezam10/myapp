
<header class="masthead">
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo-lemon.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>
</div>

<!-- <a class="navbar-brand" href="#"><i style="color:#888;font-size:0.6em;" class="fa fa-cloud"></i><strong>Cloud<span style="color:#444;">Cardiology</span></strong></a> -->

<div class="collapse navbar-collapse" id="my-navbar">
	<ul class="nav nav-justified pull-right">
	  <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
	  <li>{{ HTML::link('about', 'About')}}</li>
	  <li>{{ HTML::link('contact', 'Contact')}}</li>
	  @if(!Auth::check())
	  	<li>{{ HTML::link('login', 'Login')}}</li>
	  @else
	  	<li>{{ HTML::link('admin', 'Admin Page')}}</li>
	  	<li style="background:#8E2800;">{{ HTML::link('logout', 'Logout')}}</li>  	
	  @endif	
	</ul>
</div>
</nav>
</header>










