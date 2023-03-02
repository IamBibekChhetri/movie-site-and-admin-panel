@extends('user.layout.master')
@section('content')

<!-- home -->
<section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
        <div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
        <div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
        <div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
        <div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
    </div>
    <!-- end home bg -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

                <button class="home__nav home__nav--prev" aria-label="prev card" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                    </svg>
                </button>
                <button class="home__nav home__nav--next" aria-label="next card" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                    </svg>
                </button>
            </div>

            <div class="col-12">
                <div class="owl-carousel home__carousel">
                    <!-- card -->
                    <div class="card card--big">
                        <a href="details1.html" class="card__cover">
                            <img src="{{asset('frontend/main/img/covers/cover.jpg')}}" alt="">
                            <span class="card__play">
                            </span>
                        </a>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                            <span class="card__category">
                                <a href="#">Action</a>
                                <a href="#">Triler</a>
                            </span>
                            <span class="card__rate"> 8.4</span>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card card--big">
                        <a href="details1.html" class="card__cover">
                            <img src="{{asset('frontend/main/img/covers/cover2.jpg')}}" alt="">
                            <span class="card__play">
                            </span>
                        </a>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Benched</a></h3>
                            <span class="card__category">
                                <a href="#">Comedy</a>
                            </span>
                            <span class="card__rate"> 7.1</span>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card card--big">
                        <a href="details1.html" class="card__cover">
                            <img src="{{asset('frontend/main/img/covers/cover3.jpg')}}" alt="">
                            <span class="card__play">
                            </span>
                        </a>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Whitney</a></h3>
                            <span class="card__category">
                                <a href="#">Romance</a>
                                <a href="#">Drama</a>
                            </span>
                            <span class="card__rate"> 6.3</span>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card card--big">
                        <a href="details1.html" class="card__cover">
                            <img src="{{asset('frontend/main/img/covers/cover4.jpg')}}" alt="">
                            <span class="card__play">
                            </span>
                        </a>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Blindspotting</a></h3>
                            <span class="card__category">
                                <a href="#">Comedy</a>
                                <a href="#">Drama</a>
                            </span>
                            <span class="card__rate"> 7.9</span>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
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
                    <h2 class="content__title">New items</h2>
                    <!-- end content title -->

                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
                        </li>

                    </ul>
                    <!-- end content tabs nav -->

                    <!-- content mobile tabs nav -->
                    <div class="content__mobile-tabs" id="content__mobile-tabs">
                        <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="New items">
                            <span></span>
                        </div>

                        <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

                                <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end content mobile tabs nav -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                <div class="row row--grid">

                    <!-- card -->
                    <div class="col-6 col-sm-12 col-lg-6">
                        <div class="card card--list">
                            <a href="details1.html" class="card__cover">
                                <img src="{{asset('frontend/main/img/covers/cover4.jpg')}}" alt="">
                                <span class="card__play">
                                </span>
                            </a>

                            <div class="card__content">
                                <h3 class="card__title"><a href="#">Blindspotting</a></h3>
                                <span class="card__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>

                                <div class="card__wrap">
                                    <span class="card__rate"> 7.9</span>

                                    <ul class="card__list">
                                        <li>HD</li>
                                        <li>16+</li>
                                    </ul>
                                </div>

                                <div class="card__description">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="col-6 col-sm-12 col-lg-6">
                        <div class="card card--list">
                            <a href="details1.html" class="card__cover">
                                <img src="{{asset('frontend/main/img/covers/cover6.jpg')}}" alt="">
                                <span class="card__play">
                                </span>
                            </a>

                            <div class="card__content">
                                <h3 class="card__title"><a href="#">Benched</a></h3>
                                <span class="card__category">
                                    <a href="#">Comedy</a>
                                </span>

                                <div class="card__wrap">
                                    <span class="card__rate"> 7.1</span>

                                    <ul class="card__list">
                                        <li>HD</li>
                                        <li>16+</li>
                                    </ul>
                                </div>

                                <div class="card__description">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                <div class="row row--grid">
                    <!-- card -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <a href="details1.html" class="card__cover">
                                <img src="{{asset('frontend/main/img/covers/cover.jpg')}}" alt="">
                                <span class="card__play">
                                </span>
                            </a>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                                <span class="card__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                                <span class="card__rate">8.4</span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <a href="details1.html" class="card__cover">
                                <img src="{{asset('frontend/main/img/covers/cover2.jpg')}}" alt="">
                                <span class="card__play">
                                </span>
                            </a>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#">Benched</a></h3>
                                <span class="card__category">
                                    <a href="#">Comedy</a>
                                </span>
                                <span class="card__rate">7.1</span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                </div>
            </div>

        </div>
        <!-- end content tabs -->
    </div>
</section>
<!-- end content -->

@endsection