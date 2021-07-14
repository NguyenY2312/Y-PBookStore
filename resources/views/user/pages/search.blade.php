@extends('user.layout')
@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">
                    <ul class="short">
						<li>
							<a href="{{route('user.index')}}">Trang Chủ</a>
							<i class='fas fa-angle-right'></i>
						</li>
						<li>KẾT QUẢ TÌM KIẾM</li>
					</ul>
					
				</div>
			</div>
		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Tìm kiếm</h3>
								<form action="{{route('tim-kiem')}}" method="POST">
                               @csrf
										<input class="form-control" type="search" name="search" placeholder="Tìm kiếm" >
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Giá khoảng</h3>
								<ul class="dropdown-menu6">
									<li>

										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>
								</ul>
							</div>
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Ngôn ngữ</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Tiếng Việt</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Song Ngữ Anh - Việt</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Tiếng Anh</span>
									</li>

								</ul>
							</div>
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Hình thức</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bìa Mềm</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bìa Cứng</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bộ Hộp</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Sách Kèm Đĩa</span>
									</li>
			
								</ul>
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<div class="customer-rev left-side">
								<h3 class="agileits-sear-head">Đánh giá</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<span>5.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>4.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.5</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>2.5</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- //reviews -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="{!! asset('user\images\banner-sach-kinh-te.png') !!}" alt="">
												
										</div>
										<div class="col-md-6 shop_right">
												<img src="{!! asset('user\images\banner-sach-kinh-te.png') !!}" alt="">
									
											</div>
						
								</div>
								
								<div class="row">
									<!-- /womens -->
									@foreach($search_book as $sbook)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset($sbook->Anh_Bia) !!}" class="img-fluid anh-bia" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('user.single',$sbook->Id)}}" class="link-product-add-cart">Chi Tiết</a>
														</div>
													</div>
													<span class="product-new-top">Mới</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4 class= "hidden"> 
																	<a class="ten-sach" href="{{ route('user.single',$sbook->Id)}}">{{$sbook->Ten_Sach}}</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money gia-tien">{{number_format($sbook->Gia_Tien).' '. 'VNĐ'}}</span>
																</div>
															</div>
														</div>
														<!-- Thêm vào giỏ hàng -->
														@if (Cookie::get('UserId') != null)
														<div class="googles single-item hvr-outline-out">
															<form action="" method="POST">
																{{csrf_field()}}
																<button type="button" class="googles-cart pgoogles-cart" onclick="AddCart({{ $sbook->Id }})" style="padding-top: 15px;">
																	<i class="fas fa-cart-plus"></i>
																</button>								
															</form>
														</div>
														<div class="googles single-item hvr-outline-out" style="margin-top:-15px">
															<form>
															{{ csrf_field() }}
																<button type="button" class="googles-heart" onclick="Favorite({{ $sbook->Id }})">
																	<i class="fas fa-heart"></i>
																</button>	
															</form>
														</div>
														@endif
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									<div id="snackbar">Đã thêm vào sách yêu thích</div>
								</div>
								<br>
								{!! $search_book->links() !!}
								
						
								
						</div>
						<!--//product right-->
					</div>
			</div>
		</section>
        @stop
		