@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ ĐƠN HÀNG</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:50px">
                  <a class="btn btn-primary" style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:40px"><i class='fas fa-plus' style='font-size:15px'></i></a>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="order" class="table">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ngày lập</th>
                    <th>ID Khách Hàng</th>
                    <th>ID Nhân Viên</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>29/5/2021</td>
                    <td>1</td>
                    <td>2</td>
                    <td>79.000 VNĐ</td>
                    <td>Còn hàng</td>
                    <td>
                        <a href="#" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                        <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                    </td>
                  </tr>
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