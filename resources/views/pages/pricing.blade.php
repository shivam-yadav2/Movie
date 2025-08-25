@extends('layout.Layout')

@section('title', 'HotFlix')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="{{ asset('index.html') }}" class="header__logo">
							<img src="{{ asset('assets/img/logo.svg') }}" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="{{ asset('#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="{{ asset('index.html') }}">Home style 1</a></li>
									<li><a href="{{ asset('index2.html') }}">Home style 2</a></li>
									<li><a href="{{ asset('index3.html') }}">Home style 3</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="{{ asset('#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="{{ asset('catalog.html') }}">Catalog style 1</a></li>
									<li><a href="{{ asset('catalog2.html') }}">Catalog style 2</a></li>
									<li><a href="{{ route('details') }}">Details Movie</a></li>
									<li><a href="{{ asset('details2.html') }}">Details TV Series</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="{{ asset('pricing.html') }}" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="{{ asset('#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="{{ asset('about.html') }}">About Us</a></li>
									<li><a href="{{ asset('profile.html') }}">Profile</a></li>
									<li><a href="{{ asset('actor.html') }}">Actor</a></li>
									<li><a href="{{ asset('contacts.html') }}">Contacts</a></li>
									<li><a href="{{ asset('faq.html') }}">Help center</a></li>
									<li><a href="{{ asset('privacy.html') }}">Privacy policy</a></li>
									<li><a href="{{ asset('https://hotflix.volkovdesign.com/admin/index.html') }}" target="_blank">Admin pages</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link header__nav-link--more" href="{{ asset('#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="{{ asset('signin.html') }}">Sign in</a></li>
									<li><a href="{{ asset('signup.html') }}">Sign up</a></li>
									<li><a href="{{ asset('forgot.html') }}">Forgot password</a></li>
									<li><a href="{{ asset('404.html') }}">404 Page</a></li>
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="Search...">
								<button class="header__search-button" type="button">
									<i class="ti ti-search"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="ti ti-x"></i>
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="ti ti-search"></i>
							</button>

							<!-- dropdown -->
							<div class="header__lang">
								<a class="header__nav-link" href="{{ asset('#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="{{ asset('#') }}">English</a></li>
									<li><a href="{{ asset('#') }}">Spanish</a></li>
									<li><a href="{{ asset('#') }}">French</a></li>
								</ul>
							</div>
							<!-- end dropdown -->

							<a href="{{ asset('signin.html') }}" class="header__sign-in">
								<i class="ti ti-login"></i>
								<span>sign in</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Pricing plan</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="{{ asset('index.html') }}">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Pricing plan</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
	
	<!-- pricing -->
	<div class="section section--notitle">
		<div class="container">
			<div class="row">
				<!-- plan -->
				<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
					<div class="plan">
						<h3 class="plan__title">Basic</h3>
						<span class="plan__price">Free</span>
						<ul class="plan__list">
							<li class="plan__item"><i class="ti ti-circle-check"></i> 7 days</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> 720p Resolution</li>
							<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited Availability</li>
							<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Desktop Only</li>
							<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited Support</li>
						</ul>
						<a href="{{ asset('signin.html') }}" class="plan__btn">Register</a>
					</div>
				</div>
				<!-- end plan -->

				<!-- plan -->
				<div class="col-12 col-md-12 col-lg-4 order-md-1 order-lg-2">
					<div class="plan plan--orange">
						<h3 class="plan__title">Premium</h3>
						<span class="plan__price">$34.99 <sub>/ month</sub></span>
						<ul class="plan__list">
							<li class="plan__item"><i class="ti ti-circle-check"></i> 1 Month</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> Full HD</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
							<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> TV & Desktop</li>
							<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> 24/7 Support</li>
						</ul>
						<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
					</div>
				</div>
				<!-- end plan -->

				<!-- plan -->
				<div class="col-12 col-md-6 col-lg-4 order-md-3">
					<div class="plan plan--red">
						<h3 class="plan__title">Cinematic</h3>
						<span class="plan__price">$49.99 <sub>/ month</sub></span>
						<ul class="plan__list">
							<li class="plan__item"><i class="ti ti-circle-check"></i> 2 Months</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> Ultra HD</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> Any Device</li>
							<li class="plan__item"><i class="ti ti-circle-check"></i> 24/7 Support</li>
						</ul>
						<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
					</div>
				</div>
				<!-- end plan -->
			</div>
		</div>
	</div>
	<!-- end pricing -->

	<!-- features -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-xl-11">
					<h2 class="section__title">Our Features</h2>
					<p class="section__text">Welcome to HotFlix movie site, the ultimate destination for all film enthusiasts. Immerse yourself in a world of captivating stories, stunning visuals, and unforgettable performances. Explore our extensive library of movies, spanning across genres, eras, and cultures.</p>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-badge-hd"></i>
						<h3 class="feature__title">Ultra HD</h3>
						<p class="feature__text">Experience movies like never before with our Ultra HD feature. Immerse yourself in stunning visuals, vibrant colors, and crystal-clear detail.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-movie"></i>
						<h3 class="feature__title">Large movie database</h3>
						<p class="feature__text">Discover a vast and diverse collection of movies in our extensive database. With thousands of titles to choose from, you'll never run out of options.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-device-tv"></i>
						<h3 class="feature__title">Online TV</h3>
						<p class="feature__text">Expand your entertainment horizons with our Online TV. Stream live TV channels, catch up on your favorite shows, and enjoy a wide range of television content online.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-ticket"></i>
						<h3 class="feature__title">Early access to new items</h3>
						<p class="feature__text">Be the first to experience the latest movies and exclusive content with our Early Access feature. Get a sneak peek into upcoming releases, gain access to special screenings, and stay ahead of the curve.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-cast"></i>
						<h3 class="feature__title">Airplay</h3>
						<p class="feature__text">Seamlessly stream movies from your device to the big screen with Airplay integration. Experience the cinematic magic in the comfort of your living room and share the excitement with friends and family.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="ti ti-language"></i>
						<h3 class="feature__title">Multi language subtitles</h3>
						<p class="feature__text">Break language barriers and enjoy movies from around the world with our multi-language subtitles. Explore different cultures, expand your cinematic horizons, and appreciate the beauty of global cinema.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end features -->

	<!-- partners -->
	<section class="section section--pt">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-xl-9">
					<h2 class="section__title">Our Partners</h2>
					<p class="section__text">We strive for long-term cooperation with our partners, and our team is always ready to meet and consider new opportunities for mutual benefits. If you would like to become our partner, we are always open to new offers and look forward to hearing from you. <a href="{{ asset('contacts.html') }}">Become a partner</a></p>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/themeforest-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/audiojungle-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/codecanyon-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/photodune-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/activeden-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-lg-2">
					<a href="{{ asset('#') }}" class="partner">
						<img src="{{ asset('assets/img/partners/3docean-light-background.png') }}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- footer -->
@endsection
