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
        @include('layouts.header')
        <!-- End Header Box -->
        <!-- Content Box -->
        <div class="relative clearfix full-width">
            <!-- Menu & Slide -->
            <!-- Product Box -->
            <div class="top-margin-default container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix title-box title-box-v3 full-width">
                            <div class="clearfix name-title-box title-category title-green-bd relative">
                                <img src="img/icon_food_color.png" alt="Icon Food" class="absolute">
                                {{-- <p class="text-default-color">Hot Product</p> --}}
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
                                <img src="https://cdn.shopify.com/s/files/1/2982/8990/products/2017-New-Quick-Dry-Men-Women-Badminton-Training-Sets-Couple-Model-Breathable-Badminton-Shirts-Clothes-Korea_8962fe6a-7f68-4dd1-a26c-dd3b61923df1_1024x1024.jpg?v=1521900837" alt="Banner Home V3" width="293" height="585">
                                <a href="#"></a>
                            </div>
                            <!-- List Product V3 -->
                            <div class="clearfix box-content-product-home-v3 float-left relative">
                                <div class="box-food-content relative animate-default active-box-category hidden-content-box border-collapsed-box" id="raket">
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/racket/1.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Raket badminton Carlton Airblade 37</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 450.000</span> Rp 400.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/racket/2.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Raket Badminton Pro Ace Power Ace 99</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 400.000</span> Rp 380.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/racket/3.png') !!}" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Raket badminton Wish Matt Fushiontec 998</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 250.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/racket/4.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Raket Badminton Yonex Voltric Z Force</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 250.000</span> Rp 250.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/racket/5.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Raket Li-Ning SS 68</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 300.000</span> Rp 285.000</p>
                                            </div>
                                        </div>
                                        <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                            <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/racket/6.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                                <a href="#"></a>
                                            </div>
                                            <div class="clearfix absolute name-product-no-ranking">
                                                <p class="title-product clearfix full-width"><a href="#">Raket Yonex Muscle Power 22</a></p>
                                                <p class="clearfix price-product"><span class="price-old">Rp 450.000</span> Rp 300.000</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="pakaian">
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/clothes/1.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">YONEX Tshirt</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 200.000</span> Rp 150.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/clothes/2.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Li-ning AVSN 283 Tshirt</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 170.000</span> Rp 100.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/clothes/3.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Flypower Mandala Advantage Tshirt</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 179.000</span> Rp 150.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/clothes/4.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Flypower Antasena 2 Celana</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 149.000</span> Rp 120.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/clothes/5.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Astec ACA-M KS01 A</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 89.000</span> Rp 50.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                                <img src="{!! asset('img/clothes/6.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Specs Morpheus Shorts</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 100.000</span> Rp 85.000</p>
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
                                            <p class="title-product clearfix full-width"><a href="#">Nike Sport Socks Crew</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 80.000</span> Rp 55.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/socks/1.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos kaki YONEX 085101CM socks ori - white</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 40.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/socks/2.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki Badminton Yonex Ssmp 1856 S-S White-Red</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 50.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/socks/3.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos Kaki Badminton Bulutangkis Victor SK 112 Biru</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 65.000</span> Rp 50.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/socks/4.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Flypower Skyhawk Kaos Kaki Badminton Unisex - White Blue</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 35.000</span> Rp 30.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="https://murahgrosir.com/wp-content/uploads/2017/11/Kaos-kaki-FutsalBola-Specs-Original-Optimus-Socks-Black-White-902537-Murah12sf3.png" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Kaos kaki Specs Original Optimus Socks Black White 902537</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 42.900</span> Rp 42.900</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/shoes/1.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Sepatu badminton Asics Gel-Rocket 8</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 560.000</span> Rp 560.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/shoes/2.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Sepatu Flypower PAWON 4</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 285.000</span> Rp 285.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/shoes/3.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Sepatu Lining Attack Aytn081</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 350.000</span> Rp 350.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/shoes/4.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Sepatu RS Rainfoce speed JF 797</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 345.000</span> Rp 345.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/shoes/5.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Sepatu YONEX SHB 35 EX Sepatu Badminton (Royal Blue)</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 450.000</span> Rp 450.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="http://racquetforce.com/image/cache/catalog/Shoes/Adidas/QF5.1R-800x800.JPG" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Adidas Quickforce 5.1 Professional Badminton Shoes BY1818</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 1.100.000</span> Rp 1.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
                                    <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/cock/1.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Aspro Shuttlecocks</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 89.000</span> Rp 89.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/cock/2.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Gadjah Mada Shuttlecocks</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 100.000</span> Rp 100.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/cock/3.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Prochamps Shuttlecocks</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 80.000</span> Rp 80.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/cock/4.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Samurai Hijau Shuttlecocks</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 75.000</span> Rp 70.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="{!! asset('img/cock/5.jpg') !!}" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Yonex Shuttlecocks League 5</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 125.000</span> Rp 110.000</p>
                                        </div>
                                    </div>
                                    <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                        <div class="effect-hover-zoom center-vertical-image">
                                            <img src="http://www.kksportsonline.com/wp-content/uploads/2016/06/G-Series.jpg" alt="Product Image . . ." width="270" height="270">
                                            <a href="#"></a>
                                        </div>
                                        <div class="clearfix absolute name-product-no-ranking">
                                            <p class="title-product clearfix full-width"><a href="#">Adidas G-Series Father Shuttlecock</a></p>
                                            <p class="clearfix price-product"><span class="price-old">Rp 1.380.999</span> Rp 1.300.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Box -->
        </div>
        <br /><br />
        <!-- End Content Box -->
        <!-- Footer Box -->
        @include('layouts.footer')
    </div>
    <!-- End Footer Box -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/owl.carousel.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/scripts.js') !!}" defer=""></script>
</body>
</html>