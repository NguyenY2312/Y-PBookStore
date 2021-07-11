@extends('user.layout')
	@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="#">Trang chủ</a>
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
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="{{$Anh_Bia}}">
													<div class="thumb-image"> <img src="{{$Anh_Bia}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{{$Anh_Bia}}">
													<div class="thumb-image"> <img src="{{$Anh_Bia}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{{$Anh_Bia}}">
													<div class="thumb-image"> <img src="{{$Anh_Bia }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									@foreach ($thong_tin_sach as $bk)
									<h3>{{$bk->Ten_Sach}} </h3>
									<br>
									<div class="row">
  										<div class="col-6">
										  <span>Tác giả:</span>
										  <span>{{$bk->Tac_Gia}}</span>
										</div>
										<div class="col-6">
										  <span>Thể loại:</span>
										  <span>{{$bk->TheLoai->The_Loai}}</span>
										</div>
									</div>
									<div class="row">
  										<div class="col-6">
										  <span>Nhà xuất bản: </span>
										  <span>{{$bk->NhaXuatBan->Ten_NXB}}</span>
										  </div>
  										<div class="col-6">
										  <span>Hình thức bìa:</span>
										  <span>
										  @if($bk->Loai_Bia == 0) {{"Bìa cứng"}}
										  @elseif (($bk->Loai_Bia == 1)) {{"Massmarket Paperback"}}
										  @else {{"Bìa mềm"}}
										  @endif
										  </span>
										</div>
									</div>

									<p><span class="item_price">{{number_format($bk->Gia_Tien)}} VNĐ</span>
										<del>169.000 VNĐ</del>
									</p>
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
									<div class="form-group quantity-box" style="display: inline-flex;align-items: baseline;justify-content: space-evenly;">                                
										<input class="form-control col-sm-3" value="1" min="1" max="{{$bk->So_Luong}}" type="number" style="width:150px"> (Còn {{$bk->So_Luong}} sản phẩm)
									</div>
									<br>
                       
                    
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="{{route('chuyen-gio-hang')}}" method="POST">
													{{csrf_field()}}
														<input type="hidden" name="qty" value="1" min="1">
														<input type="hidden" name="bookid_hidden" value="{{$bk->Id}}">
														<input type="hidden" name="googles_item" value="{{$bk->Ten_Sach}}">
														<input type="hidden" name="amount" value="{{number_format($bk->Gia_Tien)}} VNĐ">
														<button type="submit" class="googles-cart pgoogles-cart">
															Chọn Mua
														</button>
														
													</form>
		
											</div>
									</div>
									@endforeach
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								
						

								
								<div class="responsive_tabs">
								<h4>THÔNG TIN CHI TIẾT</h4>
								<br>
								<table class="thong-tin">
								@foreach ($thong_tin_sach as $book)
								<tbody>
									<tr>
										<td>Thể loại</td>
										<td>{{$book->TheLoai->The_Loai}}</td>
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
										<td>{{$book->NhaXuatBan->Ten_NXB}}</td>
									</tr>
								</tbody>
								@endforeach
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
					<p>{{$Mo_Ta}}
					</p>
						
					</div>
				</div>
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
						<h4 class="tittle-w3layouts text-center my-lg-4 my-3">SẢN PHẨM LIÊN QUAN</h4>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								@foreach($sach_tuong_tu as $tuong_tu)
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset($tuong_tu->Anh_Bia)!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single', $tuong_tu->Id)}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
												
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4 class="hidden">
																		<a href="{{ route('user.single'), $tuong_tu->Id}}">{{$tuong_tu->Ten_Sach}} </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">{{number_format($tuong_tu->Gia_Tien).' '. 'VNĐ'}}</span>
																	</div>
																</div>
															</div>
															<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart" style="margin-top: -5px;">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>
															</div>
															@if (Cookie::get('UserId') != null)
															<div class="googles single-item hvr-outline-out" style="margin-top:-15px">
																<form>
																{{ csrf_field() }}
																	<button type="button" class="googles-heart" onclick="Favorite({{ $tuong_tu->Id }})">
																		<i class="fas fa-heart"></i>
																	</button>	
																</form>
															</div>
															@endif
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
				<div id="snackbar">Đã thêm vào sách yêu thích</div>
		</section>
		@stop