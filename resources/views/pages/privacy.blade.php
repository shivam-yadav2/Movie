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
						<h1 class="section__title section__title--head">Privacy policy</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="{{ asset('index.html') }}">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Privacy policy</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- privacy -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section text -->
				<div class="col-12">
					<p class="section__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

					<p class="section__text">Many desktop publishing packages and <a href="{{ asset('#') }}">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

					<p class="section__text">All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<!-- end section text -->

				<!-- section list -->
				<div class="col-12">
					<div class="section__list">
						<ol>
							<li>
								<h4>Determination of personal information of users</h4>
								<ol>
									<li>If you are going to use a passage of Lorem Ipsum:
										<ol>
											<li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</li>
											<li>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
										</ol>
									</li>
									<li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
									<li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
								</ol>
							</li>

							<li>
								<h4>Reasons for collecting and processing user personal information</h4>
								<ol>
									<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>
									<li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet:
										<ol>
											<li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged;</li>
											<li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages;</li>
											<li>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like);</li>
											<li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text;</li>
										</ol>
									</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>
				<!-- end section list -->
			</div>
		</div>
	</section>
	<!-- end privacy -->

	<!-- footer -->
@endsection
