@extends('master')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">News</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
        </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">Jan. 20, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters my-5">
                    <div class="col text-center">
                        <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
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