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
						<h1 class="section__title section__title--head">Contacts</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="{{ asset('index.html') }}">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Contacts</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- contacts -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">Contact Form</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form action="#" class="sign__form sign__form--full">
								<div class="row">
									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Name</label>
											<input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="subject">Subject</label>
											<input id="subject" type="text" name="subject" class="sign__input" placeholder="Partnership">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="message">Message</label>
											<textarea id="message" name="message" class="sign__textarea" placeholder="Type your message..."></textarea>
										</div>
									</div>

									<div class="col-12">
										<button type="button" class="sign__btn sign__btn--small">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<!-- contacts -->
						<div class="col-12">
							<h2 class="section__title section__title--mt">Get In Touch</h2>

							<p class="section__text">We are always happy to help and provide more information about our services. You can contact us through email, phone, or by filling out the form on our website. Thank you for considering us!</p>

							<ul class="contacts__list">
								<li><a href="{{ asset('tel:+18002345678') }}">+1 800 234 56 78</a></li>
								<li><a href="{{ asset('mailto:support@hotflix.com') }}">support@hotflix.template</a></li>
							</ul>

							<div class="contacts__social">
								<a href="{{ asset('#') }}"><i class="ti ti-brand-facebook"></i></a>
								<a href="{{ asset('#') }}"><i class="ti ti-brand-x"></i></a>
								<a href="{{ asset('https://www.instagram.com/volkov_des1gn/') }}" target="_blank"><i class="ti ti-brand-instagram"></i></a>
								<a href="{{ asset('#') }}"><i class="ti ti-brand-discord"></i></a>
								<a href="{{ asset('#') }}"><i class="ti ti-brand-telegram"></i></a>
								<a href="{{ asset('#') }}"><i class="ti ti-brand-tiktok"></i></a>
							</div>
						</div>
						<!-- end contacts -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contacts -->

	<!-- footer -->
@endsection
