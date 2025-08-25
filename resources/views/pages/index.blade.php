@extends('layout.Layout')

@section('title', 'HotFlix')
@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            background: #222327;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
        }

        body,
        div {
            margin: 0;
            padding: 0;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            vertical-align: middle;
            max-width: 100%;
            height: auto;
        }

        /* ============ Full Page Slider ================= */
        .creative-carousal--hero {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .creative-carousal--hero .carousel-slider {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0;
            background-size: cover;
            background-position: center;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide.swiper-slide-active {
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            z-index: 3;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide:after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: #222327;
            opacity: 0.7;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide.swiper-slide-active:after {
            opacity: 0.4;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide .inner {
            width: 100%;
            display: block;
            text-align: center;
            color: #fff;
            position: relative;
            z-index: 2;
            opacity: 0;
            -webkit-transition: 0.25s ease-in-out;
            -moz-transition: 0.25s ease-in-out;
            -ms-transition: 0.25s ease-in-out;
            -o-transition: 0.25s ease-in-out;
            transition: 0.25s ease-in-out;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide.swiper-slide-active .inner {
            opacity: 1;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide .inner h2 {
            width: 100%;
            float: left;
            font-size: 4vw;
            line-height: 5vw;
            font-weight: 800;
            color: #fff;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide .inner a {
            font-size: 19px;
            color: #fff;
            font-family: "Fjalla One", sans-serif;
            padding-bottom: 5px;
            position: relative;
            border-bottom: 2px solid #fff;
            padding-bottom: 4px;
            text-decoration: none;
            -webkit-transition: 0.25s ease-in-out;
            -moz-transition: 0.25s ease-in-out;
            -ms-transition: 0.25s ease-in-out;
            -o-transition: 0.25s ease-in-out;
            transition: 0.25s ease-in-out;
        }

        .creative-carousal--hero .carousel-slider .swiper-slide .inner a:hover {
            text-decoration: none;
            color: #75dab4;
        }

        .creative-carousal--hero .slide-progress {
            width: 220px;
            display: flex;
            flex-wrap: wrap;
            position: absolute;
            left: 50%;
            bottom: 30px;
            margin-left: -110px;
            z-index: 3;
            text-align: center;
        }

        .creative-carousal--hero .slide-progress span {
            display: inline-block;
            color: #fff;
            font-family: "Fjalla One", sans-serif;
            font-size: 14px;
        }

        .creative-carousal--hero .slide-progress .swiper-pagination {
            width: 160px;
            height: 2px;
            margin: auto 10px;
            display: inline-block;
            position: static;
            background: rgba(255, 255, 255, 0.3);
        }

        .creative-carousal--hero .slide-progress .swiper-pagination .swiper-pagination-progressbar-fill {
            background: #fff;
        }

        .creative-carousal--hero .slide-progress span {
            display: inline-block;
            color: #fff;
            font-family: "Fjalla One", sans-serif;
            font-size: 14px;
        }

        .creative-carousal--hero .swiper-button-prev {
            height: auto;
            position: absolute;
            left: auto;
            top: auto;
            right: 120px;
            bottom: 30px;
            font-family: "Fjalla One", sans-serif;
            color: #fff;
            background: none;
        }

        .creative-carousal--hero .swiper-button-prev:after {
            display: none;
        }

        .creative-carousal--hero .swiper-button-next {
            height: auto;
            position: absolute;
            left: auto;
            top: auto;
            right: 40px;
            bottom: 30px;
            font-family: "Fjalla One", sans-serif;
            color: #fff;
            background: none;
        }

        .creative-carousal--hero .swiper-button-next:after {
            display: none;
        }

        /* ====================== Responsive Ipad =============================== */
        @media (max-width: 991px) {
            .creative-carousal--hero .carousel-slider .swiper-slide .inner h2 {
                font-size: 7vw;
                line-height: 7vw;
                margin-bottom: 15px;
            }
        }

        /* ====================== Responsive Iphone =============================== */
        @media screen and (max-width: 767px) {
            .creative-carousal--hero .carousel-slider .swiper-slide .inner h2 {
                font-size: 12vw;
                line-height: 12vw;
                margin-bottom: 15px;
            }

            .creative-carousal--hero .swiper-button-prev {
                left: 40px;
            }

            .creative-carousal--hero .swiper-button-next {
                right: 40px;
            }
        }

        /* ====================== Buy Me A Coffee =============================== */

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap');

        .coffee-button {
            position: fixed;
            z-index: 9;
            top: 20px;
            right: 20px;
            background-color: #FFC107;
            color: #333;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-family: "Dancing Script", cursive;
            font-weight: 600;
            font-size: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
        }

        .coffee-button:hover {
            background-color: #FFD54F;
        }

        .coffee-icon {
            font-size: 24px;
            line-height: 1;
        }
    </style>
@endsection
@section('content')
    <section class="creative-carousal--hero">
        <div class="carousel-slider swiper-container-horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="https://i.ibb.co/nNggbhf5/joshua-earle-njz0-Tt-Rszo-unsplash.jpg"
                    style="background-image: url(https://i.ibb.co/nNggbhf5/joshua-earle-njz0-Tt-Rszo-unsplash.jpg);">
                    <div class="inner">
                        <h2>DISCOVER</h2>
                        <a href="#">DISCOVER CASE</a>
                    </div>
                </div>
                <div class="swiper-slide" data-background="https://i.ibb.co/jPhPjG6W/roxy-aln-A7-Fq-Nh-YQm-TA-unsplash.jpg"
                    style="background-image: url(https://i.ibb.co/jPhPjG6W/roxy-aln-A7-Fq-Nh-YQm-TA-unsplash.jpg);">
                    <div class="inner">
                        <h2>EXCLUSION</h2>
                        <a href="#">DISCOVER CASE</a>
                    </div>
                </div>
                <div class="swiper-slide" data-background="https://i.ibb.co/dJgDPQDB/nils-limp-3-S7i7-T-Wtdg-unsplash.jpg"
                    style="background-image: url(https://i.ibb.co/dJgDPQDB/nils-limp-3-S7i7-T-Wtdg-unsplash.jpg);">
                    <div class="inner">
                        <h2>EDITIONAL</h2>
                        <a href="#">DISCOVER CASE</a>
                    </div>
                </div>
                <div class="swiper-slide"
                    data-background="https://i.ibb.co/zVy2cXdt/tasso-mitsarakis-Uz-KR8v86-QTM-unsplash.jpg"
                    style="background-image: url(https://i.ibb.co/zVy2cXdt/tasso-mitsarakis-Uz-KR8v86-QTM-unsplash.jpg);">
                    <div class="inner">
                        <h2>AVAILABLE</h2>
                        <a href="#">DISCOVER CASE</a>
                    </div>
                </div>
                <div class="swiper-slide"
                    data-background="https://i.ibb.co/KcVLJXWw/michael-soledad-WCf-Ch-KPD2eg-unsplash.jpg"
                    style="background-image: url(https://i.ibb.co/KcVLJXWw/michael-soledad-WCf-Ch-KPD2eg-unsplash.jpg);">
                    <div class="inner">
                        <h2>PREMIUM</h2>
                        <a href="#">DISCOVER CASE</a>
                    </div>
                </div>
            </div>
            <!-- End Of Swiper -->
            <div class="slide-progress">
                <span>01</span>
                <div class="swiper-pagination swiper-pagination-progressbar"><span
                        class="swiper-pagination-progressbar-fill"></span></div>
                <span>05</span>
            </div>
            <!-- end of progress -->
            <div class="swiper-button-prev">PREV</div>
            <!-- end button-prev -->
            <div class="swiper-button-next">NEXT</div>
            <!-- end button-next -->
        </div>
    </section>


    <!-- home -->
    <section class="home">
        <div class="container">
            <div class="row">
                <!-- home title -->
                <div class="col-12">
                    <h1 class="home__title"><b>Latest Shorts</b> OF THIS SEASON</h1>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">The Edge of
                                                    Tomorrow</a></h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">Survival Spliton</a>
                                            </h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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

    <!-- home -->
    <section class="home">
        <div class="container">
            <div class="row">
                <!-- home title -->
                <div class="col-12 mb-4">
                    <h1 class="home__title"><b>Latest Videos</b> </h1>
                </div>
                <!-- end home title -->

                <!-- home carousel -->
                <div class="col-12">
                    <div class="yt__carousel splide splide--home">
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
                                            {{-- <img src="https://ihitthebutton.com/wp-content/uploads/2023/04/youtube-thumbnail-size-1.jpg"
                                                alt=""> --}}
                                                <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/K95gaNZtFFM?si=fVLNEZtQJ7j_PTJC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">8.4</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">The Edge of
                                                    Tomorrow</a></h3>
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
                                            {{-- <img src="https://ihitthebutton.com/wp-content/uploads/2023/04/youtube-thumbnail-size-1.jpg"
                                                alt=""> --}}
                                                <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                             <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/AW3HInWnxmI?si=OmfhJlHzei38QyzT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.9</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <img src="https://ihitthebutton.com/wp-content/uploads/2023/04/youtube-thumbnail-size-1.jpg"
                                                alt="">
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--yellow">6.8</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">Survival Spliton</a>
                                            </h3>
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
                                            {{-- <img src="https://ihitthebutton.com/wp-content/uploads/2023/04/youtube-thumbnail-size-1.jpg"
                                                alt=""> --}}
                                                <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                             <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/AW3HInWnxmI?si=OmfhJlHzei38QyzT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.9</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end home carousel -->
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- content -->
    <section class="content">
        <div class="content__head">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- content title -->
                        <h2 class="content__title">Recently updated</h2>
                        <!-- end content title -->

                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1"
                                    type="button" role="tab" aria-controls="tab-1" aria-selected="true">New
                                    items</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button"
                                    role="tab" aria-controls="tab-2" aria-selected="false">Short Films</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button"
                                    role="tab" aria-controls="tab-3" aria-selected="false">YT Shorts</button>
                            </li>


                        </ul>
                        <!-- end content tabs nav -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- content tabs -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab"
                    tabindex="0">
                    <div class="row">
                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
                    <div class="row">
                        <!-- item -->
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--red">5.5</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--green">8.4</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4  ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%" src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                </div>

                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
                    <div class="row">
                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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
                                    <h3 class="item__title"><a href="{{ route('details') }}">I Dream in Another
                                            Language</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Action</a>
                                        <a href="{{ asset('#') }}">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="col-6 col-sm-4 col-lg-3 ">
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


                    </div>
                </div>


            </div>
            <!-- end content tabs -->

            <div class="row">
                <!-- more -->
                <div class="col-12">
                    <a class="section__more" href="{{ asset('catalog.html') }}">View all</a>
                </div>
                <!-- end more -->
            </div>
        </div>
    </section>
    <!-- end content -->

    <!-- section -->
    <section class="section section--border">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="section__title-wrap">
                        <h2 class="section__title">Expected premiere</h2>
                        <a href="{{ asset('catalog.html') }}" class="section__view section__view--carousel">View
                            All</a>
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
                                            <img src="{{ asset('assets/img/covers/cover2.jpg') }}" alt="">
                                            <a href="{{ route('details') }}" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a>
                                            </h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">I Dream in
                                                    Another Language</a></h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">I Dream in
                                                    Another Language</a></h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">Blindspotting</a>
                                            </h3>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
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
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="{{ route('details') }}">I Dream in
                                                    Another Language</a></h3>
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



    <!-- footer -->
@endsection
