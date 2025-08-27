@extends('layout.Layout')

@section('title', 'Prizm Production')

@section('content')


    <!-- page title -->
    <section class="section section--first">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__wrap">
                        <!-- section title -->
                        <h1 class="section__title section__title--head">About Us</h1>
                        <!-- end section title -->

                        <!-- breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs__item"><a href="{{ asset('index.html') }}">Home</a></li>
                            <li class="breadcrumbs__item breadcrumbs__item--active">About Us</li>
                        </ul>
                        <!-- end breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title"><b>Prizm Production</b> – Best Place for Movies</h2>
                    <p class="section__text">Welcome to <b>Prizm Production .</b>
                        At PRIZM PRODUCTION, we understand the market and how it has evolved, this in returns is what sets
                            us up./p>
                            <p class="section__text">We genuinely love what we do, and for that specific reason, the
                                work process is not much of a dense task to us as much as it is a
                                whimsical journey paved with tranquility and harmony. We simply
                                love what we do therefor we do it with a CREATIVE TEAM.
                            </p>
                </div>
                <!-- end section title -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-badge-hd"></i>
                        <h3 class="feature__title">Ultra HD</h3>
                        <p class="feature__text">Experience movies like never before with our Ultra HD feature. Immerse
                            yourself in stunning visuals, vibrant colors, and crystal-clear detail.</p>
                    </div>
                </div>
                <!-- end feature -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-movie"></i>
                        <h3 class="feature__title">Large movie database</h3>
                        <p class="feature__text">Discover a vast and diverse collection of movies in our extensive database.
                            With thousands of titles to choose from, you'll never run out of options.</p>
                    </div>
                </div>
                <!-- end feature -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-device-tv"></i>
                        <h3 class="feature__title">Online TV</h3>
                        <p class="feature__text">Expand your entertainment horizons with our Online TV. Stream live TV
                            channels, catch up on your favorite shows, and enjoy a wide range of television content online.
                        </p>
                    </div>
                </div>
                <!-- end feature -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-ticket"></i>
                        <h3 class="feature__title">Early access to new items</h3>
                        <p class="feature__text">Be the first to experience the latest movies and exclusive content with our
                            Early Access feature. Get a sneak peek into upcoming releases, gain access to special
                            screenings, and stay ahead of the curve.</p>
                    </div>
                </div>
                <!-- end feature -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-cast"></i>
                        <h3 class="feature__title">Airplay</h3>
                        <p class="feature__text">Seamlessly stream movies from your device to the big screen with Airplay
                            integration. Experience the cinematic magic in the comfort of your living room and share the
                            excitement with friends and family.</p>
                    </div>
                </div>
                <!-- end feature -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="ti ti-language"></i>
                        <h3 class="feature__title">Multi language subtitles</h3>
                        <p class="feature__text">Break language barriers and enjoy movies from around the world with our
                            multi-language subtitles. Explore different cultures, expand your cinematic horizons, and
                            appreciate the beauty of global cinema.</p>
                    </div>
                </div>
                <!-- end feature -->
            </div>
        </div>
    </section>
    <!-- end about -->




    <!-- partners -->
    <section class="section section--pt">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-xl-9">
                    <h2 class="section__title">Our Partners</h2>
                    <p class="section__text">We strive for long-term cooperation with our partners, and our team is always
                        ready to meet and consider new opportunities for mutual benefits. If you would like to become our
                        partner, we are always open to new offers and look forward to hearing from you. <a
                            href="{{ asset('contacts.html') }}">Become a partner</a></p>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/themeforest-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/audiojungle-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/codecanyon-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/photodune-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/activeden-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ asset('#') }}" class="partner">
                        <img src="{{ asset('assets/img/partners/3docean-light-background.png') }}" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->
            </div>
        </div>
    </section>
    <!-- end partners -->

    <!-- footer -->
@endsection
