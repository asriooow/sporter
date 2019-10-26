<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">
	<link rel="stylesheet" type="text/css" href="css/multirange.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/effect.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
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
	<div class="relative full-width">
		<!-- Breadcrumb -->
		<div class="container-web relative">
			<div class="container">
				<div class="row">
					<div class="breadcrumb-web">
						<ul class="clear-margin">
							<li class="animate-default title-hover-red"><a href="#">Home</a></li>
							<li class="animate-default title-hover-red"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content Contact -->
		<div class="relative container-web">
			<div class="container">
				<div class="row bottom-margin-default">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.48788398108!2d106.68943245599276!3d-6.22972802632545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1572065099013!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
				<div class="row footer-from-address">
					<div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
						<div class="row">
							<p class="title-contact bold bottom-margin-default">Contact Infomation</p>
							<div class="relative clearfix row-info-contact full-width bottom-margin-default">
								<div class="relative left-row-info-contact">
									<img src="img/icon_office-min.png" alt="" />
								</div>
								<div class="relative right-row-info-contact">
									<p class="bold name-row-contact">Main Office</p>
									<p>Jl. Budi Indah Rt01/04 No.228</p>
									<p>Hotline: <a href="tel:19001901">+62 821-1765-7046</a></p>
									<p>Fax: <a href="tel:02839759568">+62 821-1765-7046</a></p>
									<p>Email: <a href="mailto:support@megastore.com">-</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
						<div class="row">
							<p class="title-contact bold bottom-margin-default">Submit a Message</p>
							<div class="relative full-width form-contact">
								<form method="POST" action="/" class="form-placeholde-animate">
						            <div class="field-wrap">
							            <label>
							            	First Name<span class="req">*</span>
							            </label>
							            <input type="text" name="name" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Phone number<span class="req">*</span>
							            </label>
							            <input type="text" name="phone" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Your email<span class="req">*</span>
							            </label>
							            <input type="text" name="email" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Message<span class="req">*</span>
							            </label>
							            <textarea required name="message" rows="6" autocomplete="off"></textarea>
						            </div>
						            <button type="submit" class="uppercase animate-default button-hover-red">send message</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Contact -->
		<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>free shipping</p>
							<p>on order over $500</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
							<p>support</p>
							<p>life time support 24/7</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
							<p>help partner</p>
							<p>help all aspects</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
							<p>contact with us</p>
							<p>+07 (0) 7782 9137</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content Box -->
	<!-- Footer Box -->
	@include('layouts.footer')
</div>
	<!-- End Footer Box -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/owl.carousel.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/scripts.js') !!}" defer=""></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR8GCPpAFKo4Dke4SsPGcao1NKnn25OQA&v=3.31&callback=initMap" defer=""></script>	
</body>
</html>