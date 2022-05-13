@extends('frontend.layout.default')
@section('content')
 <!-- Home Banner Section -->
 <section class="cat-banner-wrapper">
            <div class="cat-banner-social">
                <ul>
                    <li><a href="javascript:void(0);">Facebook</a></li>
                    <li><a href="javascript:void(0);">Twitter</a></li>
                    <li><a href="javascript:void(0);">Instagram</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="cat-banner-section">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="cat-banner-text">
                                <div class="cat-banner-text-inner">
                                    <h4><span>Planning Fabulous</span></h4>
                                    <h1 class="cat-banner-title">Book Us for your Dream Event</h1>
                                    <p>Find out professional caterers in your city for your Dream Events, long established fact a reader will be distracted the readable.</p>
                                    <div class="cat-banner-btn-wrap">
                                        <a href="#bookNow" class="cat-btn bookNow">
                                            Book Now
                                         </a>
                                        <a href="about.html" class="cat-btn btn-black">
                                            Know More
                                         </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="banner-img">
                                <img src="{{ asset('assets/images/main/story.png')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="#scroll-down-section" class="scroll-down-section">
                <span></span>
            </a>
            <a href="tel:0300 4795958" class="cat-banner-contact">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
			 0300 4795958
                </span>
            </a>
        </section>

        <!-- Top Dishes Section -->
        <section class="cat-top-dishes-wrapper cat-section-spacer relative" id="scroll-down-section">
            <div class="top-left-shap bouncing">
                <img src="{{ asset('assets/images/main/shap/tomatto.png')}}" alt="">
            </div>
            <div class="top-right-shap bouncing">
                <img src="{{ asset('assets/images/main/shap/leaf.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cat-heading-wrapper">
                            <h4>
                                Offer Zone
                            </h4>
                            <h2>
                                Popular Dishes Of Our Caterers
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/01.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>Delicious Sweets <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/02.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>Sandwich <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/03.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>Dark Sweets <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/04.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>burger <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/05.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>Veg <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cat-top-dish-section">
                            <div class="cat-top-dish-inner">
                                <div class="cat-top-dish-img">
                                    <img src="{{ asset('assets/images/main/dish/06.jpg')}}" alt="">
                                </div>
                                <div class="cat-top-dish-info">
                                    <a href="javascript:void(0);">
                                        <h4>Chilla <span>$50</span></h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
