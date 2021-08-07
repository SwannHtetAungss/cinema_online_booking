@extends('layouts.frontendtemplate')

@section('title','Cinema : Contact Page')

@section('content')

<section class="after-head d-flex section-text-white position-relative">
    <div class="d-background" data-image-src="{{asset('frontend_assets/images/pexels.jpg')}}" data-parallax="scroll"></div>
    <div class="d-background bg-black-80"></div>
    <div class="top-block top-inner container">
        <div class="top-block-content">
            <h1 class="section-title">Contact us</h1>
            <div class="page-breadcrumbs">
                <a class="content-link" href="{{route('homepage')}}">Home</a>
                <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                <span>Contact us</span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="gmap-with-map">
        {{-- <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ml-lg-auto pt-5 mt-4 pl-5"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711369.3048401709!2d95.76392159470817!3d16.879674252168307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2sfr!4v1628247658135!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <div class="col-lg-6 ml-lg-auto pr-5">
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
<section class="section-long">
    <div class="container">
        <div class="grid row">
            <div class="col-md-6">
                <h4 class="entity-title">Address</h4>
                <p class="entity-text">Sidestate NSW 4132, Sidney, Australia
                    <br/> 2200-2214 S Washtenaw Ave, Chicago, USA</p>
            </div>
            <div class="col-md-6">
                <h4 class="entity-title">Phone</h4>
                <p class="entity-text">(+88) 018 4113 6251, (+43) 018 4111 7255
                    <br/>(+50) 118 4341 5251, (+08) 123 567 7255</p>
            </div>
            <div class="col-md-6">
                <h4 class="entity-title">Email</h4>
                <p class="entity-text">info@memico.net
                    <br/>service@memico.net</p>
            </div>
            <div class="col-md-6">
                <h4 class="entity-title">Fax</h4>
                <p class="entity-text">(+88) 018 4113 6251, (+43) 018 4111 7255
                    <br/>(+50) 118 4341 5251, (+08) 123 567 7255</p>
            </div>
        </div>
        <p class="text-muted mt-5">If you have any questions or suggestions, we are always happy to hear from you. Contact us convenient for you.</p>
    </div>
</section>

@endsection