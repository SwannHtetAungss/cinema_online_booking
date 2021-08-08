
@extends('layouts.frontendtemplate')

@section('title','Cinema : Movie Page')

@section('content')

   

<section class="section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/cinema1.jpg')}}" data-parallax="scroll"></div>
    <div class="d-background bg-theme-blacked"></div>
    <div class="mt-auto container position-relative">
        <div class="top-block-head text-uppercase">
            <h2 class="display-4">Movies
                <span class="text-theme">Gallery</span>
            </h2>
        </div>
        
    
    <div class="container">
                <div class="grid row">
                    @foreach ($movies as $movie)
                     <div class="col-sm-6 col-lg-4">
                        <div class="gallery-entity">
                            <div class="entity-preview" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                    <img class="embed-responsive-item" src="{{asset('storage/'.$movie->photo)}}" alt="" />
                                </div>
                                <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <div class="entity-view-popup">
                                        <a class="content-link action-icon-bordered rounded-circle" href="{{asset('storage/'.$movie->photo)}}" data-magnific-popup="image">
                                            <span class="icon-content"><i class="fas fa-search"></i></span>
                                        </a>
                                    </div>
                                    <h4 class="entity-title">{{$movie->name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> 

</section>








        


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