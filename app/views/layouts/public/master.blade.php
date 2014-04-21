<!DOCTYPE html>
<html lang="en">

	@include('layouts.public.head')

<body>
	<section class="container">

		@include('layouts.public.nav')
		@yield('content')



	@include('layouts.public.footer')
</body>
</html>