@extends('user.layout')
@section('content')
<style>
.without_ampm::-webkit-datetime-edit-ampm-field {
   display: none;
 }
 input[type=time]::-webkit-clear-button {
   -webkit-appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -ms-appearance:none;
   appearance: none;
   margin: -10px; 
 }
</style>
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
					<div class="carousel-item active" style="background-image: url(user/images/banner.jpg);">
						<div class="carousel-caption text-center">
							<h3>Ưu Đãi Lớn
								<span>Giảm Giá 50% Tất Cả Các Loại Sách</span>
							</h3>
							<a href="{{ route('user.shop', 0)}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
					<div class="carousel-item item2" style="background-image: url(user/images/banner-4.jpg);">
						<div class="carousel-caption text-center">
							<h3>Với Y&P
								<span>Kiến Thức Là Vô Tận</span>
							</h3>
							<a href="{{ route('user.shop', 0)}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					<div class="carousel-item item3" style="background-image: url(user/images/banner-5.jpg);">
						<div class="carousel-caption text-center">
							<h3>Đến Với Y&P
								<span>Chúng Tôi Sẽ Cho Bạn Dịch Vụ Tốt Nhất</span>
							</h3>
							<a href="{{ route('user.shop', 0)}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					<div class="carousel-item item4" style="background-image: url(user/images/banner-9.jpg);">
						<div class="carousel-caption text-center">
							<h3>Đồng Hành Cùng Y&P
								<span>Trở Lại Trường Sau Mùa Hè</span>
							</h3>
							<a href="{{ route('user.shop', 0)}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
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
	<div id="snackbar">Đã thêm vào sách yêu thích</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Sách Mới Cho Bạn </h3>
				<div class="row">
					<!-- Sách mới -->
					@foreach ($sach_moi as $newbook)
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<!-- Hình ảnh -->
								<div class="men-thumb-item">
									<img src="{!! $newbook->Anh_Bia !!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single', $newbook->Id)}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<!-- Tên và giá tiền -->
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px; color: #959596; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
													<a href="{{ route('user.single')}}">{{ $newbook->Ten_Sach }}</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">{{ $newbook->Gia_Tien }} VNĐ</span>
												</div>
											</div>
										</div>
										<!-- Thêm vào giỏ hàng -->
										<div class="googles single-item hvr-outline-out">
											<form action="{{route('chuyen-gio-hang')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="qty" value="1" min="1">
												<input type="hidden" name="bookid_hidden" value="{{$newbook->Id}}">
												<input type="hidden" name="googles_item" value="{{$newbook->Ten_Sach}}">
												<input type="hidden" name="amount" value="{{number_format($newbook->Gia_Tien)}} VNĐ">
												<button type="submit" class="googles-cart pgoogles-cart" style="padding-top: 15px;">
													<i class="fas fa-cart-plus"></i>
												</button>
																
											</form>
										</div>
										@if (Cookie::get('UserId') != null)
										<div class="googles single-item hvr-outline-out" style="margin-top:-15px">
											<form>
											{{ csrf_field() }}
												<button type="button" class="googles-heart" onclick="Favorite({{ $newbook->Id }})">
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
				</div>
				</div>
				<!--//Sách mới-->
				<!--/Banner middle trang web-->
				<div class="inner-sec-shop px-lg-4 px-3" style="padding-top:30px;">
 					<div class="col-lg-12">
						<iframe width="100%" height="550" src="https://www.youtube.com/embed/dBv1zyMPM3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<!--//Banner trang web-->
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 my-4">Sách Bán Chạy Nhất </h3>
					<div class="row">
						<!-- Sách bán chạy -->
						@foreach ($sach_ban_chay as $hotbook)
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<!-- Hình ảnh -->
									<div class="men-thumb-item">
										<img src="{!! $hotbook->Anh_Bia !!}" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('user.single', $hotbook->Id)}}" class="link-product-add-cart">Xem Chi Tiết</a>
											</div>
										</div>
										<span class="product-new-top" style="background-color: red;">Bán chạy</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<!-- Tên và giá tiền -->
											<div class="grid_meta">
												<div class="product_price">
												<h4 style="padding-top:20px; color: #959596; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
														<a href="{{ route('user.single')}}">{{ $hotbook->Ten_Sach }}</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">{{ $hotbook->Gia_Tien }} VNĐ</span>
													</div>
												</div>
											</div>
											<!-- Thêm vào giỏ hàng -->
											<div class="googles single-item hvr-outline-out">
											<form action="{{route('chuyen-gio-hang')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="qty" value="1" min="1">
												<input type="hidden" name="bookid_hidden" value="{{$hotbook->Id}}">
												<input type="hidden" name="googles_item" value="{{$hotbook->Ten_Sach}}">
												<input type="hidden" name="amount" value="{{number_format($hotbook->Gia_Tien)}} VNĐ">
												<button type="submit" class="googles-cart pgoogles-cart" style="padding-top: 15px;">
													<i class="fas fa-cart-plus"></i>
												</button>
																
											</form>
											</div>
											@if (Cookie::get('UserId') != null)
											<div class="googles single-item hvr-outline-out" style="margin-top:-15px">
												<form>
												{{ csrf_field() }}
													<button type="button" class="googles-heart" onclick="Favorite({{ $hotbook->Id }})">
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
					</div>
				</div>			
		</div>
	</section>
	<script>
	window.onload = function(){
	var element = document.getElementById("nav-home");
	element.classList.add("active");
	}
	</script>
	<!-- about -->
@stop