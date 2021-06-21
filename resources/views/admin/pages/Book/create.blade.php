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
                  <h3 class="font-weight-bold">THÊM SÁCH</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- form start -->
                <form action=" {{route('book.store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tên sách</label>
                    <input class="form-control" type="text" name="Ten_Sach" id="exampleInputTitle" placeholder="Tên sách">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Thể loại</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="The_Loai" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($the_loai as $category)
                        <option value="{{$category->Id}}">{{$category->The_Loai}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Ảnh bìa</label>
                    <div class="custom-file">
                        <input accept="*.png|*.jpg|*.jpeg" type="file" class="form-control" name="Anh_Bia" id="hinh_anh" placeholder="Chọn ảnh" name="hinh_anh" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Nhà xuất bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Nha_Xuat_Ban" class="form-control" id="exampleInputTitle" placeholder="Title">
                    @foreach($nha_xuat_ban as $publishingcompany)
                        <option value="{{$publishingcompany->Id}}">{{$publishingcompany->Ten_NXB}}</option>
                    @endforeach
                    </select>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tác giả</label>
                    <input class="form-control" type="text" name="Tac_Gia" id="exampleInputTitle" placeholder="Tác giả">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Phiên bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Phien_Ban" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option value="0">Bản thường</option>
                        <option value="1">Bản đặc biệt</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Số trang</label>
                    <input class="form-control" type="text" id="exampleInputTitle" name="So_Trang" placeholder="Số trang">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Loại bìa</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" name="Loai_Bia" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option value="0">Bìa cứng</option>
                        <option value="1">Massmarket Paperback</option>
                        <option value="2">Bìa mềm</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Giá tiền</label>
                    <input class="form-control" type="text" name="Gia_Tien" id="exampleInputTitle" placeholder="Giá tiền">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Số lượng</label>
                    <input class="form-control" type="text" name="So_Luong" id="exampleInputTitle" placeholder="Số lượng">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <label for="exampleInputContent">Mô tả</label>
                    <textarea type="text" style="height:100px" class="form-control" name="Mo_Ta" id="editor" placeholder="Nhập nội dung mô tả"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">
                    <label for="exampleInputTopic">SKU</label>
                    <input class="form-control" type="text" id="SKU" name="SKU" placeholder="SKU" style="margin-right:50px" readonly>
                  </div>
                  <div class="col-lg-1" style="padding-top:30px; margin-left:-10px">
                  <button type="button" onclick="makeSKU(10)" class="btn btn-primary"><i class="fas fa-sync-alt"></i></button> &nbsp;
                  </div>
                  <div class="col-lg-6" style=" margin-left:10px">
                    <label for="exampleInputStatus">Trạng thái</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" name="Trang_Thai" id="exampleInputStatus" placeholder="Status">
                        <option value="0">Ngừng bán</option>
                        <option value="1">Tạm hết hàng</option>
                        <option value="2">Còn hàng</option>
                    </select>
                  </div>
                </div>
                <div class="row" style="float:right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button> &nbsp;
                  <button type="cancel" class="btn btn-secondary" style="margin-left: 15px;margin-right: 30px; color:white"><i class="fas fa-window-close"></i></button>
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
    window.onload = makeSKU(10);
</script>
@stop