@extends('layouts.frontendtemplate')

@section('title','Cinema : Detail Page')

@section('content')

        <section class="after-head d-flex section-text-white position-relative">
            <div class="d-background" data-image-src="{{asset('frontend_assets/images/beauty.jpg')}}" data-parallax="scroll"></div>
            <div class="d-background bg-black-80"></div>
            <div class="top-block top-inner container">
                <div class="top-block-content">
                    <h1 class="section-title">Movies info</h1>
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="{{route('homepage')}}">Home</a>
                        <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                        <a class="content-link" href="movies-blocks.html">Movie Detail</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="sidebar-container">
                <div class="content">
                    <section class="section-long">
                        <div class="section-line">
                            <div class="movie-info-entity">
                                <div class="entity-poster" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="{{asset('storage/'.$movie_details->photo)}}" alt="" />
                                    </div>
                                    <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-play">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="entity-content">
                                    <h2 class="entity-title">{{$movie_details->name}}</h2>
                                    <div class="entity-category">
                                        <a class="content-link" href="movies-blocks.html">{{$movie_details->genre}}</a>
                                    </div>
                                    <div class="entity-info">
                                        <div class="info-lines">
                                            <div class="info info-short">
                                                <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                <span class="info-text">8,7</span>
                                                <span class="info-rest">/10</span>
                                            </div>
                                            <div class="info info-short">
                                                <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                <span class="info-text">{{$movie_details->duration}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="entity-list">
                                        <li>
                                            <span class="entity-list-title">Release Date:</span>{{$movie_details->release_date}}</li>
                                        <li>
                                            <span class="entity-list-title">Directed:</span>
                                            <a class="content-link" href="#">{{$movie_details->director}}</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Actor:</span>
                                            <a class="content-link" href="#">{{$movie_details->actor}}</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Actress:</span>
                                            <a class="content-link" href="#">{{$movie_details->actress}}</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Production company:</span>
                                            <a class="content-link" href="#">Re-Production Bro.</a>,
                                            <a class="content-link" href="#">Pentakid</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Country:</span>
                                            <a class="content-link" href="#">USA</a>,
                                            <a class="content-link" href="#">India</a>
                                        </li>
                                        {{-- <li>
                                            <span class="entity-list-title">Language:</span>english</li> --}}
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="entity-extra">
                                @if(!$detail_show->isEmpty())
                                    <div class="d-flex text-dark pb-3"><h3 class="pr-5 mr-5">Show Hall</h3><h3>Show Time</h3></div>
                                    <div class="text-uppercase entity-extra-title float-left pr-5 mr-5">
                                        
                                        
                                        <h3 class="text-danger">{{$detail_hall_show[0]->name}}</h3>
                                    </div>
                                    <div class="entity-showtime">
                                        <div class="showtime-wrap">
                                            
                                            @foreach($detail_show as $detail_shows)
                                            <div class="showtime-item">
                                                <a class="btn btn-outline-danger px-2" aria-disabled="true" href="{{route('frontend.chooseSeat')}}"> {{$detail_shows->show_time}} </a>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                @else
                                <div><h3>Schedules are not available!</h3></div>
                                @endif
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">Synopsis</h2>
                            </div>
                            <div class="section-description">
                                <p class="lead">{{$movie_details->description}}</p>
                                
                            </div>
                            <div class="section-bottom">
                                <div class="row">
                                    <div class="mr-auto col-auto">
                                        <div class="entity-links">
                                            <div class="entity-list-title">Share:</div>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    {{-- <div class="col-auto">
                                        <div class="entity-links">
                                            <div class="entity-list-title">Tags:</div>
                                            <a class="content-link" href="#">family</a>,&nbsp;
                                            <a class="content-link" href="#">gaming</a>,&nbsp;
                                            <a class="content-link" href="#">historical</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        
                    </section>
                </div>
                <div class="sidebar section-long order-lg-last">
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Show movies</h2>
                        </div>
                        @foreach ($all_movies as $all_movie)
                            
                            <div class="movie-short-line-entity">
                                <a class="entity-preview" href="{{route('frontend.detail',$all_movie->id)}}">
                                    <span class="embed-responsive embed-responsive-16by9"  style="height:140px !important;">
                                        <img class="embed-responsive-item" src="{{asset('storage/'.$all_movie->photo)}}" alt="" />
                                    </span>
                                </a>
                                <div class="entity-content">
                                    <h4 class="entity-title">
                                        <a class="content-link" href="{{route('frontend.detail',$all_movie->id)}}">{{$all_movie->name}}</a>
                                    </h4>
                                    <p class="entity-subtext">{{$all_movie->release_date}}</p>
                                </div>
                            </div>

                        @endforeach
                        
                    </section>
                    {{-- <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Archive</h2>
                        </div>
                        <ul class="list-unstyled list-wider list-categories">
                            <li>
                                <a class="content-link text-uppercase" href="#">July 2018</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">June 2018</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">May 2018</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">April 2018</a>
                            </li>
                        </ul>
                    </section> --}}
                    {{-- <section class="section-sidebar">
                        <a class="d-block" href="#">
                            <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
                        </a>
                    </section> --}}
                </div>
            </div>
        </div>
        <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
        
        <!-- jQuery library -->
        <script src="./js/jquery-3.3.1.js"></script>
        <!-- Bootstrap -->
        <script src="./bootstrap/js/bootstrap.js"></script>
        <!-- Paralax.js -->
        <script src="./parallax.js/parallax.js"></script>
        <!-- Waypoints -->
        <script src="./waypoints/jquery.waypoints.min.js"></script>
        <!-- Slick carousel -->
        <script src="./slick/slick.min.js"></script>
        <!-- Magnific Popup -->
        <script src="./magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Inits product scripts -->
        <script src="./js/script.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ4Qy67ZAILavdLyYV2ZwlShd0VAqzRXA&callback=initMap"></script>
        <script async defer src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js"></script>
    </body>
</html>

@endsection