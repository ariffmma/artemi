@extends('master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
        </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <h3 class="mb-4">Contact Us</h3>
                                        <div id="form-message-warning" class="mb-4"></div> 
                                        <div id="form-message-success" class="mb-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti suscipit incidunt minus et illo quia iusto dolor, cum ea corrupti amet dolores rerum impedit debitis minima, a repellat atque ipsam!
                                        </div>
                                        <div class="contact-wrap ">
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="name">Full Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <div class="form-group">
                                                            <label class="label" for="email">Email Address</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="subject">Subject</label>
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="#">Message</label>
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('pages.sub-page.sidebar') 
        </div>
    </div>
</section>




@endsection
@push('scripts')
@endpush