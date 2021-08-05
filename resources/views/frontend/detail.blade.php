@extends('layouts.frontendtemplate')

@section('title','Cinema : Detail Page')

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
                            <div class="movie-info-entity">
                                <div class="entity-poster" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="http://via.placeholder.com/340x510" alt="" />
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
                                    <h2 class="entity-title">Blick</h2>
                                    <div class="entity-category">
                                        <a class="content-link" href="movies-blocks.html">comedy</a>,
                                        <a class="content-link" href="movies-blocks.html">detective</a>
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
                                                <span class="info-text">130</span>
                                                <span class="info-rest">&nbsp;min</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="entity-list">
                                        <li>
                                            <span class="entity-list-title">Release:</span>July 21, 2014 (Dolby Theatre), August 1, 2014 (United States)</li>
                                        <li>
                                            <span class="entity-list-title">Directed:</span>
                                            <a class="content-link" href="#">Lindson Wardens</a>,
                                            <a class="content-link" href="#">Anabelle One</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Starring:</span>
                                            <a class="content-link" href="#">Octopus Wardens</a>,
                                            <a class="content-link" href="#">Quanta Wardens</a>,
                                            <a class="content-link" href="#">Anabelle Two</a>,
                                            <a class="content-link" href="#">Anabelle Three</a>
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
                                        <li>
                                            <span class="entity-list-title">Language:</span>english</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">Synopsis</h2>
                            </div>
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
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">Photos & videos</h2>
                            </div>
                            <div class="grid row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="content-link action-icon-bordered rounded-circle" href="http://via.placeholder.com/1920x1080" data-magnific-popup="image">
                                                        <span class="icon-content"><i class="fas fa-search"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">Work hard image</h4>
                                            <p class="entity-subtext">12 may 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                        <span class="icon-content"><i class="fas fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">May video review</h4>
                                            <p class="entity-subtext">11 may 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="content-link action-icon-bordered rounded-circle" href="http://via.placeholder.com/1920x1080" data-magnific-popup="image">
                                                        <span class="icon-content"><i class="fas fa-search"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">Virtual image title</h4>
                                            <p class="entity-subtext">31 february 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="content-link action-icon-bordered rounded-circle" href="http://via.placeholder.com/1920x1080" data-magnific-popup="image">
                                                        <span class="icon-content"><i class="fas fa-search"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">Lost image title</h4>
                                            <p class="entity-subtext">30 february 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="content-link action-icon-bordered rounded-circle" href="http://via.placeholder.com/1920x1080" data-magnific-popup="image">
                                                        <span class="icon-content"><i class="fas fa-search"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">My image title</h4>
                                            <p class="entity-subtext">21 january 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="gallery-card-entity">
                                        <div class="entity-preview" data-role="hover-wrap">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                            </div>
                                            <div class="bg-theme-lighted d-over collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                <div class="entity-view-popup">
                                                    <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                        <span class="icon-content"><i class="fas fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-content">
                                            <h4 class="entity-title">Movie trailer</h4>
                                            <p class="entity-subtext">12 january 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-bottom">
                                <a class="btn btn-theme" href="gallery.html">View All</a>
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">Comments</h2>
                            </div>
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content">
                                        <h4 class="entity-title">Lie Stone</h4>
                                        <p class="entity-subtext">07.08.2018, 14:33</p>
                                        <p class="entity-text">Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
                                        </p>
                                    </div>
                                    <div class="entity-extra">
                                        <div class="grid-md row">
                                            <div class="col-12 col-sm-auto">
                                                <div class="entity-rating">
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="ml-sm-auto col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
                                            </div>
                                            <div class="col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-entity">
                                    <div class="entity-inner">
                                        <div class="entity-content">
                                            <h4 class="entity-title">Gabriel Norris</h4>
                                            <p class="entity-subtext">09.08.2018, 11:33</p>
                                            <p class="entity-text">Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
                                            </p>
                                        </div>
                                        <div class="entity-extra">
                                            <div class="grid-md row">
                                                <div class="ml-sm-auto col-auto">
                                                    <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content">
                                        <h4 class="entity-title">Keith Earlee</h4>
                                        <p class="entity-subtext">11.05.2018, 07:23</p>
                                        <p class="entity-text">Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
                                        </p>
                                    </div>
                                    <div class="entity-extra">
                                        <div class="grid-md row">
                                            <div class="col-12 col-sm-auto">
                                                <div class="entity-rating">
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="ml-sm-auto col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
                                            </div>
                                            <div class="col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-line">
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
                        </div>
                    </section>
                </div>
                <div class="sidebar section-long order-lg-last">
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Latest movies</h2>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">Deadman skull</a>
                                </h4>
                                <p class="entity-subtext">11 nov 2018</p>
                            </div>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">Dream forest</a>
                                </h4>
                                <p class="entity-subtext">29 oct 2018</p>
                            </div>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="http://via.placeholder.com/1920x1080" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">Fall</a>
                                </h4>
                                <p class="entity-subtext">29 oct 2018</p>
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