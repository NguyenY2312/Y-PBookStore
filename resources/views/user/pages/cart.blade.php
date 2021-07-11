

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
			<div class="inner-sec-shop">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Giỏ hàng </h3>
				<div class="checkout-right">
				@php
				$content= Cart::content();
				@endphp
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Hình</th>

								<th>Tên sản phẩm</th>
								<th>Số lượng</th>
								<th>Giá</th>
								<th>Tổng tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
						
						@foreach($content as $v_content)
							<tr class="rem1">
								
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="{{$v_content->options->image}}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">{{$v_content->name}} </td>
								<td class="invert">
									<div class="quantity">
									<form action="{{route('cap-nhat-gio-hang')}}" method="POST">
									{{csrf_field()}}
										
										<input type="text" name="cart_quantity" value="{{$v_content->qty}}">
									
							
										<input type="hidden" name="rowId_cart" value="{{$v_content->rowId}}" class="form-control">
										<input type="submit" name="update_qty" value="Cập nhật" class="btn">
											
										</div>
									</div>
								</td>
								

								<td class="invert">{{number_format($v_content->price)}} VNĐ</td>
								<td class="invert">
								@php
								$subtotal=$v_content->price * $v_content->qty;
								echo number_format($subtotal).' '.'VNĐ';
								@endphp
								</td>
								<td class="invert">
									<a href="{{route('xoa-gio-hang',$v_content->rowId)}}">
										<i class='fas fa-trash-alt' style='font-size:15px; color:black'></i>
									</a>

								</td>
							</tr>
					
						@endforeach
				
						</tbody>
					</table>
		
					<div class="col-md-4 checkout-right-basket">
						<ul>
						
							<li>Tổng tiền:
					
								<span>{{Cart::subtotal()}} VNĐ</span>
							</li>
							<li>Tổng thanh toán:
							
								<span>{{Cart::total()}} VNĐ</span>
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