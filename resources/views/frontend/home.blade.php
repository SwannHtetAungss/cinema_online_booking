@extends('layouts.frontendtemplate')

@section('title','Cinema : Home Page')

@section('content')

<section class="section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/cinemahall.jpg')}}" data-parallax="scroll"></div>
    <div class="d-background bg-theme-blacked"></div>
    <div class="mt-auto container position-relative">
        <div class="top-block-head text-uppercase">
            <h2 class="display-4">Now
                <span class="text-theme">in cinema</span>
            </h2>
        </div>
        <div class="top-block-footer">
            <div class="slick-spaced slick-carousel" data-slick-view="navigation responsive-4">
                <div class="slick-slides">
                    @foreach ($show_now as $now_show)
                        @foreach ($movies as $movie)

                            @if($now_show->movie_id == $movie->id)
                                <div class="slick-slide">
                                    <article class="poster-entity" data-role="hover-wrap">
                                        <div class="embed-responsive embed-responsive-poster">
                                            <img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" />
                                        </div>
                                        <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                        <div class="d-over bg-highlight-bottom">
                                            <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                    <span class="icon-content"><i class="fas fa-play"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="entity-title">
                                                <a class="content-link" href="{{route('frontend.detail',$movie->id)}}">{{$movie->name}}</a>
                                            </h4>
                                            <div class="entity-category">
                                                <a class="content-link" href="movies-blocks.html">{{$movie->genre}}</a>
                                            </div>
                                            <div class="entity-info">
                                                <div class="info-lines">
                                                    <div class="info info-short">
                                                        <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                        <span class="info-text">8,1</span>
                                                        <span class="info-rest">/10</span>
                                                    </div>
                                                    <div class="info info-short">
                                                        <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                        <span class="info-text">{{$movie->duration}}</span>
                                                        {{-- <span class="info-rest">&nbsp;min</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endif

                        @endforeach
                    @endforeach
                    
                </div>
                <div class="slick-arrows">
                    <div class="slick-arrow-prev">
                        <span class="th-dots th-arrow-left th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div class="slick-arrow-next">
                        <span class="th-dots th-arrow-right th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-long">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Now in play</h2>
            {{-- <p class="section-text">Dates: 13 - 15 february 2019</p> --}}
        </div>

        @foreach($hall_shows as $hall_show)
        @foreach($show_now as $now)
            @if($now->hall_id == $hall_show->id)
            <article class="movie-line-entity">
                @foreach($movies as $showmovie)
                @if($now->movie_id == $showmovie->id)
                <div class="entity-poster" data-role="hover-wrap">
                    <div class="embed-responsive embed-responsive-poster">
                        {{-- @php 
                            $show = $hall_show->shows;
                            $showmovie = $show[0]->movie;
                            
                            // dd($showstatus);
                            dd($showmovie);
                        @endphp --}}
                        <img class="embed-responsive-item" src="{{asset('storage/'.$showmovie->photo)}}" alt="" />
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
                    <h4 class="entity-title">
                        <a class="content-link text-uppercase" href=""> {{$showmovie->name}} </a>
                    </h4>
                    <div class="entity-category">
                        <a class="content-link" href="movies-blocks.html"> {{$showmovie->genre}} </a>
                    </div>
                    <div class="entity-info">
                        <div class="info-lines">
                            <div class="info info-short">
                                <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                <span class="info-text">8,1</span>
                                <span class="info-rest">/10</span>
                            </div>
                            <div class="info info-short">
                                <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                <span class="info-text">{{$showmovie->duration}}</span>
                                {{-- <span class="info-rest">&nbsp;min</span> --}}
                            </div>
                        </div>
                    </div>
                    <p class="text-short entity-text">
                        {{$showmovie->description}}
                    </p>
                </div>
                @endif
                @endforeach
                <div class="entity-extra">
                    <div class="text-uppercase entity-extra-title">
                        <h3 class="text-danger">{{$hall_show->name}}</h3>
                    </div>
                    <div class="entity-showtime">
                        <div class="showtime-wrap">
                            {{-- {{$hall_show->shows}} --}}
                            @foreach($hall_show->shows as $show_time)
                            {{-- @foreach($show_now as $show_time) --}}
                            @if($show_time->status == 1)
                                <div class="showtime-item">
                                    <a class="btn btn-outline-danger px-2" aria-disabled="true" href="{{route('frontend.chooseSeat')}}"> {{$show_time->show_time}} </a>
                                </div>
                            @endif
                            @endforeach
                            {{-- <div class="showtime-item">
                                <a class="btn btn-danger" aria-disabled="false" href="#">13 : 25</a>
                            </div>
                            <div class="showtime-item">
                                <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </article>
            @endif
        @endforeach
        @endforeach
    </div>
</section>
<section class="section-solid-long section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/popcorn.jpg')}}" data-parallax="scroll"></div>
    <div class="d-background bg-gradient-black"></div>
    <div class="container position-relative">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Comming Soon</h2>
        </div>
        <div class="slick-spaced slick-carousel" data-slick-view="navigation single">
            <div class="slick-slides">
                @foreach ($show_soon as $soon_show)
                    @foreach ($movies as $movie)

                        @if($soon_show->movie_id == $movie->id)
                            <div class="slick-slide">
                                <article class="movie-line-entity">
                                    <div class="entity-preview">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" />
                                        </div>
                                        {{-- <div class="d-over">
                                            <div class="entity-play">
                                                <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                    <span class="icon-content"><i class="fas fa-play"></i></span>
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="entity-content">
                                        <h4 class="entity-title">
                                            <a class="content-link" href="{{route('frontend.detail',$movie->id)}}">{{$movie->name}}</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">{{$movie->genre}}</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-calendar-alt"></i></span>
                                                    <span class="info-text">{{$soon_show->show_date}}</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">{{$movie->duration}}</span>
                                                    {{-- <span class="info-rest">&nbsp;min</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-short entity-text">
                                            {{$movie->description}}
                                        </p>
                                    </div>
                                </article>
                            </div>
                        @endif

                    @endforeach
                @endforeach

            </div>
            <div class="slick-arrows">
                <div class="slick-arrow-prev">
                    <span class="th-dots th-arrow-left th-dots-animated">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div class="slick-arrow-next">
                    <span class="th-dots th-arrow-right th-dots-animated">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-long">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Latest news</h2>
        </div>
        <div class="grid row">
            <div class="col-md-6">
                <article class="article-tape-entity">
                    <a class="entity-preview" href="article-sidebar-right.html" data-role="hover-wrap">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                        <span class="entity-date">
                            <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                <span class="tape-dots"></span>
                                <span class="tape-content m-auto">20 jul 2019</span>
                                <span class="tape-dots"></span>
                            </span>
                        </span>
                        <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                            <span class="m-auto"><i class="fas fa-search"></i></span>
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">Creative life</a>
                        </h4>
                        <div class="entity-category">
                            <a class="content-link" href="news-blocks-sidebar-right.html">comedy</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">detective</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">sci-fi</a>
                        </div>
                        <p class="text-short entity-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultrices justo a pellentesque. Praesent venenatis dolor nec tempus lacinia. Donec ac condimentum dolor. Nullam sit amet nisl hendrerit, pharetra nulla convallis, malesuada diam. Donec ornare nisl eu lectus rhoncus, at malesuada metus rutrum. Aliquam a nisl vulputate, sodales ipsum aliquam, tempus purus. Suspendisse convallis, lectus nec vehicula sollicitudin, lorem sapien rhoncus dolor, vel lacinia urna velit ullamcorper nisi. Phasellus pellentesque, magna nec gravida feugiat, est magna suscipit ligula, vel porttitor nunc enim at nibh. Sed varius sit amet leo vitae consequat.
                        </p>
                        <div class="entity-actions">
                            <a class="text-uppercase" href="article-sidebar-right.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article class="article-tape-entity">
                    <a class="entity-preview" href="article-sidebar-right.html" data-role="hover-wrap">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                        <span class="entity-date">
                            <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                <span class="tape-dots"></span>
                                <span class="tape-content m-auto">15 jun 2019</span>
                                <span class="tape-dots"></span>
                            </span>
                        </span>
                        <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                            <span class="m-auto"><i class="fas fa-search"></i></span>
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">One step to the end</a>
                        </h4>
                        <div class="entity-category">
                            <a class="content-link" href="news-blocks-sidebar-right.html">drama</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">superhero</a>
                        </div>
                        <p class="text-short entity-text">Vivamus dolor ex, viverra ut facilisis et, euismod et quam. Aliquam sit amet mattis velit, ullamcorper venenatis magna. Aenean ac maximus magna. Proin pharetra venenatis tortor, ac suscipit est ultrices vitae. Mauris vulputate, nisl in lacinia dignissim, libero justo vehicula arcu, a porttitor quam erat ac dui. Suspendisse potenti. Maecenas sit amet interdum sem. Vestibulum sit amet volutpat mauris, ut gravida velit. Donec ultricies, eros ut finibus volutpat, enim ligula tempus enim, non bibendum libero tellus at velit. Aenean placerat egestas ullamcorper.
                        </p>
                        <div class="entity-actions">
                            <a class="text-uppercase" href="article-sidebar-right.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article class="article-tape-entity">
                    <a class="entity-preview" href="article-sidebar-right.html" data-role="hover-wrap">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                        <span class="entity-date">
                            <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                <span class="tape-dots"></span>
                                <span class="tape-content m-auto">24 may 2019</span>
                                <span class="tape-dots"></span>
                            </span>
                        </span>
                        <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                            <span class="m-auto"><i class="fas fa-search"></i></span>
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">Here we go again</a>
                        </h4>
                        <div class="entity-category">
                            <a class="content-link" href="news-blocks-sidebar-right.html">romance</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">historical</a>
                        </div>
                        <p class="text-short entity-text">In luctus ac nisi vel vulputate. Sed blandit augue ut ex eleifend, ac posuere dolor sollicitudin. Mauris tempus euismod mauris id semper. Vestibulum ut vulputate elit, id ultricies libero. Aenean laoreet mi augue, at iaculis nisi aliquam eu. Quisque nec ipsum vehicula diam egestas porttitor eu vitae ex. Curabitur auctor tortor elementum leo faucibus, sit amet imperdiet ante maximus. Nulla viverra tortor dignissim purus placerat dapibus nec ut orci. Quisque efficitur nulla quis pulvinar dapibus. Phasellus sodales tortor sit amet sagittis condimentum. Donec ac ultricies ex. In odio leo, rhoncus aliquam bibendum sit amet, varius sit amet nisl.
                        </p>
                        <div class="entity-actions">
                            <a class="text-uppercase" href="article-sidebar-right.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article class="article-tape-entity">
                    <a class="entity-preview" href="article-sidebar-right.html" data-role="hover-wrap">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                        <span class="entity-date">
                            <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                <span class="tape-dots"></span>
                                <span class="tape-content m-auto">11 may 2019</span>
                                <span class="tape-dots"></span>
                            </span>
                        </span>
                        <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                            <span class="m-auto"><i class="fas fa-search"></i></span>
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">The one and the other</a>
                        </h4>
                        <div class="entity-category">
                            <a class="content-link" href="news-blocks-sidebar-right.html">drama</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">western</a>,
                            <a class="content-link" href="news-blocks-sidebar-right.html">sci-fi</a>
                        </div>
                        <p class="text-short entity-text">Aenean molestie turpis eu aliquam bibendum. Nulla facilisi. Vestibulum quis risus in lorem suscipit tempor. Morbi consectetur enim vitae justo finibus consectetur. Mauris volutpat nunc dui, quis condimentum dolor efficitur et. Phasellus rhoncus porta nunc eu fermentum. Nullam vitae erat hendrerit, tempor arcu eget, eleifend tortor.
                        </p>
                        <div class="entity-actions">
                            <a class="text-uppercase" href="article-sidebar-right.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="section-bottom">
            <a class="btn btn-theme" href="news-blocks-sidebar-right.html">View All News</a>
        </div>
    </div>
</section>
<section>
    <div class="gmap-with-map">
        <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-lg-auto">
                    <div class="gmap-form bg-white">
                        <h4 class="form-title text-uppercase">Contact
                            <span class="text-theme">us</span>
                        </h4>
                        <p class="form-text">We understand your requirement and provide quality works</p>
                        <form autocomplete="off">
                            <div class="row form-grid">
                                <div class="col-sm-6">
                                    <div class="input-view-flat input-group">
                                        <input class="form-control" name="name" type="text" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-view-flat input-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-view-flat input-group">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="px-5 btn btn-theme" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection