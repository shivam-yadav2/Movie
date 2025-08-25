@extends('layout.Layout')

@section('title', 'HotFlix')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="#" class="sign__form">
							<a href="{{ asset('index.html') }}" class="sign__logo">
								<img src="{{ asset('assets/img/logo.svg') }}" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>

							<button class="sign__btn" type="button">Sign in</button>

							<span class="sign__delimiter">or</span>

							<div class="sign__social">
								<a class="fb" href="{{ asset('#') }}">Sign in with<i class="ti ti-brand-facebook"></i></a>
								<a class="tw" href="{{ asset('#') }}">Sign in with<i class="ti ti-brand-x"></i></a>
								<a class="gl" href="{{ asset('#') }}">Sign in with<i class="ti ti-brand-google"></i></a>
							</div>

							<span class="sign__text">Don't have an account? <a href="{{ asset('signup.html') }}">Sign up!</a></span>

							<span class="sign__text"><a href="{{ asset('forgot.html') }}">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
@endsection
