
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
    <div class="container">
        <div class="grid row">
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
                                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                            <span class="icon-content"><i class="fas fa-play"></i></span>
                                        </a>
                                    </div>
                                    <h4 class="entity-title">{{$movie->name}}</h4>
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
                                <div class="embed-responsive embed-responsive-16by9" style="height:320px !important">
                                   <a href="{{route('frontend.detail',$movie->id)}}"><img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" /></a>
                                </div>
                                <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <div class="entity-view-popup">
                                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                            <span class="icon-content"><i class="fas fa-play"></i></span>
                                        </a>
                                    </div>
                                    <h4 class="entity-title">{{$movie->name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="section-bottom">
            <div class="paginator">
                <a class="paginator-item" href="#"><i class="fas fa-chevron-left"></i></a>
                <a class="paginator-item" href="#">1</a>
                <span class="active paginator-item">2</span>
                <a class="paginator-item" href="#">3</a>
                <span class="paginator-item">...</span>
                <a class="paginator-item" href="#">10</a>
                <a class="paginator-item" href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>








        




@endsection