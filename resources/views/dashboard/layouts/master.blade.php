<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="It Solutions">
		<meta name="Author" content="Mahmoud Maher">
		<meta name="Keywords" content="It, Solutions"/>

		<!-- Title -->
		<title> {{ __('dashboard.enjazco') }} | @yield('title') </title>

		<!-- Favicon -->
		<link rel="icon" href="{{URL::asset('dashboard/assets/img/brand/favicon.png')}}" type="image/x-icon"/>

		@include('dashboard.layouts.head-styles')
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('dashboard.layouts.main-sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('dashboard.layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')

				@include('dashboard.partials.messages')

				@yield('content')
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		@include('dashboard.layouts.models')
		@include('dashboard.layouts.footer')
		@include('dashboard.layouts.footer-scripts')
	</body>
</html>
