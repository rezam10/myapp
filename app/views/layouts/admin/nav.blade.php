<header class="masthead">
<a class="brand" href="http://cloudcardiology.com.au"><img src="{{ asset('assets/images/cloud2.png')}} " class="img-responsive logo" alt="CloudCardiology_Sydney_Moazzeni"></a>
<ul class="nav nav-justified nav-admin">
  <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
  <li>{{ HTML::link('upload', 'Upload File')}}</li>
  <li style="background:#8E2800;">{{ HTML::link('logout', 'Logout')}}</li>
</ul>
</header>