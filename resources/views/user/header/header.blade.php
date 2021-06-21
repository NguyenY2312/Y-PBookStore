<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<!-- LOGO của trang web -->
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Y&P BookStore</h6>
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
						<li class="dropdown">
						@if (Cookie::get('UserEmail') == null)
							<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"></span><a href="/dang-nhap" class="hover-nut"> Đăng Nhập </a>
						@else
						<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"><a class="hover-nut dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"> Tài Khoản </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown" style="margin-top:-2px; margin-left: -20px;">
							<a class="dropdown-item hover-nut" href="/quan-ly-tai-khoan" style="text-transform:none;font-size: 1rem;letter-spacing: 3px;color: #9c9b9b;cursor: pointer">
								<i class="fas fa-address-card" style="color: rgb(35, 175, 156);"></i>
								Quản Lý
							</a>
							<a class="dropdown-item hover-nut" href="{{ route('logoutUser')}} " style="text-transform: none;font-size: 1rem;letter-spacing: 3px;color: #9c9b9b;cursor: pointer">
								<i class="fas fa-sign-out-alt" style="color: rgb(35, 175, 156);"></i>
								Đăng Xuất
							</a>
						</div>
						@endif
						</li>
						<!-- Giỏ hàng -->
						<li>
								<span class="fas fa-cart-plus" aria-hidden="true" style="color: rgb(35, 175, 156)"></span><a href="#" class="hover-nut"> Giỏ Hàng </a>
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