@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ BÌNH LUẬN</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:20px">
                <form id="product-search" action-method="GET">
                      <input style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:1.55rem" type="text" placeholder="Tìm kiếm" >                     
                      <button style="padding: 0.5rem 1.5rem; border-radius: 10px;background:white"><i class='fas fa-search' style='font-size:15px'></i></button>
                  </form>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="comment" class="table">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>ID Khách Hàng</th>
                    <th>ID Sách</th>
                    <th>Nội dung</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                    <td>Sách hay...</td>
                    <td>28/5/2021</td>
                    <td>Hoạt động</td>
                    <td>
                        <a href="/admin/quan-ly-binh-luan/1/edit" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                        <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                    </td>
                  </tr>
                  </tbody>
                  @foreach($binh_luan as $comment)
                  <tbody>
                  <tr>
                    <td>{{$comment->Id}}</td>
                    <td>{{$comment->Id_Sach}}</td>
                    <td>{{$comment->Id_TK}}</td>
                    <td>{{$comment->Noi_Dung}}</td>
                    <td>{{$comment->Thoi_Gian}}</td>
                    <td>{{$comment->Trang_Thai}}</td>
                    <td>
                        <a href="/admin/quan-ly-binh-luan/1/edit" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                        <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
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