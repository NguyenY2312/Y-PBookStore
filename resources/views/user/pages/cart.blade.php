

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
						<li>Giỏ hàng </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Giỏ hàng </h3>
				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>Hình</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert ">1</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản)\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Đừng Bao Giờ Đi Ăn Một Mình </td>

								<td class="invert">73.700 ₫</td>
								<td class="invert">
									<a href="#">
										<i class='fas fa-trash-alt' style='font-size:15px; color:black'></i>
									</a>

								</td>
							</tr>
							<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Hiểu Hết Về Tiền </td>

								<td class="invert">223.700 ₫</td>
								<td class="invert">
									<a href="#">
											<i class='fas fa-trash-alt' style='font-size:15px;color:black'></i>
									</a>

								</td>
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\Phân Tích Chứng Khoán\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Phân Tích Chứng Khoán</td>

								<td class="invert">334.200 ₫</td>
								<td class="invert">
									<a href="#">
											<i class='fas fa-trash-alt' style='font-size:15px;color:black'></i>
									</a>

								</td>
							</tr>

						</tbody>
					</table>
		
					<div class="col-md-4 checkout-right-basket">
						<ul>
						
							<li>Tổng tiền:
					
								<span>631.600 ₫</span>
							</li>
							<li>Tổng thanh toán:
							
								<span>631.600 ₫</span>
							</li>

						</ul>
						<a href="payment.html" class="btn">THANH TOÁN</a>
						<a href="#" class="btn">TIẾP TỤC MUA SẮM</a>
					</div>
					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
	<!--//checkout-->
	<!--footer -->
	@stop