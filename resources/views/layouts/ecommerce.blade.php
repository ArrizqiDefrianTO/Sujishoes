<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset ('user/images/icons/favicon.png') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/fonts/themify/themify-icons.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/fonts/elegant-font/html-css/style.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/slick/slick.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/vendor/lightbox2/css/lightbox.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('user/css/main.css') }}">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Casback Sampai 60%
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						SujiShoes@gmail.com
					</span>


				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<div class="logo">
					<img src="{{ asset ('user/images/logo 2.png') }}" alt="IMG-LOGO">
				</div>

				<!-- Menu -->
				@include('layouts.module.menu')
				

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="{{url ('/login')}}" class="header-wrapicon1 dis-block">
						<img src="{{ asset ('user/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="">
						<a href="{{ route('front.list_cart') }}" >	<img src="{{ asset ('user/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
					
						
						  </a>
						

					
					</div>
				</div>
			</div>
		</div>

	
	</header>

	<!-- Slide1 -->


	@yield('content')


	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

		
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="{{url ('/')}}" class="s-text7">
							Home
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{url ('/Products')}}" class="s-text7">
							Shop Product
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{url ('/about')}}" class="s-text7">
							About
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{url ('/contact')}}" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="{{ asset ('user/images/icons/paypal.png' ) }}"alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="{{ asset ('user/images/icons/visa.png') }}" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="{{ asset ('user/images/icons/mastercard.png') }}" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="{{ asset ('user/images/icons/express.png') }}" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="{{ asset ('user/images/icons/discover.png') }}" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright  &copy;<script>document.write(new Date().getFullYear());</script>  Sujishoes. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/animsition/js/animsition.min.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/bootstrap/js/popper.js') }}"></script>
	<script type="text/javascript" src="{{ asset ('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/select2/select2.min.js') }}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset ('user/js/slick-custom.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/countdowntime/countdowntime.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/lightbox2/js/lightbox.min.js') }}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset ('user/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<!--===============================================================================================-->
	<script src="{{ asset ('user/js/main.js') }}"></script>
	<script src="{{ asset('ecommerce/js/theme.js') }}"></script>

	@yield('js')
</body>

</html>