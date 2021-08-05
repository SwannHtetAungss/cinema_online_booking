@extends('layouts.frontendtemplate')

@section('seatcss')
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/css/seat.css')}}">
@endsection

@section('title','Cinema : Booking Seat Page')

@section('content')

	<section class="after-head d-flex section-text-white position-relative">
	    <div class="d-background" data-image-src="http://via.placeholder.com/1920x1080" data-parallax="scroll"></div>
	    <div class="d-background bg-black-80"></div>
	    <div class="top-block top-inner container">
	        <div class="top-block-content">
	            <h1 class="section-title">Movies info</h1>
	            <div class="page-breadcrumbs">
	                <a class="content-link" href="#">Home</a>
	                <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
	                <a class="content-link" href="movies-blocks.html">Movies</a>
	            </div>
	        </div>
	    </div>
	</section>
	<div class="container">
	    <div class="sidebar-container">
	        <div class="content">
	            <section class="section-long">
	                <div class="section-line">
	                    <div class="section-description mb-5">
	                        <h2 class="section-title text-uppercase" id="screen">Screen</h2>
	                    </div>
	                    <div class="section-description">
	                    	<div class="theatre">
							  	<div class="cinema-seats left">
								    <div class="cinema-row row-1">
								      <div class="seat"><h5 class="text-white text-center">A1</h5></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-2">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-3">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-4">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-5">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-6">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-7">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-8">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>
								</div>

								{{-- <div class="cinema-seats right">
								    <div class="cinema-row row-1">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-2">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-3">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-4">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-5">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-6">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								    </div>

								    <div class="cinema-row row-7">
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
								      <div class="seat"></div>
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
	                    <h2 class="section-title text-uppercase">Voucher</h2>
	                </div>
	                <div class="movie-short-line-entity">
	                    <div class="entity-content">
	                        <h4 class="entity-title mb-2">
	                           	Movie
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Time
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Tickets
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Total
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Seats
	                        </h4>
	                    </div>

	                    <div class="entity-content">
	                        <h4 class="entity-title mb-2">
	                            : Deadman skull
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : April 3, 21:00
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : 2
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : $4000
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : A1,A2
	                        </h4>
	                    </div>
	                </div>
	            </section>
	            
	            <section class="section-sidebar">
	                <a class="btn btn-theme mb-2 d-block" href="gallery.html">Booking Now</a>

	                <h4 class="avaliable my-1 d-inline-block"></h4> 
	                <h3 class="d-inline">Avaliable</h3>
	                <br>
	                <h4 class="sold my-1 d-inline-block"></h4>
	                <h4 class="d-inline">Sold</h4>
	                <br>
	                <h4 class="selected my-1 d-inline-block"></h4>
	                <h4 class="d-inline">Selected</h4>
	            </section>
	        </div>
	    </div>
	</div>
@endsection

@section('seatjs')
	<script type="text/javascript" src="{{asset('frontend_assets/js/seat.js')}}"></script>
@endsection



