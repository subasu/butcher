@extends('layouts.mainLayout')
@section('content')
    <!-- Home slideder-->
    <div id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 header-top-right">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="contenhomeslider">
                                <li><img alt="قصابی برادران" class="height-slider"
                                         src="{{url('public/main/assets/slider/1.jpg')}}" title="قصابی برادران"/>
                                </li>
                                <li><img alt="قصابی برادران" class="height-slider"
                                         src="{{url('public/main/assets/slider/3.jpg')}}" title="قصابی برادران"/>
                                </li>
                                <li><img alt="قصابی برادران" class="height-slider"
                                         src="{{url('public/main/assets/slider/4.jpg')}}" title="قصابی برادران"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="header-banner banner-opacity">--}}
                    {{--<a href="#"><img alt="Funky roots" src="public/main/assets/data/ads1.jpg"/></a>--}}
                    {{--</div>--}}
                </div>
                <div class="col-sm-3 slider-left"></div>

            </div>
        </div>
    </div>
    <!-- END Home slideder-->
    <!-- servives -->
    <div class="container service-parent-div-class">
        <div class="row">
            <div class="service text-right">
                <div class="col-xs-4 col-md-4 col-sm-4  service-item">
                    <div class="icon">
                        <i class="fa fa-clock-o fa-4x"></i>
                    </div>
                    <div class="info">
                        <a href="#"><h3>ساعات خدمت رسانی</h3></a>
                        <span>همه روزه از 9 صبح تا 9 شب به جز ایام تعطیل </span>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-sm-4 service-item">
                    <div class="icon">
                        <i class="fa fa-truck fa-4x"></i>
                    </div>
                    <div class="info">
                        <a href="#"><h3>تحویل درمحل مورد نظر شما</h3></a>
                        <span>سفارشات مورد نظر شما در اسرع وقت، در مکان مورد نظر شما تحویل داده می شود </span>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-sm-4 service-item">
                    <div class="icon">
                        <i class="fa fa-check-square fa-4x"></i>
                    </div>
                    <div class="info">
                        <a href="#"><h3>محصولات درجه یک</h3></a>
                        <span>محصولات مرغوب و تازه و با کیفیت را از ما بخواهید.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end services -->

    {{--<div class="page-top">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 col-sm-9 page-top-left">--}}
    {{--<div class="popular-tabs">--}}
    {{--<ul class="nav-tab">--}}
    {{--<li class="active"><a data-toggle="tab" href="#tab-1">BEST SELLERS</a></li>--}}
    {{--<li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>--}}
    {{--<li><a data-toggle="tab" href="#tab-3">New products</a></li>--}}
    {{--</ul>--}}
    {{--<div class="tab-container">--}}
    {{--<div id="tab-1" class="tab-panel active">--}}
    {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"--}}
    {{--data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"--}}
    {{--data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#">--}}
    {{--<img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/bs1.jpg"/>--}}
    {{--</a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="افزودن به علاقه مندی ها" class="heart" href="#"></a>--}}
    {{--<a title="مقایسه" class="compare" href="#"></a>--}}
    {{--<a title="نمایش چزئیات" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">افزودن به سبد خرید</a>--}}
    {{--</div>--}}
    {{--<div class="group-price">--}}
    {{--<span class="product-new">جدید</span>--}}
    {{--<span class="product-sale">حراج</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block text-right">--}}
    {{--<h5 class="product-name"><a href="#">عنوان محصول</a></h5>--}}
    {{--<div class="content_price" dir="">--}}
    {{--<span class="price product-price">38,95</span>--}}
    {{--<span class="price old-price">52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star text-left">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/bs2.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Perfect Dress</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/bs3.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="group-price">--}}
    {{--<span class="product-new">NEW</span>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Fresh Summer</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/bs4.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Flowers Dress</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div id="tab-2" class="tab-panel">--}}
    {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"--}}
    {{--data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"--}}
    {{--data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#">--}}
    {{--<img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p48.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#">--}}
    {{--<img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p49.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p50.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p51.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div id="tab-3" class="tab-panel">--}}
    {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"--}}
    {{--data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"--}}
    {{--data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p60.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p61.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p62.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/p63.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--</div>--}}
    {{--<div class="product-star">--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star"></i>--}}
    {{--<i class="fa fa-star-half-o"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-xs-12 col-sm-3 page-top-right">--}}
    {{--<div class="latest-deals">--}}
    {{--<h2 class="latest-deal-title">latest deals</h2>--}}
    {{--<div class="latest-deal-content">--}}
    {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"--}}
    {{--data-autoplayTimeout="1000" data-autoplayHoverPause="true"--}}
    {{--data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>--}}
    {{--<li>--}}
    {{--<div class="count-down-time" data-countdown="2015/06/27"></div>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/ld1.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--<span class="colreduce-percentage">(-10%)</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/ld2.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--<span class="colreduce-percentage">(-90%)</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>--}}
    {{--<div class="left-block">--}}
    {{--<a href="#"><img class="img-responsive" alt="product"--}}
    {{--src="public/main/assets/data/ld3.jpg"/></a>--}}
    {{--<div class="quick-view">--}}
    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
    {{--<a title="Quick view" class="search" href="#"></a>--}}
    {{--</div>--}}
    {{--<div class="add-to-cart">--}}
    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="right-block">--}}
    {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
    {{--<div class="content_price">--}}
    {{--<span class="price product-price">$38,95</span>--}}
    {{--<span class="price old-price">$52,00</span>--}}
    {{--<span class="colreduce-percentage">(-20%)</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{----}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!---->
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            <?php $count = 1;?>
            @foreach($menu as $mnu)
                @if($mnu->hasProduct)
                    <div class="category-featured myCategories">
                        <nav class="navbar nav-menu nav-menu-red show-brand">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-brand"><a href="#"><img alt="{{$mnu->title}}"
                                                                           src="public/main/assets/data/fashion.png"/>{{$mnu->title}}
                                    </a>
                                </div>
                                <span class="toggle-menu"></span>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mySubcategoryList" id="{{$mnu->id}}"
                                        style="margin-right: 6% ;">
                                        {{--<li class="active"><a data-toggle="tab" href="#tab-1">همه ی محصولات</a></li>--}}
                                        <?php $j = 1;?>
                                        @foreach($mnu->submenu as $submenu)
                                            <li><a data-toggle="tab" href="#tab-{{$j++}}">{{$submenu->title}}</a></li>
                                        @endforeach
                                        <?php $j = 0;?>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                            <div id="elevator-{{$count}}" class="floor-elevator">
                                <a href="#elevator-{{$count-1}}" class="btn-elevator up disabled fa fa-angle-up"></a>
                                <a href="#elevator-{{$count++}}" class="btn-elevator down fa fa-angle-down"></a>
                            </div>
                        </nav>
                        <div class="category-banner">
                            {{--<div class="col-sm-6 banner">--}}
                            {{--<a href="#"><img alt="ads2" class="img-responsive" src="public/main/assets/data/ads2.jpg"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6 banner">--}}
                            {{--<a href="#"><img alt="ads2" class="img-responsive" src="public/main/assets/data/ads3.jpg"/></a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <div class="featured-text1"><span></span></div>
                                <div class="banner-img">
                                    <a href="#"><img alt="{{$mnu->title}}"
                                                     src="{{url('public/dashboard/image/'.$mnu->image_src)}}"/></a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                    {{--<!-- tab product -->--}}
                                    {{--<div class="tab-panel active" id="tab-4">--}}
                                    {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true"--}}
                                    {{--data-nav="true" data-margin="0" data-autoplayTimeout="1000"--}}
                                    {{--data-autoplayHoverPause="true"--}}
                                    {{--data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/01_blue-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Blue Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/02_yellow-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Yellow Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/03_cyan-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Cyan Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/04_nice-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Nice Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/05_flowers-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Flowers Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<div class="left-block">--}}
                                    {{--<a href="#">--}}
                                    {{--<img class="img-responsive" alt="product"--}}
                                    {{--src="public/main/assets/data/06_red-dress.jpg"/></a>--}}
                                    {{--<div class="quick-view">--}}
                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="add-to-cart">--}}
                                    {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                    {{--<h5 class="product-name"><a href="#">Red Dress</a></h5>--}}
                                    {{--<div class="content_price">--}}
                                    {{--<span class="price product-price">$38,95</span>--}}
                                    {{--<span class="price old-price">$52,00</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-star">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                    <!-- tab product -->
                                        <?php $j = 1;?>
                                        @foreach($mnu->submenu as $submenu)
                                            <div class="tab-panel @if($j==1) active @endif"
                                                 id="tab-{{$j++}}" {{$submenu->title}}>
                                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                                    data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                                    data-autoplayHoverPause="true"
                                                    data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                                    @foreach($submenu->products as $product)
                                                        {{--                                            {{dd($product)}}--}}
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#">
                                                                    @if(!empty($product->productImages[0]))
                                                                        <img src="{{url('public/dashboard/productFiles/picture/'.$product->productImages[0]->image_src)}}"
                                                                             alt="عنوان محصول" width="200" height="250"
                                                                             style="text-decoration: underline;"/>
                                                                    @endif
                                                                </a>
                                                                <div class="quick-view">
                                                                    <a title="افزودن به علاقه مندی ها"
                                                                       class="heart"></a>
                                                                    <a title="مقایسه" class="compare"></a>
                                                                    <a title="نمایش جزئیات" class="search"
                                                                       id="goToDetail" content="{{$product->id}}"
                                                                       href="{{url('productDetail/'.$product->id)}}"></a>
                                                                </div>
                                                            </div>
                                                            <div class="right-block">
                                                                <h3 class="product-name text-right col-md-12">
                                                                    @if(strlen($product->title) != mb_strlen($product->title, 'utf-8'))
                                                                        <a class="text-right">{{$product->title}}</a>
                                                                    @endif
                                                                    @if(strlen($product->title) == mb_strlen($product->title, 'utf-8'))
                                                                        <a class="text-left">{{$product->title}}</a>
                                                                    @endif
                                                                </h3>
                                                                <div class="text-left">
                                                                    <div class="">
                                                                        <div class="col-md-6 padding-r-l-0">
                                                                            @foreach($product->productFlags as $flag)
                                                                                @if($flag->active == 1)
                                                                                    <b><a class="price" id="productFlag"
                                                                                          data-toggle=""
                                                                                          name="{{$flag->price}}"
                                                                                          title="تومان">
                                                                                            &nbsp{{number_format($flag->price)}}
                                                                                            &nbsp</a>
                                                                                    </b>
                                                                                    <b style="float: left">تومان </b>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                        <div class=" col-md-6 padding-r-l-0">
                                                                            <span class="price product-price pull-right  text-right"> : قیمت اصلی </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class=" text-right">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-6">
                                    <span class="product-star">
                                        @if($product->productScore == null ||  $product->productScore == 0 )
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                        @if($product->productScore != null ||  $product->productScore != 0 )
                                            @if(filter_var($product->productScore,FILTER_VALIDATE_INT))
                                                <?php $i = 0;   ?>
                                                @while($product->productScore > $i)
                                                    <i class="fa fa-star"></i>
                                                    <?php $i++; ?>
                                                @endwhile
                                                <?php $sub = 5 - $product->productScore ?>
                                                @while($sub > 0 )
                                                    <i class="fa fa-star-o"></i>
                                                    <?php $sub--; ?>
                                                @endwhile
                                            @endif
                                            @if(!filter_var($product->productScore,FILTER_VALIDATE_INT))
                                                <?php $array = explode('.', $product->productScore);?>
                                                @while($array[0] > 0)
                                                    <i class="fa fa-star"></i>
                                                    <?php $array[0]--; ?>
                                                @endwhile
                                                <i class="fa fa-star-half-o"></i>
                                                <?php $sub = 5 - $product->productScore ?>
                                                @while($sub-1 > 0 )
                                                    <i class="fa fa-star-o"></i>
                                                    <?php $sub--; ?>
                                                @endwhile
                                            @endif
                                        @endif
                                    </span>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <span class="price product-price">  :امتیاز  </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{--<input type="hidden" class="score" value="{{$product->scores[0]->score}}">--}}
                                                                {{--<input type="hidden" id="count" value="{{$count}}">--}}
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                        <?php $j = 0;?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end featured category fashion -->
            @endif
        @endforeach
        <!-- Baner bottom -->
        {{--<div class="row banner-bottom">--}}
        {{--<div class="col-sm-6">--}}
        {{--<div class="banner-boder-zoom">--}}
        {{--<a href="#"><img alt="ads" class="img-responsive" src="public/main/assets/data/ads17.jpg"/></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-6">--}}
        {{--<div class="banner-boder-zoom">--}}
        {{--<a href="#"><img alt="ads" class="img-responsive" src="public/main/assets/data/ads18.jpg"/></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        <!-- end banner bottom -->
        </div>
    </div>

@endsection
