<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 85%;
  bottom: 70px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 70px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 70px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 70px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 70px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
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
						@if (Cookie::get('UserId') == null)
							<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"></span><a href="/dang-nhap" class="hover-nut"> Đăng Nhập </a>
						@else
						<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"><a class="hover-nut dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"> Tài Khoản </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown" style="margin-top:-2px; margin-left: -20px;">
							<a class="dropdown-item hover-nut" href="{{ route('user.account') }}" style="text-transform:none;font-size: 1rem;letter-spacing: 3px;color: #9c9b9b;cursor: pointer">
								<i class="fas fa-address-card" style="color: rgb(35, 175, 156);"></i>
								Thông tin
							</a>
							<a class="dropdown-item hover-nut" data-toggle="modal" data-target="#exampleEditPassCenter" style="text-transform:none;font-size: 1rem;letter-spacing: 3px;color: #9c9b9b;cursor: pointer">
								<i class="fas fa-key" style="color: rgb(35, 175, 156);"></i>
								Đổi mật khẩu
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
    <!-- Modal -->
	<div class="modal fade" id="exampleEditPassCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffa500a8;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white; font-size:120%; padding-left:170px">ĐỔI MẬT KHẨU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('user.accountpass') }}" method="POST" enctype="multipart/form-data" onsubmit="return CheckPass();">
      @csrf
      <div class="modal-body" style="margin-top:10px; padding-left:10px; padding-right:10px">
        <div class="row">
			<div class="col-lg-12">
				<label>Mật khẩu mới</label>
				<input type="password" class="form-control" name="Mat_Khau" id="Mat_Khau">
			</div>
			<div class="col-lg-12" style="margin-top:15px; margin-bottom:15px;">
				<label>Xác thực mật khẩu</label>
				<input type="password" class="form-control" name="Xac_Thuc" id="Xac_Thuc">
			</div>
		</div>
      </div>
      <div class="modal-footer" style="background-color:#ffa50099">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
	function CheckPass(){
		var x = document.getElementById('Mat_Khau').value;
		var y = document.getElementById('Xac_Thuc').value;
		if(x != y){
			alert('Xác thực mật khẩu không khớp!');
			return false;
		}
		alert('Cập nhật thành công!');
		return true;
	}
</script>
<!-- End Modal -->