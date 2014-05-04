
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/logo3.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>

<p class="btn btn-default navbar-right hidden-xs">Logged in as <a href="#" class="navbar-link">{{ Auth::user()->username }}</a></p>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
</div>

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
      <li class="pull-right login"><a href="{{url('logout')}}" ><i class="fa fa-sign-out small"></i> Logout</a></li> 
  </ul>
</div>
</nav>















        
  
 