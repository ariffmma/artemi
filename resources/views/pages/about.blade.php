@extends('master')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
        </div>
</section>
<div class="container  bg-light">
    <div class="row no-gutters ">
        <div class="col-12 my-5">
            <h2>Overview</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, ipsam? Nam obcaecati tempore exercitationem necessitatibus doloremque qui nihil odio eius, voluptas, facere ratione. Laudantium consectetur inventore odio accusantium aspernatur harum?</p>
            <p><a href="#" class="btn-about">Learn More</a></p>
        </div>
      
    </div>
   
</div>
<div class="container my-5">
    <div class="row no-gutters ">
        <div class="col-lg-8">
            <div class="about-author d-flex">
                <div class="bio mr-5">
                    <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc">
                    <h5>Our Story & History</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, doloremque possimus sunt adipisci iusto dignissimos eos harum iste nisi? Debitis ullam amet voluptas doloremque perspiciatis dolor ea beatae atque tempore.</p>
                    <p><a href="#" class="btn-about">Learn More</a></p>
                </div>
            </div>
            <hr>
            <div class="about-author d-flex">
                <div class="bio mr-5">
                    <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc">
                    <h5>Our Team</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, doloremque possimus sunt adipisci iusto dignissimos eos harum iste nisi? Debitis ullam amet voluptas doloremque perspiciatis dolor ea beatae atque tempore.</p>
                    <p><a href="#" class="btn-about">Learn More</a></p>
                </div>
            </div>
            <hr>
            <div class="about-author">
                <h5>Awards</h5>
                <table class="table  table-borderless">
                    <tbody>
                        <tr>
                            <td class="bold_class blue">2014</td>
                            <td>
                                <ul class="list-group list-group-flush table_ul">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ipsam labore consectetur animi dolor veritatis amet tempore corrupti. Officia sit cum, facilis quaerat aperiam provident ex voluptatibus consectetur ratione error?</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold_class blue">2013</td>
                            <td>
                                <ul class="list-group list-group-flush table_ul">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold_class blue">2012</td>
                            <td>
                                <ul class="list-group list-group-flush table_ul">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold_class blue">2011</td>
                            <td>
                                <ul class="list-group list-group-flush table_ul">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold_class blue">2010</td>
                            <td>
                                <ul class="list-group list-group-flush table_ul">
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores recusandae, dolorem beatae iste illo alias qui fugiat tempore quidem minima dolorum atque vitae sunt. Iure tempora aliquid molestias ducimus?</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('pages.sub-page.sidebar') 
    </div>
    
</div>



@endsection
@push('scripts')
@endpush