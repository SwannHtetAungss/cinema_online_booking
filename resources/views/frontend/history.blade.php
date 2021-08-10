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
                {{-- <div class="section-line">
                    <article class="article-tape-entity">
                        <div class="entity-preview">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                            </div>
                            <div class="entity-date">
                                <div class="tape-block tape-horizontal tape-single bg-theme text-white">
                                    <div class="tape-dots"></div>
                                    <div class="tape-content m-auto">20 jul 2019</div>
                                    <div class="tape-dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="entity-content">
                            <h2 class="entity-title">Creative life</h2>
                            <div class="entity-category">
                                <a class="content-link" href="news-blocks-sidebar-right.html">comedy</a>,
                                <a class="content-link" href="news-blocks-sidebar-right.html">detective</a>,
                                <a class="content-link" href="news-blocks-sidebar-right.html">sci-fi</a>
                            </div>
                        </div>
                    </article>
                    <div class="section-description">
                        <p class="lead">Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <h6 class="text-dark">Why do we use it?</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <h6 class="text-dark">Where does it come from?</h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
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
                            <div class="col-auto">
                                <div class="entity-links">
                                    <div class="entity-list-title">Tags:</div>
                                    <a class="content-link" href="#">family</a>,&nbsp;
                                    <a class="content-link" href="#">gaming</a>,&nbsp;
                                    <a class="content-link" href="#">historical</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                        <table class="table">
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
                {{-- <div class="section-line">
                    <div class="section-head">
                        <h2 class="section-title text-uppercase">Add comment</h2>
                    </div>
                    <form autocomplete="off">
                        <div class="row form-grid">
                            <div class="col-12 col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="name" type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-group">
                                    <textarea class="form-control" name="review" placeholder="Add your review"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rating-line">
                                    <label>Rating:</label>
                                    <div class="form-rating" name="rating">
                                        <input type="radio" id="rating-10" name="rating" value="10" />
                                        <label for="rating-10">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-9" name="rating" value="9" />
                                        <label for="rating-9">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-8" name="rating" value="8" />
                                        <label for="rating-8">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-7" name="rating" value="7" />
                                        <label for="rating-7">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-6" name="rating" value="6" />
                                        <label for="rating-6">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-5" name="rating" value="5" />
                                        <label for="rating-5">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-4" name="rating" value="4" />
                                        <label for="rating-4">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-3" name="rating" value="3" />
                                        <label for="rating-3">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-2" name="rating" value="2" />
                                        <label for="rating-2">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-1" name="rating" value="1" />
                                        <label for="rating-1">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="px-5 btn btn-theme" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </section>
        </div>
        {{-- <div class="sidebar section-long order-lg-last">
            <section class="section-sidebar">
                <div class="section-head">
                    <h2 class="section-title text-uppercase">Latest articles</h2>
                </div>
                <div class="article-short-line-entity">
                    <a class="entity-preview" href="article-sidebar-right.html">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">Creative life</a>
                        </h4>
                        <p class="entity-subtext">20 jul 2019</p>
                    </div>
                </div>
                <div class="article-short-line-entity">
                    <a class="entity-preview" href="article-sidebar-right.html">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">One step to the end</a>
                        </h4>
                        <p class="entity-subtext">15 jun 2019</p>
                    </div>
                </div>
                <div class="article-short-line-entity">
                    <a class="entity-preview" href="article-sidebar-right.html">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="http://via.placeholder.com/720x405" alt="" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="article-sidebar-right.html">Here we go again</a>
                        </h4>
                        <p class="entity-subtext">24 may 2019</p>
                    </div>
                </div>
            </section>
            <section class="section-sidebar">
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
            </section>
            <section class="section-sidebar">
                <a class="d-block" href="#">
                    <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
                </a>
            </section>
        </div> --}}
    </div>
</div>

@endsection
{{-- <h4 class="entity-title">Lie Stone</h4>
<p class="entity-subtext">07.08.2018, 14:33</p>
<p class="entity-text">Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
</p> --}}