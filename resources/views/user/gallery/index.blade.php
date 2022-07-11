@extends('user.user_main')
@section('content')
<div id="wrapper">
    <div class="content">
        <section class="parallax-section header-section">
            <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg') }})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Our gallery</h2>
                <h3>Booking a table online is easy</h3>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="container">
                <div class="gallery-filters">
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All</a>		
                    <a href="#" class="gallery-filter " data-filter=".menu">Menu </a>
                    <a href="#" class="gallery-filter" data-filter=".rest">Restaurant</a>
                    <a href="#" class="gallery-filter" data-filter=".ovid">Video</a>
                </div>
                <div class="bold-separator"><span></span></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-items three-coulms grid-small-pad popup-gallery">
                            <!-- 1 -->
                            <div class="gallery-item menu">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="images/gallery/1.jpg" title="Image information">
                                        <span class="overlay"></span>
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="gallery-item rest">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="images/gallery/1.jpg">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="gallery-item   menu">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="images/gallery/1.jpg">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="gallery-item gallery-item-second  menu">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="{{ asset('frontend/images/gallery/1.jpg') }}">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg')}}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 5 -->
                            <div class="gallery-item  ovid">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="https://www.youtube.com/watch?v=r7TnaQ4dwwo" class="popup-youtube">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-play-circle"></i>
                                        <img  src="{{ asset('frontend/images/gallery/2.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            <div class="gallery-item  rest">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="{{ asset('frontend/images/gallery/1.jpg') }}">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 7 -->                                      
                            <div class="gallery-item  menu">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="{{ asset('frontend/images/gallery/1.jpg') }}">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-search"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- 8 -->
                            <div class="gallery-item  ovid rest">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="https://player.vimeo.com/video/89546048" class="popup-vimeo">
                                        <span class="overlay"></span> 
                                        <i class="fa fa-play-circle"></i>
                                        <img  src="{{ asset('frontend/images/gallery/1.jpg') }}"   alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end gallery items -->	
                    </div>
                </div>
            </div>
        </section>
        <!--=============== testimonials ===============-->
        <section class="parallax-section">
            <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg') }})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Testimonials</h2>
                <h3>What said about us</h3>
                <div class="bold-separator">
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials-holder">
                            <div class="customNavigation">
                                <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="testimonials-slider owl-carousel">
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li> <i class="fa fa-star-half"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-icon"><i class="fa fa-quote-left"></i></div>
            </div>
        </section>
</div>
@endsection