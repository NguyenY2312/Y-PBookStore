@extends('user.layout')
	@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Chi tiết sản phẩm</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
				@foreach($books as $book)
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="{!! asset($book->Anh_Bia)!!}">
													<div class="thumb-image"> <img src="{!! asset($book->Anh_Bia)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{!! asset($book->Anh_Bia)!!}">
													<div class="thumb-image"> <img src="{!! asset($book->Anh_Bia)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{!! asset($book->Anh_Bia)!!}">
													<div class="thumb-image"> <img src="{!! asset($book->Anh_Bia)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{$book->Ten_Sach}} </h3>
									<br>
									<div class="row">
  										<div class="col-6">
										  <span>Công ty phát hành: </span>
										  <a href='#'>NXB Đà Nẵng</a>
										  </div>
  										<div class="col-6">
										  <span>Tác giả:</span>
										  <span>{{$book->Tac_Gia}}</span>
										</div>
									</div>
									<div class="row">
  										<div class="col-6">
										  <span>Nhà xuất bản: </span>
										  <span>NXB Đà Nẵng</span>
										  </div>
  										<div class="col-6">
										  <span>Hình thức bìa:</span>
										  <span>Bìa Mềm</span>
										</div>
									</div>

									<p><span class="item_price">{{$book->Gia_Tien}}</span>
										<del>169.000 ₫</del>
									</p>
									<div class="rating1">
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<br>
									
  										<div class="row">
    									<div class="col-sm-3">
											<span>Thời gian giao hàng</span>
    									</div>
    									<div class="col-sm-9">
											<span>Địa điểm giao hàng </span>
											<a href="#"> Thay đổi</a>
							
    									</div>
  										</div>
										  <div class="row">
    									<div class="col-sm-3">
											<span>Chính sách đổi trả </span>
    									</div>
    									<div class="col-sm-9">
											<span>Đổi trả sản phẩm trong 30 ngày </span>
											<a href="#"> Xem thêm</a>
							
    									</div>
  										</div>
									<br>
									
									<label class="control-label">Số Lượng: </label>
                            <div class="form-group quantity-box ">
                                
                                <input class="form-control col-sm-3" value="1" min="1" max="20" type="number">
                            </div>
							<br>
                       
                    
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="Farenheit">
														<input type="hidden" name="amount" value="149.000">
														<button type="submit" class="googles-cart pgoogles-cart">
															Chọn Mua
														</button>
														
													</form>
		
											</div>
									</div>
									
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								
						

								
								<div class="responsive_tabs">
								<h4>THÔNG TIN CHI TIẾT</h4>
								<br>
								<table class="thong-tin">
								<tbody>
									<tr>
										<td>Công ty phát hành</td>
										<td>Nhà Xuất Bản Đà Nẵng</td>
									</tr>
									<tr>
										<td>Ngày xuất bản</td>
										<td>09-2020</td>
									</tr>
									<tr>
										<td>Dịch Giả</td>
										<td>{{$book->Tac_Gia}}</td>
									</tr>
									<tr>
										<td>Số trang</td>
										<td>{{$book->So_Trang}}</td>
									</tr>
									<tr>
										<td>SKU</td>
										<td>{{$book->SKU}}</td>
									</tr>
									<tr>
										<td>Nhà xuất bản</td>
										<td>Nhà Xuất Bản Đà Nẵng</td>
									</tr>
								</tbody>
								</table>
								<br>
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											
											<li>MÔ TẢ SẢN PHẨM</li>
											<li>KHÁCH HÀNG NHẬN XÉT</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
					<div class="single_page">
					<h5>MÔ TẢ SẢN PHẨM</h5>
					<p>{{$book->Mo_Ta}}
					</p>
						
					</div>
				</div>
				@endforeach
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="{!! asset('user/images/admin.jpg')!!}" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Trả lời</a></li>
																</ul>
																<p>Lâu lắm mới có 1 cuốn sách của tác giả Việt Nam mà mình thấy hay như vậy. Trong cuốn
																	 này tác giả Trần Thanh Phong đã nêu ra rất nhiều vấn đề thực tế trong ngành bán lẻ 
																	 và cách giải quyết chúng một cách hiệu quả. Bằng ngôn ngữ bình dị, nhẹ nhàng, anh 
																	 Phong chia sẻ kinh nghiệm trong kinh doanh như một người anh đi trước cho đàn em. 
																	 Một điểm cộng khác nữa là anh Phong cực kì thân thiện, sẽ kết nối và hỏi thăm bạn 
																	 ngay khi bạn quét QR để lấy tài liệu. Ngay khi đọc được 50% mình đã gợi ý mua cho 
																	 hội bạn cũng đang kinh doanh nhỏ như mình</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>Thêm nhận xét</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Bạn hãy nhập tên..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Bạn hãy nhập email..." required="">
																<textarea name="Message" placeholder="Nhập nội dung" required=""></textarea>
																<input type="submit" value="Gửi">
															</form>
														</div>
													</div>
					
												</div>
											</div>
								
										</div>
									</div>
								</div>

								<!--//tabs-->
					
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h4 class="tittle-w3layouts text-center my-lg-4 my-3">SẢN PHẨM NỔI BẬT</h4>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Phân Tích Chứng Khoán\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Phân Tích Chứng Khoán </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$325.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fastrack Aviator">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng\HDD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Đừng Để Mất Bò </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$425.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="MARTIN Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_VAN_HOC\Cây Cam Ngọt Của Tôi\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Cây Cam Ngọt Của Tôi </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$425.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Royal Son Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_THIEU_NHI\Thần Thoại Hy Lạp (Tái Bản 2012)\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Thần Thoại Hy Lạp </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$281.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Irayz Butterfly">
																	<input type="hidden" name="amount" value="281.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\10 Phút Tĩnh Tâm - 71 Thói Quen Cân Bằng Cuộc Sống Hiện Đại\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">10 Phút Tĩnh Tâm </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$525.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Jerry Rectangular ">
																	<input type="hidden" name="amount" value="525.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Hiểu Hết Về Tiền </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$325.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Royal Son Aviator">
																		<input type="hidden" name="amount" value="425.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
	
																		
																	</form>
	
																</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
		@stop