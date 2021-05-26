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
						<li>Quản lý tài khoản</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
    <div class="container">
        <div class="row">
        <!--/tabs-->				
        <div class="responsive_tabs">
								<h4 style="text-align:center;color: #828284;">QUẢN LÝ TÀI KHOẢN</h4>
                                <hr width="100%">
								<br>
                                <div style="padding-bottom:10px; text-align:center">
                                <img src="{!! asset('user/images/user.jpg')!!}" alt="" style="width:150px; height:150px; border-radius:50%">
                                </div>
                                <br>
                                <h6 style="font-weight:700; padding-bottom:10px">THÔNG TIN CÁ NHÂN</h6>
                                <table class="thong-tin" style="border-style:double">
								<tbody>
									<tr>
										<td>Họ và tên:</td>
										<td>Ngô Hoài Phong</td>
									</tr>
									<tr>
										<td>Ngày sinh:</td>
										<td>07-2000</td>
									</tr>
									<tr>
										<td>Số điện thoại:</td>
										<td>0933809731</td>
									</tr>
                                    <tr>
										<td>Email:</td>
										<td>ngophong030700@gmail.com</td>
									</tr>
									<tr>
										<td>Địa chỉ:</td>
										<td>800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7, TP HCM</td>
									</tr>
                                    <tr>
                                        <td><button class="btn btn-success" style="font-size:90%">CẬP NHẬT</button><td>
                                    </tr>
								</tbody>
								</table>
								<br>
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											
											<li>DANH SÁCH ĐƠN HÀNG</li>
											<li>SẢN PHẨM YÊU THÍCH</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
					<div class="single_page">
					<table class="table table-bordered">
                    <thead>
                    <tr style="text-align:center">
                        <th>Mã đơn hàng</th>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>BC8OE</td>
                        <td>Ngô Hoài Phong</td>
                        <td>800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7, TP HCM</td>
                        <td>168.000 VNĐ</td>
                        <td>Đang giao</td>
                        <td><button class="btn btn-primary">Xem chi tiết</button></td>
                    </tr>
                    <tr>
                        <td>BC703</td>
                        <td>Ngô Hoài Phong</td>
                        <td>800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7, TP HCM</td>
                        <td>168.000 VNĐ</td>
                        <td>Đang giao</td>
                        <td><button class="btn btn-primary">Xem chi tiết</button></td>
                    </tr>
                    </tbody>
                    </table>						
					</div>
				</div>
                <!--//tab_one-->
                <div class="tab2">

                    <div class="single_page">
                    <table class="table table-bordered">
                    <thead>
                    <tr style="text-align:center">
                        <th>Tên sách</th>
                        <th>Ảnh bìa</th>
                        <th>Tác giả</th>
                        <th>Nhà xuất bản</th>
                        <th>Phiên bản</th>
                        <th>Giá tiền</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Có những điều chẳng thể nói cùng ai</td>
                        <td></td>
                        <td>Minh Nhật</td>
                        <td>SkyBooks</td>
                        <td>Thường</td>
                        <td>83.000 VNĐ</td>
                        <td>Còn hàng</td>
                        <td><button class="btn btn-primary">Xem chi tiết</button></td>
                    </tr>
                    <tr>
                        <td>Chắc gì ta đã yêu nhau</td>
                        <td></td>
                        <td>Minh Nhật</td>
                        <td>SkyBooks</td>
                        <td>Thường</td>
                        <td>87.000 VNĐ</td>
                        <td>Tạm hết hàng</td>
                        <td><button class="btn btn-primary">Xem chi tiết</button></td>
                    </tr>
                    </tbody>
                    </table>				
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <!--//tabs-->
        </div>
    </div>
    @stop