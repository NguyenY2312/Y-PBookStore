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
                    <label for="exampleInputTopic">ID</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="ID" value="1">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTopic">ID Khách Hàng</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="ID Khách Hàng" value="2">
                  </div>
                </div> 
                <div class="row">
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">ID Sách</label>
                    <input class="form-control" type="text" id="exampleInputTitle" placeholder="ID Sách" value="1">
                  </div>
                  <div class="col-lg-6">
                    <label for="exampleInputTitle">Nội dung</label>
                    <textarea type="text" style="height:100px" class="form-control" name="noi_dung" id="editor" placeholder="Nội dung" value="">Sách hay...</textarea>
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