<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sporter - Beli Peralatan Olahraga Murah dan Berkualitas</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/icon-font-linea.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/effect.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/home.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.theme.default.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                @csrf
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            {!! Form::close() !!}
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="#">Home</a>
                </li>
                <li class="level1 active dropdown">
                    <a href="#">Shop</a>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!-- Menu Mobile -->
    <div class="menu-mobile-left-content menu-bg-white">
        <ul>
            <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
            <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Pakaian</p></a></li>
            <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Raket</p></a></li>
            <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Sepatu</p></a></li>
            <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Kaos Kaki</p></a></li>
            <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Shuttlecocks</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class="wrappage">
        <header class="relative full-width">
            <div class=" container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class=" header-top">
                            <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                                <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Call us <span class="text-red bold">+62 821-1765-7046</span>
                            </p>
                            <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                                <ul class="clear-margin">
                                    <li class="relative"><a href="#">My Account</a></li>
                                    <li class="relative"><a href="#">Wishlist</a></li>
                                    <li class="relative">
                                        <a href="#">EN</a>
                                        <ul>
                                            <li class="relative"><a href="#">ID</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix header-content full-width relative">
                            <div class="clearfix icon-menu-bar">
                                <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                            </div>
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                            <div class="clearfix search-box relative float-left">
                                <form method="GET" action="/" class="">
                                    <div class="clearfix category-box relative">
                                        <select name="cate_search">
                                            <option>All Category</option>
                                            <option>Pakaian</option>
                                            <option>Raket</option>
                                            <option>Sepatu</option>
                                            <option>Kaos Kaki</option>
                                            <option>Shuttlecocks</option>
                                        </select>
                                    </div>
                                    <input type="text" name="s" placeholder="Enter keyword here . . .">
                                    <button type="submit" class="animate-default button-hover-red">Search</button>
                                </form>
                            </div>
                            <div class="clearfix icon-search-mobile absolute">
                                <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">0</p>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">0</p>
                            </div>
                            <div class="cart-detail-header border">
                                <div class="relative">
                                </div>
                                <div class="relative border no-border-l no-border-r total-cart-header">
                                    <p class="bold clear-margin">Subtotal:</p>
                                    <p class=" clear-margin bold">Rp 0</p>
                                </div>
                                <div class="relative btn-cart-header">
                                    <a href="#" class="uppercase bold animate-default">view cart</a>
                                    <a href="#" class="uppercase bold button-hover-red animate-default">checkout</a>
                                </div>
                            </div>
                            <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                            <div class="clearfix box-search-mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> all categories</span>
						</a>
                    </div>
                </div>
            </div>
            <div class="menu-header-v3 hidden-ipx">
                <div class="container">
                    <div class="row">
                        <!-- Menu Page -->
                        <div class="menu-header full-width">
                            <ul class="clear-margin">
                                <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> all categories</a></li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Home</a>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">shop</a>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">contact us</a>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">about us</a>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class="clearfix menu_more_header menu-web menu-bg-white">
                <ul>
                    <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                    <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Pakaian</p></a></li>
                    <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Raket</p></a></li>
                    <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Sepatu</p></a></li>
                    <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Kaos Kaki</p></a></li>
                    <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Shuttlecocks</p></a></li>
                </ul>
            </div>
            <div class="header-ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu-header">
                                <ul class="main__menu clear-margin">
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">home</a>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">shop</a>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">contact us</a>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">about us</a>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Box -->
        <!-- Content Box -->
        <div class="relative clearfix full-width">
            <!-- Menu & Slide -->
            <div class="clearfix container-web relative">
                <div class=" container relative">
                    <div class="row">
                        <div class=" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default">
                            <!-- Menu -->
                            <div class=" menu-web relative menu-bg-white border no-border-t">
                                <ul>
                                    <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                                    <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Pakaian</p></a></li>
                                    <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Raket</p></a></li>
                                    <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Sepatu</p></a></li>
                                    <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Kaos Kaki</p></a></li>
                                    <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Shuttlecocks</p></a></li>
                                </ul>
                            </div>
                            <!-- Slide -->
                            <div class="clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default">
                                <div class="clearfix slide-home owl-carousel owl-theme">
                                    <div class="item"><a href="#"><img src="img/slide_v3.png" alt="Banner Home V3"></a></div>
                                    <div class="item"><a href="#"><img src="img/banner_v3_1-min.png" alt="Banner Home V3"></a></div>
                                </div>
                            </div>
                            <div class="clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small">
                                <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative bottom-margin-15-default">
                                    <img src="img/banner_slide_v3.png" alt="">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Menu & Slide -->
                    </div>
                </div>
            </div>
            <!-- List Logo Top -->
            <div class="container-web">
                <div class="container">
                    <div class="row list-logo-top-v3">
                        <ul class="clear-margin border-collapsed-box">
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_7.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_8.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_9.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_6.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_10.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_1.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_11.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_2.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_12.png" alt="Logo" /></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_13-min.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_14-min.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_15-min.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_16-min.png" alt="Logo"></a></li>
                            <li class="border-collapsed-element"><a href="#"><img src="img/logo_17-min.png" alt="Logo"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End List Logo Top -->
            <!-- Product Box -->
            <div class="top-margin-default container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix title-box title-box-v3 full-width">
                            <div class="clearfix name-title-box title-category title-green-bd relative">
                                <img src="img/icon_food_color.png" alt="Icon Food" class="absolute">
                                <p class="text-default-color">Hot Items</p>
                            </div>
                            <div class="clearfix menu-title-box capitalize">
                                <ul>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#raket','.box-food-content')">Raket</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#pakaian','.box-food-content')">Pakaian</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#dry-food','.box-food-content')">Kaos Kaki</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#vegetables','.box-food-content')">Sepatu</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#drinks','.box-food-content')">Shuttlecocks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=" bottom-margin-default full-width">
                            <!-- Banner Home V3 -->
                            <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                                <img src="https://previews.123rf.com/images/soifer/soifer1806/soifer180600077/103260428-summer-sale-vertical-banner-design-template-vector-neon-sign-modern-trend-design-neon-style-webbanne.jpg" alt="Banner Home V3" width="293" height="585">
                                <a href="#"></a>
                            </div>
                            <!-- List Product V3 -->
                            <div class="clearfix box-content-product-home-v3 float-left relative">
                                <div class="box-food-content relative animate-default active-box-category hidden-content-box border-collapsed-box" id="raket">
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bfYDQnyJof5XeDXhFOsGS9zQ4zouHnN53XlXn3J6Gwyf4e0t&s" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Li Ning Raket</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 150.000</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="pakaian">
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://cf.shopee.co.id/file/9bf827ab7fae1c6c006e4db86482a2ae" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Pakaian Badminton</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 500.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="dry-food">
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/2/25/170359342/170359342_efbbb0ab-6e0f-4fa3-aed4-53927dbbb648_1500_1500.jpg" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- List Logo V3 -->
                            <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                                <ul>
                                    <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                    <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                    <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                    <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                    <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                    <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Box -->
        </div>
        <!-- End Content Box -->
        <!-- Footer Box -->
        <footer class=" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b">
            <div class="clearfix container-web relative">
                <div class=" container clear-padding">
                    <div class="row">
                        <!-- Support -->
                        <div class="clearfix support-box support-box-v3 full-width">
                            <div class="container-web clearfix">
                                <div class=" container ">
                                    <div class="row">
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="img/icon_free_ship.png" alt="Icon Free Ship" class="float-left" />
                                            <p class="float-left">free shipping</p>
                                            <p class="float-left">on order over $500</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="img/icon_support.png" alt="Icon Supports" class="float-left">
                                            <p class="float-left">support</p>
                                            <p class="float-left">life time support 24/7</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="img/icon_patner.png" alt="Icon partner" class="float-left">
                                            <p class="float-left">help partner</p>
                                            <p class="float-left">help all aspects</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="img/icon_phone_big.png" alt="Icon Phone Tablet" class="float-left">
                                            <p class="float-left">contact with us</p>
                                            <p class="float-left">+62 821-1765-7046</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Support Box -->
                    </div>
                    <div class="row">
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>my account</p>
                            <ul class="list-footer">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Compare</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>information</p>
                            <ul class="list-footer">
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>our services</p>
                            <ul class="list-footer">
                                <li><a href="#">Product Recall</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Returns And Exchanges</a></li>
                                <li><a href="#">Shipping Options</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>contact us</p>
                            <ul class="icon-footer">
                                <li><i class="fa fa-home" aria-hidden="true"></i> Jl. Budi Indah Rt01/04 No.228</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> -</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +62 821-1765-7046</li>
                                <li><i class="fa fa-fax" aria-hidden="true"></i> +62 821-1765-7046</li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Box Social -->
            <div class=" top-footer full-width">
                <div class="clearfix container-web relative">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
                                <div class="clearfix text-subscribe">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <p>sign up for newsletter</p>
                                    <p>Get updates on discount & counpons.</p>
                                </div>
                                <div class="clearfix form-subscribe">
                                    <input type="text" name="email-subscribe" placeholder="Enter your email . . .">
                                    <button class="animate-default button-hover-red">subscribe</button>
                                </div>
                            </div>
                            <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
                                <a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
                                <a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
                                <a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
                                <a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Box Social -->
            <div class=" bottom-footer full-width">
                <div class="clearfix container-web">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-7 clear-padding copyright">
                                <p>Copyright © 2018 by Sporter. All Rights Reserved.</p>
                            </div>
                            <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                                <div class="icon_logo_footer float-right">
                                    <img src="{!! asset('img/image_payment_footer-min.png') !!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer Box -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/owl.carousel.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/scripts.js') !!}" defer=""></script>
</body>
</html>