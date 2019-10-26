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
                            <li class="relative"><a href="{!! url('/login') !!}">My Account</a></li>
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
                        <a href="#"><img alt="Logo" src="{!! asset('img/logo.png') !!}" /></a>
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
                            <a class="animate-default" href="{!! url('/') !!}">Home</a>
                        </li>
                        <li class="title-hover-red">
                            <a class="animate-default" href="{!! url('contact') !!}">contact us</a>
                        </li>
                        <li class="title-hover-red">
                            <a class="animate-default" href="{!! url('about') !!}">about us</a>
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
    {{-- <div class="clearfix menu_more_header menu-web menu-bg-white">
        <ul>
            <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
            <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Pakaian</p></a></li>
            <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Raket</p></a></li>
            <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Sepatu</p></a></li>
            <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Kaos Kaki</p></a></li>
            <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Shuttlecocks</p></a></li>
        </ul>
    </div> --}}
    <div class="header-ontop">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="clearfix logo">
                        <a href="#"><img alt="Logo" src="img/logo.png" width="150" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu-header">
                        <ul class="main__menu clear-margin">
                            <li class="title-hover-red">
                                <a class="animate-default" href="{!! url('/') !!}">home</a>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="{!! url('contact') !!}">contact us</a>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="{!! url('about') !!}">about us</a>
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