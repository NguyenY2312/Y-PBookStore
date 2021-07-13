

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
					
					<div class="col-md-6 address_form">
						<h4>Thông tin nhận hàng</h4>
						<form action="#" method="post" class="creditly-card-form agileinfo_form">
							@csrf
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Họ và tên: </label>
											<input class="billing-address-name form-control" type="text" name="name_checkout" placeholder="Họ và tên">
										</div>
										
										<div class="controls">
											<label class="control-label">Số điện thoại:</label>
											<input class="form-control" type="text" placeholder="Số điện thoại" name="phone_checkout">
										</div>
										<div class="controls">
											<label class="control-label">Email: </label>
											<input class="billing-address-name form-control" type="text" name="email-checkout" placeholder="Email">
										</div>
										<div class="controls">
											<label class="control-label">Địa chỉ: </label>
											<input class="form-control" type="text" name="address_checkout" placeholder="Địa chỉ">
										</div>
								
									</div>
								
								</div>
							</section>
						</form>
					
					</div>
					<div class="col-md-6 checkout-right-basket">
						<h4 style="border-bottom: 1px solid #DDD">Phương thức thanh toán</h4>
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
						@php
							$content= Cart::content();
						@endphp
						<ul>
						@foreach($content as $v_content)
							<li>
								{{$v_content->name}}
								<span>
								@php
									$subtotal=$v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'VNĐ';
								@endphp 
								</span>
							</li>
						@endforeach
							<li style="border-top: 1px solid #DDD">Tạm tính
							
								<span>{{Cart::subtotal()}} VNĐ</span>
							</li>
							<li style="border-bottom: 1px solid #DDD">Tổng cộng
								
								<span>{{Cart::total()}} VNĐ</span>
							</li>
						</ul>
						<div class="checkout-right-basket">
							<a href="payment.html">Đặt hàng </a>
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