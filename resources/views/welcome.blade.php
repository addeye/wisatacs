@extends('layouts.master')


@section('content')
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="intro-wrap">
                    <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span
                            class="typed-words"></span></h1>

                    <div class="row">
                        <div class="col-12">
                            <form class="form">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <select name="" id="" class="form-control custom-select">
                                            <option value="">Destination</option>
                                            <option value="">Peru</option>
                                            <option value="">Japan</option>
                                            <option value="">Thailand</option>
                                            <option value="">Brazil</option>
                                            <option value="">United States</option>
                                            <option value="">Israel</option>
                                            <option value="">China</option>
                                            <option value="">Russia</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                        <input type="text" class="form-control" name="daterange">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                        <input type="text" class="form-control" placeholder="# of People">
                                    </div>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                                    </div>
                                    <div class="col-lg-8">
                                        <label class="control control--checkbox mt-3">
                                            <span class="caption">Save this search</span>
                                            <input type="checkbox" checked="checked" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="slides">
                    <img src="/tour/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
                    <img src="/tour/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                    <img src="/tour/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
                    <img src="/tour/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
                    <img src="/tour/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="untree_co-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="section-title text-center mb-3">Our Services</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-4 order-lg-1">
                <div class="h-100">
                    <div class="frame h-100">
                        <div class="feature-img-bg h-100"
                            style="background-image: url('tour/images/hero-slider-1.jpg');">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                <div class="feature-1 d-md-flex">
                    <div class="align-self-center">
                        <span class="flaticon-house display-4 text-primary"></span>
                        <h3>Beautiful Condo</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
                    </div>
                </div>

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="flaticon-restaurant display-4 text-primary"></span>
                        <h3>Restaurants & Cafe</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
                    </div>
                </div>

            </div>

            <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">

                <div class="feature-1 d-md-flex">
                    <div class="align-self-center">
                        <span class="flaticon-mail display-4 text-primary"></span>
                        <h3>Easy to Connect</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
                    </div>
                </div>

                <div class="feature-1 d-md-flex">
                    <div class="align-self-center">
                        <span class="flaticon-phone-call display-4 text-primary"></span>
                        <h3>24/7 Support</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="untree_co-section count-numbers py-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="9313">0</span>
                    </div>
                    <span class="caption">No. of Travels</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="8492">0</span>
                    </div>
                    <span class="caption">No. of Clients</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="100">0</span>
                    </div>
                    <span class="caption">No. of Employees</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="120">0</span>
                    </div>
                    <span class="caption">No. of Countries</span>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="untree_co-section">
    <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-lg-7">
                <h2 class="section-title text-center">Popular Destination</h2>
            </div>
        </div>

        <div class="owl-carousel owl-3-slider">

            <div class="item">
                <a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Pragser Wildsee</h3>
                        <span class="location">Italy</span>
                    </div>
                    <img src="/tour/images/hero-slider-1.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="images/hero-slider-2.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Oia</h3>
                        <span class="location">Greece</span>
                    </div>
                    <img src="/tour/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="images/hero-slider-3.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Perhentian Islands</h3>
                        <span class="location">Malaysia</span>
                    </div>
                    <img src="/tour/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
                </a>
            </div>


            <div class="item">
                <a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Rialto Bridge</h3>
                        <span class="location">Italy</span>
                    </div>
                    <img src="/tour/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>San Francisco, United States</h3>
                        <span class="location">United States</span>
                    </div>
                    <img src="/tour/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Lake Thun</h3>
                        <span class="location">Switzerland</span>
                    </div>
                    <img src="/tour/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

        </div>

    </div>
</div>


<div class="untree_co-section testimonial-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="section-title text-center mb-5">Testimonials</h2>

                <div class="owl-single owl-carousel no-nav">
                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="/tour/images/person_2.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Adam Aderson</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="/tour/images/person_3.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Lukas Devlin</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="/tour/images/person_4.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Kayla Bryant</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="/tour/images/hero-slider-1.jpg" alt="Image"
                            class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Italy</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Rialto Mountains</a></h3>
                            <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="/tour/images/hero-slider-2.jpg" alt="Image"
                            class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>United States</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">San Francisco</a></h3>
                            <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="/tour/images/hero-slider-3.jpg" alt="Image"
                            class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Malaysia</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Perhentian Islands</a></h3>
                            <div class="price ml-auto">
                                <span>$750.00</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="/tour/images/hero-slider-4.jpg" alt="Image"
                            class="img-fluid"></a>

                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Switzerland</span>
                    </span>

                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Lake Thun</a></h3>
                            <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-lg-6">
                <figure class="img-play-video">
                    <a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU"
                        data-fancybox>
                        <span></span>
                    </a>
                    <img src="/tour/images/hero-slider-2.jpg" alt="Image" class="img-fluid rounded-20">
                </figure>
            </div>

            <div class="col-lg-5">
                <h2 class="section-title text-left mb-4">Take a look at Tour Video</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>

                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                    mouth.</p>

                <ul class="list-unstyled two-col clearfix">
                    <li>Outdoor recreation activities</li>
                    <li>Airlines</li>
                    <li>Car Rentals</li>
                    <li>Cruise Lines</li>
                    <li>Hotels</li>
                    <li>Railways</li>
                    <li>Travel Insurance</li>
                    <li>Package Tours</li>
                    <li>Insurance</li>
                    <li>Guide Books</li>
                </ul>

                <p><a href="#" class="btn btn-primary">Get Started</a></p>


            </div>
        </div>
    </div>
</div>



<div class="py-5 cta-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
                <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Excepturi, fugit?</p>
                <p class="mb-0"><a href="booking.html"
                        class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
