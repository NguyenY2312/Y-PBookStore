@extends('admin.layout')
@section('content')
<style>
    .hidetext { -webkit-text-security: disc; /* Default */ }
</style>
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ TÀI KHOẢN</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:50px">
                  <a class="btn btn-primary" href="{{ route('account.create')}}" style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:40px"><i class='fas fa-plus' style='font-size:15px'></i></a>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="book" class="table">
                  <thead>
                  <tr>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Loại tài khoản</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($tai_khoan as $account)
                  <tr>
                    <td>{{$account->Email}}</td>
                    <td class="hidetext">{{$account->Mat_Khau}}</td>
                    <td>{{$account->Ho_Ten}}</td>
                    <td>
                    @if($account->Gioi_Tinh == 0) {{"Nam"}}
                    @else {{"Nữ"}}
                    @endif
                    </td>
                    <td>{{$account->So_Dien_Thoai}}</td>
                    <td>{{$account->Dia_Chi}}</td>
                    <td>
                    @if($account->Loai_TK == 0) {{"Admin"}}
                    @else {{"Khách hàng"}}
                    @endif
                    </td>
                    @if($account->Trang_Thai == 0)
                    <td style="text-align:center"><input type="checkbox" disabled="disabled" checked/></td>
                    @else
                    <td style="text-align:center"><input type="checkbox" disabled="disabled"/></td>
                    @endif
                    <td>
                        <a href="/admin/account/1/edit" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                        <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop