@extends('Layout/Layout')
@section('content')
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
		<!-- Slider Banner trang web -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style="background-image: url(images/banner.jpg);">
						<div class="carousel-caption text-center">
							<h3>Hot Deals
								<span>Sale 50% off</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
					<div class="carousel-item item2" style="background-image: url(images/banner-4.jpg);">
						<div class="carousel-caption text-center">
							<h3>With Y&P
								<span>Knowledge Is Infinite</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item3" style="background-image: url(images/banner-5.jpg);">
						<div class="carousel-caption text-center">
							<h3>Come To Y&P
								<span>We Will Give You The Best Service </span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item4" style="background-image: url(images/banner-9.jpg);">
						<div class="carousel-caption text-center">
							<h3>Accompany With Y&P
								<span>Back To School</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">New Books For You </h3>
				<div class="row">
					<!-- Sách mới -->
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<!-- Hình ảnh -->
								<div class="men-thumb-item">
									<img src="images/Book/SuMenhKhoiNghiep/HinhDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<!-- Tên và giá tiền -->
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Sứ Mệnh Khởi Nghiệp</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">89.000 VNĐ</span>
												</div>
											</div>
										</div>
										<!-- Thêm vào giỏ hàng -->
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Siêu Cò – How To Be A Power Connector/DD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Siêu Cò</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">119.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/How Money Works - Hiểu Hết Về Tiền/DD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Hiểu Hết Về Tiền</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">152.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Nhà Đầu Tư Thông Minh (Tái Bản 2020)/HDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Nhà Đầu Tư Thông Minh</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">105.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Phương pháp VPA - Kỹ thuật nhận diện Dòng/HDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Kỹ Thuật Nhận Diện Dòng</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">78.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng/HDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">7 Bước Quản Lý Cửa Hàng</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">95.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu (Cuốn Cẩm Nang Hướng Dẫn Trực Quan Hóa Dữ Liệu)/HinhDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Kể Chuyện Thông Qua Dữ Liệu</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">70.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/Book/Nghệ Thuật đầu tư Dhandho - The Dhandho/HDD.png" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">See Details</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="single.html">Nghệ Thuật Đầu Tư - Dhandho</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">105.000 VNĐ</span>
												</div>
											</div>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="">
												<input type="hidden" name="add" value="">
												<input type="hidden" name="googles_item" value="">
												<input type="hidden" name="amount" value="">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus" style="padding-top:15px"></i>
												</button>	
											</form>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//Sách mới-->
				<!--/Banner middle trang web-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info" style="background-image: url(images/banner-middle.jpg);">
							<!-- Bộ đếm ngược -->
							<!-- <div class="simply-countdown-custom" id="simply-countdown-custom"></div> -->
						</div>
					</div>
				</div>
				<!--//Banner trang web-->
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 my-4">Bestselling Books </h3>
					<div class="row">
						<!-- Sách bán chạy -->
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="images/Book/SuMenhKhoiNghiep/HinhDD.png" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">See Details</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="single.html">Sứ Mệnh Khởi Nghiệp</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">89.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="images/Book/Siêu Cò – How To Be A Power Connector/DD.png" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">See Details</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="single.html">Siêu Cò</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">119.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="images/Book/How Money Works - Hiểu Hết Về Tiền/DD.png" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">See Details</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="single.html">Hiểu Hết Về Tiền</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">152.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="images/Book/Nhà Đầu Tư Thông Minh (Tái Bản 2020)/HDD.png" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">See Details</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="single.html">Nhà Đầu Tư Thông...</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">105.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about -->
@endsection