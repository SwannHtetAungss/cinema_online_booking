@extends('layouts.frontendtemplate')

@section('title','Cinema : Hostory Page')

@section('content')

<section class="after-head d-flex section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/cc.png')}}" data-parallax="scroll"></div>
    <div class="d-background bg-black-80"></div>
    <div class="top-block top-inner container">
        <div class="top-block-content">
            <h1 class="section-title">Your History</h1>
            <div class="page-breadcrumbs">
                <a class="content-link" href="{{route('homepage')}}">Home</a>
                <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                <span>History</span>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="sidebar-container">
        <div class="content">
            <section class="section-long section-spaced">

                <div class="section-line">
                    @if($bookings->isNotEmpty())
                    <div class="section-head">
                        <h2 class="section-title text-uppercase">Booking History</h2>
                    </div>
                    @foreach($bookings as $booking)
                    @foreach($shows as $show)
                        @if($booking->show_id == $show->id)
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content d-flex">
                                    <div class="pr-3">
                                        <img src="{{asset('storage/'.$show->movie->photo)}}" alt="" width="100">
                                    </div>
                                    <div class="table-responsive">
                                        <div class="text-center d-flex">
                                            <h4>Your Booking situaton is : </h4>
                                            @if($booking->status==0)
                                                <h4 class="text-warning">Booked</h4>
                                            @elseif($booking->status==1)
                                                <h4 class="text-success">Confirm</h4>
                                            @else
                                                <h4 class="text-danger">Cancel</h4>
                                            @endif
                                        </div> 
                                        <table class="table mt-1">
                                            <thead>
                                            <tr>
                                                <th scope="col">Movie</th>
                                                <th scope="col">Hall</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Ticket</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Seats</th>
                                                <th scope="col">Booking Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$show->movie->name}}</td>
                                                <td>{{$show->hall->name}}</td>
                                                <td>{{$show->show_time}}</td>
                                                <td>{{$show->show_date}}</td>
                                                <td>{{$booking->numberofseats}}</td>
                                                <td>{{$booking->total}}</td>
                                                <td>
                                                    @foreach ($showseats as $showseat)
                                                        @if ($booking->id == $showseat->booking_id)
                                                            {{$showseat->seat->seat_number}},
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$booking->booking_time}}</td>
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @endforeach

                    @else
                       <div class="section-head">
                        <h2 class="section-title text-uppercase text-muted">You have no booking history!</h2>
                        </div> 
                    @endif
                </div>
                
            </section>
        </div>
        
    </div>
</div>

@endsection
