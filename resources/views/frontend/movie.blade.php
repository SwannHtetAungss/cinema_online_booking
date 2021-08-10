
@extends('layouts.frontendtemplate')

@section('title','Cinema : Movie Page')

@section('content')

   
<section class="after-head d-flex section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/cc.jpg')}}" data-parallax="scroll"></div>
    <div class="d-background bg-black-80"></div>
    <div class="top-block top-inner container">
        <div class="top-block-content">
            <h1 class="section-title">Movie Gallery</h1>
            <div class="page-breadcrumbs">
                <a class="content-link" href="{{route('homepage')}}">Home</a>
                <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                <span>Movie Gallery</span>
            </div>
        </div>
    </div>
</section>
<section class="section-long">
    {{-- <div class="container"> --}}
        

    <div class="container">
        <div>
            <h2 align="center">Movies</h2>
            <hr class="movie_hr">
        </div>
        
        <ul class="nav nav-pills pills-dark mb-3 text-center pb-5 pt-3 for_tab_center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active p-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h5>Now Showing</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h5>Comming Soon</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-3" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><h5>Other</h5></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="grid row">
                
                @foreach ($show_now as $shownow)
                    
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery-entity">
                                <div class="entity-preview" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                    <a href="{{route('frontend.detail',$shownow->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$shownow->movie->photo)}}" alt="" /></a>
                                    </div>
                                    <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-view-popup">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$shownow->trailer}}" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <a href="{{route('frontend.detail',$shownow->id)}}" class="entity-title">
                                            <h3>{{$shownow->movie->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                @endforeach
                
            </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="grid row">
                @foreach ($show_soon as $showsoon)
                    
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery-entity">
                                <div class="entity-preview" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                    <a href="{{route('frontend.detail',$showsoon->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$showsoon->movie->photo)}}" alt="" /></a>
                                    </div>
                                    <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-view-popup">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$showsoon->trailer}}" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <a href="{{route('frontend.detail',$showsoon->id)}}" class="entity-title">
                                            <h3>{{$showsoon->movie->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                @endforeach
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="grid row">
                @foreach ($movies as $movie)
                @php
                    $forshow =$movie->shows;
                    // dd($forshow);
                @endphp
                @foreach ($forshow as $forshows)

                    {{-- @if($forshows->status != 0)
                    
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery-entity">
                                <div class="entity-preview" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                    <a href="{{route('frontend.detail',$movie->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" /></a>
                                    </div>
                                    <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-view-popup">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$movie->trailer}}" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <a href="{{route('frontend.detail',$movie->id)}}" class="entity-title">
                                            <h3>{{$movie->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif --}}
                    {{-- @break --}}
                    
                @endforeach
                @if($forshows->movie_id != $movie->id)
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery-entity">
                                <div class="entity-preview" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <a href="{{route('frontend.detail',$movie->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" /></a>
                                    </div>
                                    <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <div class="entity-view-popup">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$movie->trailer}}" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <a href="{{route('frontend.detail',$movie->id)}}" class="entity-title">
                                            <h3>{{$movie->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            </div>
        </div>
        
    </div>

        {{-- <div class="grid row">
            @foreach ($movies as $movie)
            @php
                $forshow =$movie->shows;
                // dd($forshow);
            @endphp
            @foreach ($forshow as $forshows)

                @if($forshows->status != 0)
                
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery-entity">
                            <div class="entity-preview" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                <a href="{{route('frontend.detail',$movie->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" /></a>
                                </div>
                                <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <div class="entity-view-popup">
                                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$movie->trailer}}" data-magnific-popup="iframe">
                                            <span class="icon-content"><i class="fas fa-play"></i></span>
                                        </a>
                                    </div>
                                    <a href="{{route('frontend.detail',$movie->id)}}" class="entity-title">
                                        <h3>{{$movie->name}}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @break
            @endforeach
            @if($forshows->movie_id != $movie->id)
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery-entity">
                            <div class="entity-preview" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                   <a href="{{route('frontend.detail',$movie->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" /></a>
                                </div>
                                <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <div class="entity-view-popup">
                                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="{{$movie->trailer}}" data-magnific-popup="iframe">
                                            <span class="icon-content"><i class="fas fa-play"></i></span>
                                        </a>
                                    </div>
                                    <a href="{{route('frontend.detail',$movie->id)}}" class="entity-title">
                                        <h3>{{$movie->name}}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div> --}}
        {{-- <div class="section-bottom">
            <div class="paginator">
                <a class="paginator-item" href="#"><i class="fas fa-chevron-left"></i></a>
                <a class="paginator-item" href="#">1</a>
                <span class="active paginator-item">2</span>
                <a class="paginator-item" href="#">3</a>
                <span class="paginator-item">...</span>
                <a class="paginator-item" href="#">10</a>
                <a class="paginator-item" href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div> --}}
    {{-- </div> --}}


    
</section>








        




@endsection