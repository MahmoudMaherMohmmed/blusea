@extends('auth.layouts.master')

@section('title') {{__('auth.login')}} @endsection

@section('css')
	<!-- Sidemenu-respoansive-tabs css -->
	<link href="{{URL::asset('dashboard/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row no-gutter">
			<!-- The image half -->
			<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
				<div class="row wd-100p mx-auto text-center">
					<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
						<img src="{{URL::asset('dashboard/assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
					</div>
				</div>
			</div>
			<!-- The content half -->
			<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
				<div class="login d-flex align-items-center py-2">
					<!-- Demo content-->
					<div class="container p-0" style="margin-top: -5em;">
						<div class="row">
							<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
								<div class="card-sigin">
									<div class="mb-5 d-flex"> <a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/logo-dark.png" class="sign-favicon ht-90 wd-300" alt="logo"></a></div>
									<div class="card-sigin">
										<div class="main-signup-header">
											<h2>{{ __('auth.welcome')}}</h2>
											<h5 class="font-weight-semibold mb-4">{{ __('auth.pleaseSingInToContinue')}}</h5>
											<form method="POST" action="{{ route('login') }}">
												@csrf
												<div class="form-group">
													<label for="email">{{ __('auth.attributes.email') }}</label>
													<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus autocomplete="email" placeholder="{{ __('auth.attributes.emailPlaceholder') }}" required>
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group">
													<label for="password">{{ __('auth.attributes.password') }}</label>
													<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="{{ __('auth.attributes.passwordPlaceholder') }}" required>
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<button class="btn btn-main-primary btn-block">{{ __('auth.login') }}</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End -->
				</div>
			</div><!-- End -->
		</div>
	</div>
@endsection

@section('js') @endsection
