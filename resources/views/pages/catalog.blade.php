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
                        <h1 class="section__title section__title--head">Short Films</h1>
                        <!-- end section title -->

                        <!-- breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs__item"><a href="{{ asset('index.html') }}">Home</a></li>
                            <li class="breadcrumbs__item breadcrumbs__item--active">Catalog</li>
                        </ul>
                        <!-- end breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->



    <!-- catalog -->
    <div class="section section--catalog">
        <div class="container">
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

    

    <!-- footer -->
@endsection
