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
                <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tên sách</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="Tên sách">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Thể loại</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option>Sách kỹ năng sống</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Ảnh bìa</label>
                    <div class="custom-file">
                        <input accept="*.png|*.jpg|*.jpeg" type="file" class="form-control" id="hinh_anh" placeholder="Chọn ảnh" name="hinh_anh" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Nhà xuất bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option>SkyBook</option>
                    </select>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Tác giả</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="Tác giả">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Phiên bản</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option>Thường</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Số trang</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="Số trang">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Loại bìa</label>
                    <select style="border: 1px solid #CED4DA;border-radius: 4px; outline: none;" class="form-control" id="exampleInputTitle" placeholder="Title">
                        <option>Thường</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">Giá tiền</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="Giá tiền">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <label for="exampleInputContent">Mô tả</label>
                    <textarea type="text" style="height:100px" class="form-control" name="noi_dung" id="editor" placeholder="Content"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Trạng thái</label>
                    <input style="margin-left:30px;width:20px;height:20px;margin-bottom: 0.5rem;" type="checkbox" id="exampleInputTitle">
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
@stop