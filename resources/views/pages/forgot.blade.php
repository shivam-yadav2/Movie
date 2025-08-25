@extends('layout.Layout')

@section('title', 'HotFlix')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- forgot form -->
						<form action="#" class="sign__form">
							<a href="{{ asset('index.html') }}" class="sign__logo">
								<img src="{{ asset('assets/img/logo.svg') }}" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="{{ asset('privacy.html') }}">Privacy Policy</a></label>
							</div>

							<button class="sign__btn" type="button">Send</button>

							<span class="sign__text">We will send a password to your Email</span>
						</form>
						<!-- end forgot form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
@endsection
