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
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h2 class="tittle-w3layouts my-lg-4 my-4">Tin tức</h2>
				<div class="row">
					@foreach ($tin_tuc as $news)
					<div class="col-md-4" style="padding: 0 50px 30px 50px;">
						<div class="product-googles-info googles" style="background-color: #f6f5f5; border: solid 2px blue">
							<div class="men-pro-item">
								<!-- Hình ảnh -->
								<div class="men-thumb-item">
									<a href="{{ route('user.newsdetail', [$news->Id]) }}" target="_blank">
									<img src="admin/{!! $news->Hinh_Anh !!}" class="img-fluid" alt="" style="width:300px; height: 300px; object-fit: cover; border: solid 1px yellow">
									</a>
									@if ($news->Chu_De == 0)
									<span class="product-new-top" style="background-color: green;">Hoạt động</span>
									@elseif ($news->Chu_De == 1)
									<span class="product-new-top" style="background-color: blue;">Sự kiện</span>
									@else
									<span class="product-new-top" style="background-color: #FFC107;">Khuyến mãi</span>
									@endif
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h4 style="padding-top:20px; color: #959596;">
													<a href="{{ route('user.newsdetail', [$news->Id]) }}" target="_blank">{{ $news->Tieu_De }}</a>
												</h4>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					@endforeach
				</div>
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4" style="padding-left:100px">{{ $tin_tuc->links() }}</div>
				<div class="col-md-4"></div>
				</div>
			</div>					
		</div>		
	</section>
	<script>
	window.onload = function(){
	var element = document.getElementById("nav-news");
	element.classList.add("active");
	}
	</script>
	<!-- about -->
@stop