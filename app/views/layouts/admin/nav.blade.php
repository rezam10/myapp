<!-- <header class="masthead">
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo-lemon.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>
<ul class="nav nav-justified nav-admin">
  <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
  <li>{{ HTML::link('upload', 'Upload File')}}</li>
  <li style="background:#8E2800;">{{ HTML::link('logout', 'Logout')}}</li>
</ul>
</header> -->

<header class="masthead">
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo3.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>
<button type="button" class="btn btn-danger navbar-btn navbar-right top-login">{{ HTML::link('logout', 'Logout')}}</button>
<p class="btn btn-info navbar-right top-login">Welcome <a href="#" class="navbar-link">{{ Auth::user()->username }}</a></p>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
</div>

<!-- <a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo-lemon.png') }}" class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a> -->

<div class="collapse navbar-collapse" id="my-navbar">
	<ul class="nav nav-justified">
	  	<li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
  		<li>{{ HTML::link('upload', 'Upload File')}}</li>

      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Echocardiogram <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>{{ HTML::link('echoform', 'Echo Report Template')}}</a></li>
            <li>{{ HTML::link('echoreports', 'Echo Reports')}}</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
      </li>

  		<li>{{ HTML::link('echoform', 'Echo Report')}}</li>	
	</ul>
</div>
</nav>
</header>