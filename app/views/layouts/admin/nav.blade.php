<!-- <header class="masthead">
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo-lemon.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>
<ul class="nav nav-justified nav-admin">
  <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
  <li>{{ HTML::link('upload', 'Upload File')}}</li>
  <li style="background:#8E2800;">{{ HTML::link('logout', 'Logout')}}</li>
</ul>
</header> -->





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

<!-- <a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo-lemon.png') }}" class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a> -->

<div class="collapse navbar-collapse" id="my-navbar">
	<ul class="nav nav-justified pull-right">
	  	<li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
  		<li>{{ HTML::link('upload', 'Upload File')}}</li>
  		<li style="background:#8E2800;">{{ HTML::link('logout', 'Logout')}}</li>	
	</ul>
</div>
</nav>
</header>