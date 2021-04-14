<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>YP Books Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<!-- <script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/style6.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/shop.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/owl.carousel.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/owl.theme.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/fontawesome-all.css') }}" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<!-- LOGO của trang web -->
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Y&P Books Store</h6>
					<ul>
						<li>LOGO</li>
					</ul>
				</div>
				<!-- BANNER của trang web -->
				<div class="col-md-6 logo-w3layouts top-info text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.html">
							Y&P Books </a>
					</h1>
				</div>
				<!--Cá nhân -->
				<div class="col-md-3 text-right mt-lg-4">
					<ul class="cart-inner-info">
						<!-- Đăng nhập -->
						<li>
								<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"> <a href="#" style="font-size: 120%; color:#9c9b9b"> Login</a></span>
						</li>
						<!-- Giỏ hàng -->
						<li>
								<span class="fas fa-cart-plus" aria-hidden="true" style="color: rgb(35, 175, 156)"> <a href="#" style="font-size: 120%; color:#9c9b9b"> Cart</a></span>
							<!-- <form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form> -->
						</li>
					</ul>				
				</div>
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
				<!-- Nút show menu mobile -->
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<!-- Menu trang web -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<!-- Trang chủ -->
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<!-- Ưu đãi lớn -->
						<li class="nav-item">
							<a class="nav-link" href="about.html">Hot Deals</a>
						</li>
						<!-- Cửa hàng -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Books Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Learning Books </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">High School</a>
												</li>
												<li class="">
													<a href="shop.html"> Primary School</a>
												</li>
												<li>
													<a href="shop.html">Textbook</a>
												</li>
												<li class="mt-3">
													<h5>Reference Books</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">Basic</a>
												</li>
												<li>
													<a href="customer.html">Advanced</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Light Novels </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Romantic</a>
												</li>
												<li class="">
													<a href="shop.html"> Life </a>
												</li>
												<li>
													<a href="shop.html"> Science Fiction </a>
												</li>
												<li class="mt-3">
													<h5>Comic Books</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">Color Comics</a>
												</li>
												<li>
													<a href="customer.html">Fable</a>
												</li>
												<li>
													<a href="customer.html">Fairy Tales</a>
												</li>
												<li>
													<a href="customer.html">Manga</a>
												</li>
												<li>
													<a href="customer.html">Myth</a>
												</li>
												<li>
													<a href="customer.html">Ghost Story</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Learning Books </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">High School</a>
												</li>
												<li class="">
													<a href="shop.html"> Primary School</a>
												</li>
												<li>
													<a href="shop.html">Textbook</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<!-- Tin tức -->
						<li class="nav-item">
							<a class="nav-link" href="about.html">News</a>
						</li>
						<!-- Thông tin & liên hệ -->
						<li class="nav-item">
							<a class="nav-link" href="contact.html">About Us</a>
						</li>
						<!-- Thanh tìm kiếm -->
						<li style="padding: 5px 0 0 15px;">
							<input type="text" class="input-search">
							<button style="border-radius: 0.25rem; padding: 0.25rem 0.5rem; background-color: rgb(104, 101, 92); color: cornsilk;" type="button">
								<i class="fas fa-search"></i>
							</button>	
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
	@yield('content')
	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Y&P will give you an infinite source of knowledge. Serving you is our pleasure.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>03 Nguyễn Văn Linh, Phường Phú Mỹ, Quận 7, TP HCM.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : (+84) 933809731</p>
							<p>Email :
								<a href="mailto:y&pbookstore@gmail.com">y&pbookstore@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Actions</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="shop.html">Shop</a>
						</li>
						<li>
							<a href="contact.html">About Us</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2021. All Rights Reserved | Design by
					<a href="#"> Y&P </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div> -->
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Bộ đếm ngược -->
	<!-- <script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script> -->
	<!--// Count-down -->
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<!-- js file -->
</body>

</html>