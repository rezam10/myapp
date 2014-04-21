@extends('layouts.admin.master')

@section('content')
<div class="row">
  <section class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
	<div class="blue-box">
		<h4 class="title-divider">Welcome {{ Auth::user()->username }}</h4>
		<br/>



		<div id="inline1" style="display:none;">
			https://cloudcardiology2.box.com/s/94lc6jloi6mh2dtlijol
		</div>
		

	<div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th></th>
          <th>
            Patient
          </th>
          <th>
            Records
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>Trevor Brennen</td>
          <td colspan="3"><a href="https://cloudcardiology.box.com/s/wo5jzz6puyfxh905waeb" data-fancybox-type="iframe" class="fancybox"><i class="fa fa-folder"></i></a></td>
        </tr>
        <tr>
          <th>2</th>
          <td>John Doe</td>
          <td><i class="fa fa-folder"></i></td>
        </tr>
        <tr>
          <th>3</th>
          <td>Ali Razmi</td>
          <td><i class="fa fa-folder"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  </section>
  </div>









































	</div>
	<script type="text/javascript">
    $(function() {
        $(".fancybox").fancybox({
        	width		: '70%',
        	height		: '70%'
        });
    });
  </script>
@stop