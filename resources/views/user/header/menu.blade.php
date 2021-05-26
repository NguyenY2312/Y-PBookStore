<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
				<!-- Nút show menu mobile -->
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<!-- Menu trang web -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-bottom: -10px">
					<ul class="navbar-nav nav-mega mx-auto">
						<!-- Trang chủ -->
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="{{ route('user.index')}}">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<!-- Ưu đãi lớn -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.shop')}}">Khuyến Mãi</a>
						</li>
						<!-- Cửa hàng -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{ route('user.shop')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Cửa Hàng
							</a>
							<ul class="dropdown-menu mega-menu">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Learning Books </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{ route('user.shop')}}">High School</a>
												</li>
												<li class="">
													<a href="{{ route('user.shop')}}"> Primary School</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Textbook</a>
												</li>
												<li class="mt-3">
													<h5>Reference Books</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">Basic</a>
												</li>
												<li>
													<a href="customer.html">Advanced</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Light Novels </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Romantic</a>
												</li>
												<li class="">
													<a href="shop.html"> Life </a>
												</li>
												<li>
													<a href="shop.html"> Science Fiction </a>
												</li>
												<li class="mt-3">
													<h5>Comic Books</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">Color Comics</a>
												</li>
												<li>
													<a href="customer.html">Fable</a>
												</li>
												<li>
													<a href="customer.html">Fairy Tales</a>
												</li>
												<li>
													<a href="customer.html">Manga</a>
												</li>
												<li>
													<a href="customer.html">Myth</a>
												</li>
												<li>
													<a href="customer.html">Ghost Story</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Learning Books </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{ route('user.shop')}}">High School</a>
												</li>
												<li class="">
													<a href="{{ route('user.shop')}}"> Primary School</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Textbook</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="{{ route('user.about')}}">Giới Thiệu</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<!-- Tin tức -->
						<li class="nav-item">
							<a class="nav-link" href="about.html">Tin Tức</a>
						</li>
						<!-- Thông tin & liên hệ -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.about')}}">Giới Thiệu</a>
						</li>
						<!-- Thanh tìm kiếm -->
						<li style="padding: 5px 0 0 15px;">
							<input type="text" class="input-search">
							<button style="border-radius: 0.25rem; padding: 0.25rem 0.5rem; background-color: rgb(104, 101, 92); color: cornsilk;" type="button">
								<i class="fas fa-search"></i>
							</button>	
						</li>
					</ul>

				</div>
			</nav>
		</header>