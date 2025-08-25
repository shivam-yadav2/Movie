@extends('layout.Layout')

@section('title', 'HotFlix')

@section('content')


	<!-- home -->
	<section class="home home--bg">
		<div class="container">
			<div class="row">
				<!-- home title -->
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>
				</div>
				<!-- end home title -->

				<!-- home carousel -->
				<div class="col-12">
					<div class="home__carousel splide splide--home">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
								<i class="ti ti-chevron-left"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
								<i class="ti ti-chevron-right"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover12.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">The Edge of Tomorrow</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Action</a>
												<a href="{{ asset('#') }}">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover2.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover8.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.9</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Green Hell</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Romance</a>
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover9.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.8</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Survival Spliton</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover13.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">9.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">The Chebod</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover5.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.7</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Shadow</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end home carousel -->
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<!-- menu btn -->
						<button class="filter__menu" type="button"><i class="ti ti-filter"></i>Filter</button>
						<!-- end menu btn -->

						<!-- filter desk -->
						<div class="filter__items">
							<select class="filter__select" name="genre" id="filter__genre">
								<option value="0">All genres</option>
								<option value="1">Action/Adventure</option>
								<option value="2">Animals</option>
								<option value="3">Animation</option>
								<option value="4">Biography</option>
								<option value="5">Comedy</option>
								<option value="6">Cooking</option>
								<option value="7">Dance</option>
								<option value="8">Documentary</option>
								<option value="9">Drama</option>
								<option value="10">Education</option>
								<option value="11">Entertainment</option>
								<option value="12">Family</option>
								<option value="13">Fantasy</option>
								<option value="14">History</option>
								<option value="15">Horror</option>
								<option value="16">Independent</option>
								<option value="17">International</option>
								<option value="18">Kids</option>
								<option value="19">Medical</option>
								<option value="20">Military/War</option>
								<option value="21">Music</option>
								<option value="22">Mystery/Crime</option>
								<option value="23">Nature</option>
								<option value="24">Paranormal</option>
								<option value="25">Politics</option>
								<option value="26">Racing</option>
								<option value="27">Romance</option>
								<option value="28">Sci-Fi/Horror</option>
								<option value="29">Science</option>
								<option value="30">Science Fiction</option>
								<option value="31">Science/Nature</option>
								<option value="32">Spanish</option>
								<option value="33">Travel</option>
								<option value="34">Western</option>
							</select>

							<select class="filter__select" name="quality" id="filter__quality">
								<option value="0">Any quality</option>
								<option value="1">HD 1080</option>
								<option value="2">HD 720</option>
								<option value="3">DVD</option>
								<option value="4">TS</option>
							</select>

							<select class="filter__select" name="rate" id="filter__rate">
								<option value="0">Any rating</option>
								<option value="1">from 3.0</option>
								<option value="2">from 5.0</option>
								<option value="3">from 7.0</option>
								<option value="4">Golder Star</option>
							</select>

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Relevance</option>
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
							</select>
						</div>
						<!-- end filter desk -->
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">Apply</button>
						<!-- end filter btn -->

						<!-- amount -->
						<span class="filter__amount">Showing 18 of 1713</span>
						<!-- end amount -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->
	
	<!-- catalog -->
	<div class="section section--catalog">
		<div class="container">
			<div class="row">
				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.4</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover2.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">7.1</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover3.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--red">6.3</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Whitney</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Romance</a>
								<a href="{{ asset('#') }}">Drama</a>
								<a href="{{ asset('#') }}">Music</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover4.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--yellow">6.9</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
								<a href="{{ asset('#') }}">Drama</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover5.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.4</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover6.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">7.1</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover7.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">7.1</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover8.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--red">5.5</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover9.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--yellow">6.7</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
								<a href="{{ asset('#') }}">Drama</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover10.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--red">5.6</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Whitney</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Romance</a>
								<a href="{{ asset('#') }}">Drama</a>
								<a href="{{ asset('#') }}">Music</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover11.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">9.2</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover12.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.4</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover13.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.0</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover14.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">7.2</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover15.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--yellow">5.9</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Whitney</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Romance</a>
								<a href="{{ asset('#') }}">Drama</a>
								<a href="{{ asset('#') }}">Music</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover16.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.3</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
								<a href="{{ asset('#') }}">Drama</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover17.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">8.0</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Action</a>
								<a href="{{ asset('#') }}">Triler</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->

				<!-- item -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="{{ asset('assets/img/covers/cover18.jpg') }}" alt="">
							<a href="{{ route('details') }}" class="item__play">
								<i class="ti ti-player-play-filled"></i>
							</a>
							<span class="item__rate item__rate--green">7.1</span>
							<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
							<span class="item__category">
								<a href="{{ asset('#') }}">Comedy</a>
							</span>
						</div>
					</div>
				</div>
				<!-- end item -->
			</div>

			<div class="row">
				<!-- paginator -->
				<div class="col-12">
					<!-- paginator mobile -->
					<div class="paginator-mob">
						<span class="paginator-mob__pages">18 of 1713</span>

						<ul class="paginator-mob__nav">
							<li>
								<a href="{{ asset('#') }}">
									<i class="ti ti-chevron-left"></i>
									<span>Prev</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('#') }}">
									<span>Next</span>
									<i class="ti ti-chevron-right"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- end paginator mobile -->

					<!-- paginator desktop -->
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="{{ asset('#') }}"><i class="ti ti-chevron-left"></i></a>
						</li>
						<li class="paginator__item"><a href="{{ asset('#') }}">1</a></li>
						<li class="paginator__item paginator__item--active"><a href="{{ asset('#') }}">2</a></li>
						<li class="paginator__item"><a href="{{ asset('#') }}">3</a></li>
						<li class="paginator__item"><a href="{{ asset('#') }}">4</a></li>
						<li class="paginator__item"><span>...</span></li>
						<li class="paginator__item"><a href="{{ asset('#') }}">87</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="{{ asset('#') }}"><i class="ti ti-chevron-right"></i></a>
						</li>
					</ul>
					<!-- end paginator desktop -->
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Expected premiere</h2>
						<a href="{{ asset('catalog.html') }}" class="section__view section__view--carousel">View All</a>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
								<i class="ti ti-chevron-left"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
								<i class="ti ti-chevron-right"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Action</a>
												<a href="{{ asset('#') }}">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover2.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover3.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">6.3</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Whitney</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Romance</a>
												<a href="{{ asset('#') }}">Drama</a>
												<a href="{{ asset('#') }}">Music</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover4.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.9</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover5.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Action</a>
												<a href="{{ asset('#') }}">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover6.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover7.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover8.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">5.5</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Action</a>
												<a href="{{ asset('#') }}">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover9.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.7</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
												<a href="{{ asset('#') }}">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover10.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">5.6</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Whitney</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Romance</a>
												<a href="{{ asset('#') }}">Drama</a>
												<a href="{{ asset('#') }}">Music</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover11.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">9.2</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">Benched</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="{{ asset('assets/img/covers/cover12.jpg') }}" alt="">
											<a href="{{ route('details') }}" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="{{ asset('#') }}">Action</a>
												<a href="{{ asset('#') }}">Triler</a>
											</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section__title">Select your plan</h2>
				</div>
			</div>

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
	</section>
	<!-- end section -->

	<!-- footer -->
@endsection
