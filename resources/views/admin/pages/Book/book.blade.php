@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ SÁCH</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:50px">
                  <a class="btn btn-primary" href="{{ route('book.create')}}" style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:40px"><i class='fas fa-plus' style='font-size:15px'></i></a>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="book" class="table">
                  <thead>
                  <tr>
                    <th>Ảnh bìa</th>
                    <th>Tên sách</th>
                    <th>Thể loại</th>
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
                    <td><img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" style="width:50px; height:50px; border-radius:0%"></td>
                    <td>Tư duy sâu</td>
                    <td>Sách kỹ năng sống</td>
                    <td>Diệp Tu</td>
                    <td>SkyBook</td>
                    <td>Thường</td>
                    <td>79.000 VNĐ</td>
                    <td>Còn hàng</td>
                    <td>
                        <a href="/admin/book/1/edit" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                        <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" style="width:50px; height:50px; border-radius:0%"></td>
                    <td>Tư duy sâu</td>
                    <td>Sách kỹ năng sống</td>
                    <td>Diệp Tu</td>
                    <td>SkyBook</td>
                    <td>Thường</td>
                    <td>79.000 VNĐ</td>
                    <td>Còn hàng</td>
                    <td>
                        <a href="/admin/book/2/edit" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
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