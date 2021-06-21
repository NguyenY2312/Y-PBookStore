@extends('admin.layout')
@section('content')
<style>
    .row{
        padding-top:20px !important;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">CHỈNH SỬA</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- form start -->
            <form action="{{ route('book.update', $Id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tên sách</label>
                    <input class="form-control" value="{{ $Ten_Sach }}" type="text" name="Ten_Sach" id="exampleInputTitle" placeholder="Tên sách">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Thể loại</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="The_Loai" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($the_loai as $category)
                        <option value="{{$category->Id}}" {{ $The_Loai == $category->Id ? 'selected="selected"' : '' }} >{{$category->The_Loai}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                  <label for="exampleInputTopic">Ảnh bìa</label>
                    <div class="custom-file">
                        <input accept="*.png|*.jpg|*.jpeg" type="file" class="form-control" value="{{ str_replace('/user/images/book/', '', $Anh_Bia) }}" name="Anh_Bia" id="hinh_anh" placeholder="Chọn ảnh" name="hinh_anh" />
                    </div>
                  </div>
                  <!-- <div class="col-lg-3">
                    <img src="{{$Anh_Bia}}" style="width:80px; height:80px; border-radius:0%">
                  </div> -->
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Nhà xuất bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Nha_Xuat_Ban" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($nha_xuat_ban as $publishingcompany)
                        <option value="{{$publishingcompany->Id}}" {{ $Nha_Xuat_Ban == $publishingcompany->Id ? 'selected="selected"' : '' }} >{{$publishingcompany->Ten_NXB}}</option>
                    @endforeach
                    </select>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tác giả</label>
                    <input class="form-control" type="text" name="Tac_Gia" value="{{ $Tac_Gia }}" id="exampleInputTitle" placeholder="Tác giả">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Phiên bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Phien_Ban" class="form-control" id="exampleInputTitle" placeholder="Title">
                        @if ($Phien_Ban == 0)
                        <option value="0" selected>Bản thường</option>
                        <option value="1">Bản đặc biệt</option>  
                        @else 
                        <option value="0">Bản thường</option>
                        <option value="1" selected>Bản đặc biệt</option>
                        @endif
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Số trang</label>
                    <input class="form-control" type="text" id="exampleInputTitle" value="{{ $So_Trang }}" name="So_Trang" placeholder="Số trang">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Loại bìa</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Loai_Bia" class="form-control" id="exampleInputTitle" placeholder="Title">
                        @if ($Loai_Bia == 0)
                        <option value="0" selected>Bìa cứng</option>
                        <option value="1">Massmarket Paperback</option>
                        <option value="2">Bìa mềm</option>
                        @elseif ($Loai_Bia == 1)
                        <option value="0">Bìa cứng</option>
                        <option value="1" selected>Massmarket Paperback</option>
                        <option value="2">Bìa mềm</option>
                        @else
                        <option value="0">Bìa cứng</option>
                        <option value="1">Massmarket Paperback</option>
                        <option value="2" selected>Bìa mềm</option>
                        @endif
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Giá tiền</label>
                    <input class="form-control" type="text" value="{{ $Gia_Tien }}" name="Gia_Tien" id="exampleInputTitle" placeholder="Giá tiền">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Số lượng</label>
                    <input class="form-control" type="text" value="{{ $So_Luong }}" name="So_Luong" id="exampleInputTitle" placeholder="Số lượng">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <label for="exampleInputContent">Mô tả</label>
                    <textarea type="text" style="height:100px" class="form-control" name="Mo_Ta" id="editor" placeholder="Nhập nội dung mô tả">{{ $Mo_Ta }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">
                    <label for="exampleInputTopic">SKU</label>
                    <input class="form-control" type="text" id="SKU" value="{{ $SKU }}" name="SKU" placeholder="SKU" style="margin-right:50px" readonly>
                  </div>
                  <div class="col-lg-1" style="padding-top:30px; margin-left:-10px">
                  <button type="button" onclick="makeSKU(10)" class="btn btn-primary"><i class="fas fa-sync-alt"></i></button> &nbsp;
                  </div>
                  <div class="col-lg-6" style=" margin-left:10px">
                    <label for="exampleInputStatus">Trạng thái</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="Trang_Thai" id="exampleInputStatus" placeholder="Status">
                        @if ($Trang_Thai == 0)
                        <option value="0" selected>Ngừng bán</option>
                        <option value="1">Tạm hết hàng</option>
                        <option value="2">Còn hàng</option>
                        @elseif ($Trang_Thai == 1)
                        <option value="0">Ngừng bán</option>
                        <option value="1" selected>Tạm hết hàng</option>
                        <option value="2">Còn hàng</option>
                        @else
                        <option value="0">Ngừng bán</option>
                        <option value="1">Tạm hết hàng</option>
                        <option value="2" selected>Còn hàng</option>
                        @endif
                    </select>
                  </div>
                </div>
                <div class="row" style="float:right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button> &nbsp;
                  <button type="cancel" class="btn btn-secondary" style="margin-left: 15px;margin-right: 30px; color:white"><i class="fas fa-window-close"></i></button>
                </div>
              </form>
              <div style="padding-top:80px"> <hr/> </div>
              <form>
              <div class="row" style="margin-top:30px">
                  <div class="col-lg-12">
                    <h5 class="font-weight-bold">ẢNH SÁCH</h5><br/>
                    <a class="btn btn-primary" href="#" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-plus' style='font-size:15px'></i></a>
                    <table id="book" class="table table-hover table-bordered" style="margin-top:10px">
                        <thead>
                        <tr>
                        <th>Hình ảnh</th>
                        <th>Ảnh trình chiếu</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" style="width:100px; height:100px; border-radius:0%"></td>
                        <td><input style="margin-left:30px;width:20px;height:20px;margin-bottom: 0.5rem;" checked="" disabled="" type="checkbox" id="exampleInputTitle"></td>
                        <td><input style="margin-left:30px;width:20px;height:20px;margin-bottom: 0.5rem;" checked="" disabled="" type="checkbox" id="exampleInputTitle"></td>
                        <td>
                            <a href="#" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                            <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                        </td>
                        </tr>
                        <tr>
                        <td><img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" style="width:100px; height:100px; border-radius:0%"></td>
                        <td><input style="margin-left:30px;width:20px;height:20px;margin-bottom: 0.5rem;" value="false" disabled="" type="checkbox" id="exampleInputTitle"></td>
                        <td><input style="margin-left:30px;width:20px;height:20px;margin-bottom: 0.5rem;" checked="" disabled="" type="checkbox" id="exampleInputTitle"></td>
                        <td>
                            <a href="#" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                            <a href="#" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                        </td>
                        </tr>
                        </tbody>
                </table>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
<script>
    function makeSKU(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
      }
      document.getElementById("SKU").value = result;
    }
</script>
@stop