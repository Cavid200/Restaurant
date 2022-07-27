@extends('user.user_main')
@section('content')

<div id="wrapper">
    <div class="content">
        <section class="parallax-section header-section">
            <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg') }})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Hot dishes</h2>
                <h3>Pellentesque habitant morbi</h3>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="menu-bg lbd" style="background-image:url(images/menu/1.png)" data-top-bottom="transform: translateX(200px);" data-bottom-top="transform: translateX(-200px);">
            </div>
            <div class="container">
                <div class="separator color-separator"></div>
                <div class="menu-holder">
                    <div class="row">
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Steak Filet</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Miso chicken</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$26</div>
                                    </div>
                                </div>
                                <p>Fingerling Potatoes, Ossetra Caviar</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Doner Burger</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Excepteur sint occaecat cupidatat noproident</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item  hot-deal">
                                <span class="hot-desc">Chef selection</span>
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Roast Chicken</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Duis aute irure dolor in reprehenderit voluptate</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Grill Salmont</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$26</div>
                                    </div>
                                </div>
                                <p>Nemo enim ipam voluptatem voluptas aspernatur aut</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Fried Potatoes</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Excepteur sint occaecat cupidatat noproident</p>
                            </div>
                            <!--menu item end-->
                        </div>
                    </div>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section class="parallax-section">
            <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg') }})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Dessert</h2>
                <h3>Aenean ultricies mi vitae est</h3>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="menu-bg rbd" style="background-image:url(images/menu/1.png)" data-top-bottom="transform: translateX(-200px);" data-bottom-top="transform: translateX(200px);"></div>
            <div class="container">
                <div class="separator color-separator"></div>
                <div class="menu-holder">
                    <div class="row">
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Toro pie</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$23</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Creme Brulee</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$26</div>
                                    </div>
                                </div>
                                <p>Fingerling Potatoes, Ossetra Caviar</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Tarte Tatin</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$153</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Cheese Board</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$45</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item hot-deal">
                                <span class="hot-desc">Sale - 20%</span>
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Chocolate brownie</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$87</div>
                                    </div>
                                </div>
                                <p>Fingerling Potatoes, Ossetra Caviar</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Lemon Meringue</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$211</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Banana Cream</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$211</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Wildberry</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$211</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                    </div>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section class="parallax-section">
            <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg') }})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Drinks </h2>
                <h3>Donec eu libero</h3>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="menu-bg lbd" style="background-image:url(images/menu/1.png)" data-top-bottom="transform: translateX(200px);" data-bottom-top="transform: translateX(-200px);">
            </div>
            <div class="container">
                <div class="separator color-separator"></div>
                <div class="menu-holder">
                    <div class="row">
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Pink Wine</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Frappe</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$26</div>
                                    </div>
                                </div>
                                <p>Fingerling Potatoes, Ossetra Caviar</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item hot-deal">
                                <span class="hot-desc">Chef selection</span>
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Coctail Rose</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Summer Beer</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Red Mojitos</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$26</div>
                                    </div>
                                </div>
                                <p>Fingerling Potatoes, Ossetra Caviar</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Kiwi Coctail</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                        <div class="col-md-6">
                            <!--menu item-->
                            <div class="menu-item">
                                <div class="menu-item-details">
                                    <div class="menu-item-desc"><a href="images/bg/1.jpg" class="image-popup">Smoky Paloma</a></div>
                                    <div class="menu-item-dot"></div>
                                    <div class="menu-item-prices">
                                        <div class="menu-item-price">$130</div>
                                    </div>
                                </div>
                                <p>Sed quia non numquam eius modi tempora</p>
                            </div>
                            <!--menu item end-->
                        </div>
                    </div>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection