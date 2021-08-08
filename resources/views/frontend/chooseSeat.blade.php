@extends('layouts.frontendtemplate')

@section('seatcss')
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/css/seat.css')}}">
@endsection

@section('title','Cinema : Booking Seat Page')

@section('content')

	<section class="after-head d-flex section-text-white position-relative">
	    <div class="d-background" data-image-src="{{asset('frontend_assets/images/seat.jpg')}}" data-parallax="scroll"></div>
	    <div class="d-background bg-black-80"></div>
	    <div class="top-block top-inner container">
	        <div class="top-block-content">
	            <h1 class="section-title">Booking NOW</h1>
	            <div class="page-breadcrumbs">
	                <a class="content-link" href="{{route('homepage')}}">Home</a>
	                <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
	                <span>Choose-seat</span>
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
								    <div class="cinema-row">
								    	<div class="container">
								    		<div class="row">
								    			<div class="col ml-4">
								    				@if($bookingSeats->isEmpty())
												    	@foreach($seats as $seat)
													    	<a class="btn btn-primary mr-2 mb-3 addtocart" data-id="<?=$seat->id?>" data-seatnumber="<?=$seat->seat_number?>" data-seatprice="<?=$seat->seat_price?>" data-hallname="<?=$seat->hall->name?>" data-moviename="<?=$show->movie->name?>" data-showdate="<?=$show->show_date?>" data-showtime="<?=$show->show_time?>">
														      	<h5 class="text-white">
														      		{{$seat->seat_number}}
														      	</h5>
														    </a>
													    @endforeach
													@else
														@foreach($seats as $seat)
													    	<a class="btn mr-2 mb-3 addtocart @foreach($seatBookeds as $seatBooked) @if($seatBooked->seat_id==$seat->id && $seatBooked->show_id==$show->id) {{'btn-danger disabled'}} @else {{'btn-primary'}} @endif @endforeach" data-id="<?=$seat->id?>" data-seatnumber="<?=$seat->seat_number?>" data-seatprice="<?=$seat->seat_price?>" data-hallname="<?=$seat->hall->name?>" data-moviename="<?=$show->movie->name?>" data-showdate="<?=$show->show_date?>" data-showtime="<?=$show->show_time?>">
														      	<h5 class="text-white">
														      		{{$seat->seat_number}}
														      	</h5>
														    </a>
													    @endforeach
													@endif
								    			</div>
								    		</div>
								    	</div>
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
	                    	<table cellpadding="5">
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Hall</h4> </td>
	                    			<td> <h4 class="entity-title mb-2">: {{$show->hall->name}}</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Movie</h4> </td>
	                    			<td> <h4 class="entity-title mb-2">: {{$show->movie->name}}</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Time</h4> </td>
	                    			<td> <h4 class="entity-title mb-2">: {{$show->show_time}}</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Date</h4> </td>
	                    			<td> <h4 class="entity-title mb-2">: {{$show->show_date}}</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Tickets</h4> </td>
	                    			<td> <h4 class="entity-title mb-2 count">: 0</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Total</h4> </td>
	                    			<td> <h4 class="entity-title mb-2 total">: 0</h4> </td>
	                    		</tr>
	                    		<tr>
	                    			<td> <h4 class="entity-title mb-2">Seats</h4> </td>
	                    			<td> <h4 class="entity-title mb-2 snumber">: </h4> </td>
	                    		</tr>
	                    	</table>

	                    	{{-- <h4 class="entity-title mb-2">
	                           	Hall
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Movie
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Time
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Date
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Tickets
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Total
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                           	Seats
	                        </h4> --}}
	                    </div>

	                    {{-- <div class="entity-content">
	                    	<h4 class="entity-title mb-2">
	                        	: {{$seat->hall->name}}
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : {{$show->movie->name}}
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : {{$show->show_time}}
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : {{$show->show_date}}
	                        </h4>

	                        <h4 class="entity-title mb-2 count">
	                            : 0
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : $4000
	                        </h4>

	                        <h4 class="entity-title mb-2">
	                            : A1,A2
	                        </h4>
	                    </div> --}}
	                </div>
	            </section>
	            
	            <section class="section-sidebar">

	            	@guest
	                	<a class="btn btn-theme mb-2 d-block booking" href="{{ route('login') }}">Booking Now</a>
	                @else
	                	<a class="btn btn-theme mb-2 d-block booking" data-total="" data-snumber="" data-showid="{{$show->id}}" href="#">Booking Now</a>
	                @endguest

	                <table>
	                	<tr>
	                		<td>
	                			<h3 class="avaliable mt-2 d-inline-block"></h3> 
	                		</td>
	                		<td>
	                			<h3 class="d-inline">Avaliable</h3>
	                		</td>
	                	</tr>
	                	<tr>
	                		<td>
	                			<h3 class="sold mt-2 d-inline-block"></h3>
	                		</td>
	                		<td>
	                			<h3 class="d-inline">Sold</h3>
	                		</td>
	                	</tr>
	                </table>	                
	                
	            </section>
	        </div>
	    </div>
	</div>
@endsection

@section('seatjs')
	<script type="text/javascript" src="{{asset('frontend_assets/js/seat.js')}}"></script>
@endsection

@section('addtocart')
	<script type="text/javascript" src="{{asset('frontend_assets/js/booking.js')}}"></script>
@endsection