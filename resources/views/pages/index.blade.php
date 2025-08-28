@extends('layout.Layout')

@section('title', 'Prizm Production')
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
    <style>
        .swiper {
            width: 100%;
            height: 300px;
        }

        /* Main styling matching Production theme */
        .who {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .about-section {
            background: rgba(0, 0, 0, 0.8);
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(116, 76, 3, 0.1) 0%, transparent 70%),
                radial-gradient(circle at 80% 20%, rgba(161, 122, 3, 0.1) 0%, transparent 70%),
                linear-gradient(135deg, rgba(153, 101, 4, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .section-content {
            position: relative;
            z-index: 2;
            padding: 100px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff6b35, #f7931e, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(45deg, #ff6b35, #ffc107);
            border-radius: 2px;
        }

        .quote-section {
            text-align: center;
            margin: 60px 0;
            position: relative;
        }

        .quote-text {
            font-size: 1.8rem;
            font-style: italic;
            color: #ffffff;
            margin-bottom: 15px;
            position: relative;
            padding: 0 40px;
        }

        .quote-text::before,
        .quote-text::after {
            content: '"';
            font-size: 4rem;
            color: #ffc107;
            position: absolute;
            font-family: Georgia, serif;
            opacity: 0.7;
        }

        .quote-text::before {
            left: 0;
            top: -20px;
        }

        .quote-text::after {
            right: 0;
            bottom: -20px;
        }

        .quote-author {
            font-size: 1.2rem;
            color: #ffc107;
            font-weight: 600;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 193, 7, 0.2);
            border-radius: 15px;
            padding: 40px;
            margin: 40px 0;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .content-card:hover::before {
            left: 100%;
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255, 193, 7, 0.1);
            border-color: rgba(255, 193, 7, 0.4);
        }

        .card-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #ffc107;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .card-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #e0e0e0;
            position: relative;
            z-index: 2;
        }

        .highlight-text {
            color: #ffc107;
            font-weight: 600;
            background: rgba(255, 193, 7, 0.1);
            padding: 2px 8px;
            border-radius: 4px;
        }

        .icon-feature {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .icon-feature .icon {
            font-size: 2rem;
            color: #ffc107;
            margin-right: 15px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 193, 7, 0.1);
            border-radius: 50%;
            border: 2px solid rgba(255, 193, 7, 0.3);
        }

        .icon-feature .text {
            flex: 1;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        .animate-delay-3 {
            animation-delay: 0.6s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.2rem;
            }

            .quote-text {
                font-size: 1.4rem;
                padding: 0 20px;
            }

            .content-card {
                padding: 25px;
            }

            .card-title {
                font-size: 1.8rem;
            }

            .section-content {
                padding: 60px 0;
            }
        }

        /* Floating particles animation */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #ffc107;
            border-radius: 50%;
            opacity: 0.6;
            animation: float 6s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.6;
            }

            90% {
                opacity: 0.6;
            }

            100% {
                transform: translateY(-10px) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
    <style>
        /* Main styling matching Production theme */
        .services {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .services-section {
            background: rgba(0, 0, 0, 0.8);
            position: relative;
            overflow: hidden;
            /* padding: 100px 0; */
        }

        .services-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 30% 20%, rgba(255, 165, 0, 0.1) 0%, transparent 70%),
                radial-gradient(circle at 70% 80%, rgba(255, 193, 7, 0.1) 0%, transparent 70%),
                linear-gradient(45deg, rgba(255, 165, 0, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff6b35, #f7931e, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(45deg, #ff6b35, #ffc107);
            border-radius: 2px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .service-category {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 193, 7, 0.2);
            border-radius: 20px;
            padding: 40px 30px;
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: fit-content;
        }

        .service-category::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .service-category:hover::before {
            left: 100%;
        }

        .service-category:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(255, 193, 7, 0.15);
            border-color: rgba(255, 193, 7, 0.5);
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #ff6b35, #ffc107);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 1.8rem;
            color: #000;
            transition: all 0.3s ease;
        }

        .service-category:hover .category-icon {
            transform: rotate(360deg) scale(1.1);
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffc107;
            margin: 0;
            flex: 1;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .service-item {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            padding-left: 25px;
        }

        .service-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: #ffc107;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .service-item:hover::before {
            background: #ff6b35;
            transform: translateY(-50%) scale(1.5);
        }

        .service-item:hover {
            color: #ffc107;
            padding-left: 35px;
        }

        .service-item:last-child {
            border-bottom: none;
        }



        /* Animation classes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInFromRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-up {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .animate-slide-left {
            opacity: 0;
            animation: slideInFromLeft 0.8s ease forwards;
        }

        .animate-slide-right {
            opacity: 0;
            animation: slideInFromRight 0.8s ease forwards;
        }

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        .animate-delay-3 {
            animation-delay: 0.6s;
        }

        .animate-delay-4 {
            animation-delay: 0.8s;
        }

        .animate-delay-5 {
            animation-delay: 1.0s;
        }

        .animate-delay-6 {
            animation-delay: 1.2s;
        }

        /* Stats counter */
        .stats-section {
            background: rgba(255, 193, 7, 0.05);
            border-radius: 20px;
            padding: 50px 0;
            margin: 60px 0;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #ffc107;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #e0e0e0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service-category {
                padding: 30px 20px;
            }

            .category-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .services-section {
                padding: 60px 0;
            }
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 8s infinite ease-in-out;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
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
                @foreach (\App\Models\Hero::all() as $hero)
                    <div class="swiper-slide" data-background="{{ asset($hero->image) }}"
                        style="background-image: url({{ asset($hero->image) }});">
                        <div class="inner">
                            <h2>{{ $hero->heading }}</h2>
                            <a href="#">{{ $hero->subheading ?? 'DISCOVER CASE' }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End Of Swiper -->
            <div class="slide-progress">
                <span>01</span>
                <div class="swiper-pagination swiper-pagination-progressbar">
                    <span class="swiper-pagination-progressbar-fill"></span>
                </div>
                <span>{{ \App\Models\Hero::count() < 10 ? '0' . \App\Models\Hero::count() : \App\Models\Hero::count() }}</span>
            </div>
            <!-- end of progress -->
            <div class="swiper-button-prev">PREV</div>
            <!-- end button-prev -->
            <div class="swiper-button-next">NEXT</div>
            <!-- end button-next -->
        </div>
    </section>
    <section class="home">
        <div class="container">
            <div class="row">
                <!-- home title -->
                <div class="col-12 mb-5">
                    <h1 class="home__title"><b>Latest Shorts</b> OF THIS SEASON</h1>
                </div>
                <!-- end home title -->

                <!-- home carousel -->
                <div class="col-12">

                    <ul class="row ">
                        {{-- <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-5">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover12.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--green">8.4</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">The Edge of Tomorrow</a></h3>
                                    <span class="item__category">
                                        <a href="#">Action</a>
                                        <a href="#">Triler</a>
                                    </span>
                                </div>
                            </div>
                        </li> --}}

                        @foreach ($shorts as $short)
                            <li class="col-6 col-sm-3 p-3">
                                <div class="item item--hero mb-4">
                                    <div class="item__cover">
                                        
                                            <img src="{{ asset($short->image) }}" alt="{{ $short->heading }}">
                                            
                                        

                                        <a href="{{ $short->url ?? '#' }}" class="item__play">
                                            <i class="ti ti-player-play-filled"></i>
                                        </a>

                                        
                                            
                                        

                                        <button class="item__favorite" type="button">
                                            <i class="ti ti-bookmark"></i>
                                        </button>
                                    </div>

                                    <div class="item__content">
                                        <h3 class="item__title">
                                            <a href="{{ $short->url ?? '#' }}">{{ $short->heading }}</a>
                                        </h3>
                                        <span class="item__category">
                                            @if ($short->category)
                                                <a href="#">{{ $short->category }}</a>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                        {{-- <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-4">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover2.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--green">7.1</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                    <span class="item__category">
                                        <a href="#">Comedy</a>
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-4">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover8.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--green">7.9</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">Green Hell</a></h3>
                                    <span class="item__category">
                                        <a href="#">Romance</a>
                                        <a href="#">Drama</a>
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-4">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover9.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--yellow">6.8</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">Survival Spliton</a></h3>
                                    <span class="item__category">
                                        <a href="#">Comedy</a>
                                        <a href="#">Drama</a>
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-4">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover13.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--green">9.1</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">The Chebod</a></h3>
                                    <span class="item__category">
                                        <a href="#">Drama</a>
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li class="col-6 col-sm-3 p-3">
                            <div class="item item--hero mb-4">
                                <div class="item__cover">
                                    <img src="assets/img/covers/cover5.jpg" alt="">
                                    <a href="details.html" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                    <span class="item__rate item__rate--yellow">6.7</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a href="details.html">Shadow</a></h3>
                                    <span class="item__category">
                                        <a href="#">Drama</a>
                                    </span>
                                </div>
                            </div>
                        </li> --}}
                    </ul>

                </div>
                <!-- end home carousel -->
                <!-- end home carousel -->
            </div>
        </div>
    </section>
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
                    <div class="yt__carousel  --home">


                        <div class="">
                            <ul class="row">
                                <li class="col-6 col-sm-4 ">
                                    <div class="item item--hero mb-4">
                                        <div class="item__cover">
                                            <iframe style="width: 100%; height:100%"
                                                src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>

                                        <div class="item__content">
                                            <h3 class="item__title">
                                                <a>Benched</a>
                                            </h3>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-6 col-sm-4 ">
                                    <div class="item item--hero mb-4">
                                        <div class="item__cover">
                                            <iframe style="width: 100%; height:100%"
                                                src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>

                                        <div class="item__content">
                                            <h3 class="item__title">
                                                <a>Benched</a>
                                            </h3>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-6 col-sm-4 ">
                                    <div class="item item--hero mb-4">
                                        <div class="item__cover">
                                            <iframe style="width: 100%; height:100%"
                                                src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>

                                        <div class="item__content">
                                            <h3 class="item__title">
                                                <a>Benched</a>
                                            </h3>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-6 col-sm-4 ">
                                    <div class="item item--hero mb-4">
                                        <div class="item__cover">
                                            <iframe style="width: 100%; height:100%"
                                                src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>

                                        <div class="item__content">
                                            <h3 class="item__title">
                                                <a>Benched</a>
                                            </h3>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-6 col-sm-4 ">
                                    <div class="item item--hero mb-4">
                                        <div class="item__cover">
                                            <iframe style="width: 100%; height:100%"
                                                src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>

                                        <div class="item__content">
                                            <h3 class="item__title">
                                                <a>Benched</a>
                                            </h3>

                                        </div>
                                    </div>
                                </li>
                                @foreach ($videos as $video)
                                    <li class="col-6 col-sm-4 ">
                                        <div class="item item--hero mb-4">
                                            <div class="item__cover">
                                                @if ($video->embed_code)
                                                    {{ $video->embed_code }}
                                                @elseif($video->image)
                                                    {{-- Show uploaded image --}}
                                                    <img src="{{ asset($video->image) }}" alt="{{ $video->heading }}">
                                                @else
                                                    {{-- Fallback image --}}
                                                    <img src="{{ asset('assets/images/default-thumbnail.jpg') }}"
                                                        alt="{{ $video->heading }}">
                                                @endif

                                                <a href="{{ $video->url ?? '#' }}" class="item__play">
                                                    <i class="ti ti-player-play-filled"></i>
                                                </a>

                                                @if (!empty($video->rating))
                                                    <span class="item__rate item__rate--green">{{ $video->rating }}</span>
                                                @endif

                                                <button class="item__favorite" type="button">
                                                    <i class="ti ti-bookmark"></i>
                                                </button>
                                            </div>

                                            <div class="item__content">
                                                <h3 class="item__title">
                                                    <a href="{{ $video->url ?? '#' }}">{{ $video->heading }}</a>
                                                </h3>
                                                <span class="item__category">
                                                    @if ($video->category)
                                                        <a href="#">{{ $video->category }}</a>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end home carousel -->
            </div>
        </div>
    </section>
    <div class="who">
        <section class="about-section">
            <!-- Floating Particles -->
            <div class="particles" id="particles"></div>

            <div class="section-content">
                <div class="container">
                    <!-- WHO WE ARE Section -->
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title animate-on-scroll">WHO WE ARE?</h2>
                        </div>
                    </div>

                    <div class="quote-section animate-on-scroll animate-delay-1">
                        <div class="quote-text">Creativity is a wild mind and a disciplined eye</div>
                        <div class="quote-author">Dorothy Parker</div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="content-card animate-on-scroll animate-delay-2">
                                <div class="card-content">
                                    We genuinely love what we do, and for that specific reason, the work process is not much
                                    of
                                    a dense task to us as much as it is a <span class="highlight-text">whimsical journey
                                        paved
                                        with tranquility and harmony</span>. We simply love what we do therefor we do it
                                    with a
                                    <span class="highlight-text">CREATIVE TEAM</span>.
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-palette"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Creative Excellence</strong><br>
                                                Passionate team delivering innovative solutions
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-heart"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Love What We Do</strong><br>
                                                Genuine passion drives our every project
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WHAT WE OFFER Section -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="section-title animate-on-scroll animate-delay-3">WHAT WE OFFER?</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="content-card animate-on-scroll animate-delay-3">
                                <div class="card-content mb-4">
                                    At <span class="highlight-text">'Prizm Production'</span>, we understand the market and
                                    how
                                    it has evolved, this in returns is what sets us up. Our priority is to understand the
                                    business of our clients, their requirements and vision. We then develop <span
                                        class="highlight-text">creative tactics and deliver action plans</span>,
                                    accordingly to
                                    attain the desired results.
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-target"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Market Understanding</strong><br>
                                                Deep insights into evolving market trends and dynamics
                                            </div>
                                        </div>

                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-bulb"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Creative Tactics</strong><br>
                                                Innovative strategies tailored to your vision
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-users"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Client-Centric Approach</strong><br>
                                                Understanding your business requirements and vision
                                            </div>
                                        </div>

                                        <div class="icon-feature">
                                            <div class="icon">
                                                <i class="ti ti-rocket"></i>
                                            </div>
                                            <div class="text">
                                                <strong>Action Plans</strong><br>
                                                Strategic implementation to achieve desired results
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="services">
        <section class="services-section">
            <!-- Floating decorative elements -->
            <div class="floating-element" style="top: 10%; left: 5%; font-size: 2rem; color: #ffc107;">
                <i class="ti ti-movie"></i>
            </div>
            <div class="floating-element"
                style="top: 20%; right: 10%; font-size: 1.5rem; color: #ff6b35; animation-delay: -2s;">
                <i class="ti ti-music"></i>
            </div>
            <div class="floating-element"
                style="bottom: 30%; left: 8%; font-size: 1.8rem; color: #ffc107; animation-delay: -4s;">
                <i class="ti ti-camera"></i>
            </div>
            <div class="floating-element"
                style="bottom: 15%; right: 15%; font-size: 2.2rem; color: #ff6b35; animation-delay: -6s;">
                <i class="ti ti-palette"></i>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title animate-fade-up">OUR SERVICES</h2>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="stats-section animate-fade-up animate-delay-1">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="500">0</span>
                                    <span class="stat-label">Projects</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="20">0</span>
                                    <span class="stat-label">Services</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="100">0</span>
                                    <span class="stat-label">Clients</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <span class="stat-number" data-count="15">0</span>
                                    <span class="stat-label">Years</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Grid -->
                    <div class="services-grid">
                        <!-- Production Services -->
                        <div class="service-category featured-service animate-slide-left animate-delay-2">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-movie"></i>
                                </div>
                                <h3 class="category-title">Production Services</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">All India Line Production</li>
                                <li class="service-item">Feature Films Production</li>
                                <li class="service-item">Pre Production Services</li>
                                <li class="service-item">Production Services</li>
                                <li class="service-item">All India Location Management</li>
                            </ul>
                        </div>

                        <!-- Post Production -->
                        <div class="service-category animate-fade-up animate-delay-3">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-edit"></i>
                                </div>
                                <h3 class="category-title">Post Production</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Post Production Services</li>
                                <li class="service-item">Visual Effect Services</li>
                                <li class="service-item">Animation Film Production</li>
                                <li class="service-item">Digital Cinema Services</li>
                                <li class="service-item">All Multimedia Solution</li>
                            </ul>
                        </div>

                        <!-- Audio & Music -->
                        <div class="service-category animate-slide-right animate-delay-4">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-music"></i>
                                </div>
                                <h3 class="category-title">Audio & Music</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Audio Services</li>
                                <li class="service-item">Music Video Production</li>
                                <li class="service-item">Musical Recordings</li>
                                <li class="service-item">Voice Over Services</li>
                            </ul>
                        </div>

                        <!-- Cinematography -->
                        <div class="service-category animate-slide-left animate-delay-5">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-camera"></i>
                                </div>
                                <h3 class="category-title">Cinematography</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Cinematography</li>
                                <li class="service-item">TV Commercials</li>
                                <li class="service-item">Ad Films</li>
                                <li class="service-item">Corporate Videos Services</li>
                            </ul>
                        </div>

                        <!-- Creative & Design -->
                        <div class="service-category featured-service animate-fade-up animate-delay-6">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="ti ti-palette"></i>
                                </div>
                                <h3 class="category-title">Creative & Design</h3>
                            </div>
                            <ul class="service-list">
                                <li class="service-item">Graphic Art Films</li>
                                <li class="service-item">Film Distribution</li>
                                <li class="service-item">Artist Management Services</li>
                                <li class="service-item">Crowd Supplies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-4 p-3 ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%"
                                        src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    {{-- <a href="{{ route('details') }}" class="item__play">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a> --}}
                                    <span class="item__rate item__rate--green">7.1</span>
                                    <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title"><a>Benched</a></h3>
                                    <span class="item__category">
                                        <a href="{{ asset('#') }}">Comedy</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 p-3 ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%"
                                        src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4 p-3 ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%"
                                        src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <div class="col-6 col-sm-4 p-3 ">
                            <div class="item">
                                <div class="item__cover">
                                    <iframe style="width: 100%; height:100%"
                                        src="https://www.youtube.com/embed/yCpVXjOY6HY?si=NiBRXIxmEANzzTmU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
                    <div class="row">
                        <!-- item -->
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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
                        <div class="col-6 col-sm-3 p-3col-lg-3 ">
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

            {{-- <div class="row">
                <!-- more -->
                <div class="col-12">
                    <a class="section__more" href="{{ asset('catalog.html') }}">View all</a>
                </div>
                <!-- end more -->
            </div> --}}
        </div>
    </section>
    <section class="section section--border">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="section__title-wrap">
                        <h2 class="section__title">Expected premiere</h2>
                        
                    </div>
                </div>
                <!-- end section title -->

                <!-- carousel -->
                <div class="col-12">
                    <div class="section__carousel  --content">
                        

                        <div class="">
                            <ul class="row">


                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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

                                <li class="col-6 col-sm-3 p-3">
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
@endsection

@section('js')
    <script>
        // Animate on scroll functionality
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.animation = entry.target.style.animation ||
                            'fadeInUp 0.8s ease forwards';
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Create floating particles
            function createParticle() {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 4) + 's';

                document.getElementById('particles').appendChild(particle);

                // Remove particle after animation
                setTimeout(() => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                }, 8000);
            }

            // Create particles periodically
            setInterval(createParticle, 300);

            // Add hover effects to cards
            document.querySelectorAll('.content-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.animation = entry.target.style.animation || entry.target
                            .className.includes('fade-up') ? 'fadeInUp 0.8s ease forwards' :
                            entry.target.className.includes('slide-left') ?
                            'slideInFromLeft 0.8s ease forwards' :
                            'slideInFromRight 0.8s ease forwards';
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('[class*="animate-"]').forEach(el => {
                observer.observe(el);
            });

            // Counter animation
            function animateCounter(element) {
                const target = parseInt(element.dataset.count);
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
                }, 16);
            }

            // Stats counter observer
            const statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('[data-count]');
                        counters.forEach(counter => {
                            animateCounter(counter);
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }

            // Enhanced hover effects
            document.querySelectorAll('.service-category').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    // Add subtle glow effect
                    this.style.boxShadow =
                        '0 25px 50px rgba(255, 193, 7, 0.2), 0 0 50px rgba(255, 193, 7, 0.1)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });

            // Button hover effect
            const ctaButton = document.querySelector('.btn');
            if (ctaButton) {
                ctaButton.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.boxShadow = '0 15px 30px rgba(255, 193, 7, 0.3)';
                });

                ctaButton.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    this.style.boxShadow = 'none';
                });
            }

            // Service item click effects
            document.querySelectorAll('.service-item').forEach(item => {
                item.addEventListener('click', function() {
                    // Add click animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        <!-- Include Swiper CSS and JS 
        -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    const swiper = new Swiper('.mySwiperSlider', {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },

    speed: 800,
    breakpoints: {
    320: {
    slidesPerView: 2,
    spaceBetween: 24,
    },
    576: {
    slidesPerView: 2,
    spaceBetween: 24,
    },
    768: {
    slidesPerView: 3,
    spaceBetween: 24,
    },
    992: {
    slidesPerView: 3,
    spaceBetween: 24,
    },
    1200: {
    slidesPerView: 4,
    spaceBetween: 24,
    },
    1400: {
    slidesPerView: 4,
    spaceBetween: 24,
    }
    }
    });

    ;
    </script>
@endsection
