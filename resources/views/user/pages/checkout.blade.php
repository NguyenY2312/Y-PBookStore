

@extends('user.layout')
@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{route('user.index')}}">Trang chủ</a>
							<i class='fas fa-angle-right'></i>
						</li>
						<li>
							<a href="{{route('gio-hang')}}">Giỏ hàng</a>
							<i class='fas fa-angle-right'></i>
						</li>
						<li>Thanh toán </li>
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
				<div class="checkout-left row">
					
					<div class="col-md-8 address_form">
						<h4>Thông tin nhận hàng</h4>
						<form action="" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Họ và tên: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										
										<div class="controls">
											<label class="control-label">Số điện thoại:</label>
											<input class="form-control" type="text" placeholder="Mobile number">
										</div>
									
										<div class="controls">
											<label class="control-label">Địa chỉ: </label>
											<input class="form-control" type="text" placeholder="Town/City">
										</div>
								
									</div>
									
								</div>
							</section>
						</form>
						
					</div>
					<div class="col-md-4 checkout-right-basket">
						<h4>Phương thức thanh toán</h4>
						<br>
							<div class="row">
								<div class="radio_one">
									<input type="radio" name="radio" checked="">
								<label>
									Thanh toán khi nhận hàng
								</label>
								</div>
							</div>
						<br>	
						
						<h4>Đơn hàng</h4>
						<ul>
							<li>Product1
								<i>-</i>
								<span>$281.00 </span>
							</li>
							<li>Product2
								<i>-</i>
								<span>$325.00 </span>
							</li>
							<li>Product3
								<i>-</i>
								<span>$325.00 </span>
							</li>
							<li>Tạm tính
								<i>-</i>
								<span>0</span>
							</li>
							<li>Tổng cộng
								<i>-</i>
								<span>$986.00</span>
							</li>
						</ul>
						<div class="checkout-right-basket">
							<a href="payment.html">Make a Payment </a>
						</div>
					</div>

					<div class="clearfix"> </div>
					

				</div>

			</div>

		</div>
	</section>
    <!--/ End Checkout -->
    
	<!--//checkout-->
	<!--footer -->
	@stop