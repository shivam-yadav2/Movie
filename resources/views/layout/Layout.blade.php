<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slimselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Icon font -->
    <link rel="stylesheet" href="{{ asset('assets/webfont/tabler-icons.min.css') }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/favicon-32x32.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script><!-- CSS -->
    <l <meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
        <meta name="keywords" content="">
        <meta name="author" content="Dmitry Volkov">
        <title>@yield('title', 'Prizm Production')</title>
        @yield('css')
        @stack('styles')
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="{{ route('home') }}" class="header__logo">
                            <img src="{{ asset('assets/image.png') }}" alt="">
                        </a>

                        <ul class="header__nav">
                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="header__nav-link" href={{ route('home') }} role="button"
                                    aria-expanded="false">Home </a>
                            </li>
                            <!-- end dropdown -->
                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="header__nav-link" href={{ route('catalog') }} role="button"
                                    aria-expanded="false">Short Films </a>

                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href={{ route('our-services') }} role="button"
                                    aria-expanded="false">Our-Services </a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href={{ route('actor') }} role="button"
                                    aria-expanded="false">YT Shorts </a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href={{ route('contact') }} role="button"
                                    aria-expanded="false">Contact</a>
                            </li>
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

                            <!-- end dropdown -->
                            <!-- dropdown -->
                            <div class="header__profile">
                                <a class="header__sign-in header__sign-in--user" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-user"></i>
                                    <span>Nickname</span>
                                </a>
                                <ul
                                    class="dropdown-menu dropdown-menu-end header__dropdown-menu header__dropdown-menu--user">
                                    <li><a href="{{ route('profile') }}"><i class="ti ti-ghost"></i>Profile</a></li>
                                    <li><a href="#"><i class="ti ti-stereo-glasses"></i>Subscription</a></li>
                                    <li><a href="#"><i class="ti ti-bookmark"></i>Favorites</a></li>
                                    <li><a href="#"><i class="ti ti-settings"></i>Settings</a></li>
                                    <li><a href="#"><i class="ti ti-logout"></i>Logout</a></li>
                                </ul>
                            </div>
                            <!-- end dropdown -->
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

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    <!-- End Main Content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <a href="{{ route('home') }}" class="footer__logo">
                            <img src="{{ asset('assets/image.png') }}" alt="">
                        </a>
                        <span class="footer__copyright">© Production, 2019—2024 <br> Create by <a
                                href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry
                                Volkov</a></span>
                        <nav class="footer__nav">
                            <a href="{{ route('about') }}">About Us</a>
                            <a href="{{ route('contact') }}">Contacts</a>
                            <a href="#">Privacy policy</a>
                        </nav>
                        <button class="footer__back" type="button">
                            <i class="ti ti-arrow-narrow-up"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    @stack('modals')

    <!-- JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/splide.min.js') }}"></script>
    <script src="{{ asset('assets/js/slimselect.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe-ui-default.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // SLIDER
            const carouselslider = new Swiper('.carousel-slider', {
                spaceBetween: 0,
                slidesPerView: 3,
                centeredSlides: true,
                autoplay: {
                    delay: 9500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 3
                    },
                    768: {
                        slidesPerView: 2
                    },
                    640: {
                        slidesPerView: 1
                    },
                    320: {
                        slidesPerView: 1
                    }
                }
            });
        });
    </script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>
    @yield('js')
    @stack('scripts')
</body>

</html>
