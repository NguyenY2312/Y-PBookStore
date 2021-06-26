@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold" >QUẢN LÝ ĐƠN HÀNG</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:20px">
                  <form id="product-search" action-method="GET">
                      <input style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:1.55rem" type="text" placeholder="Tìm kiếm" >                     
                      <button style="padding: 0.5rem 1.5rem; border-radius: 10px;background:white"><i class='fas fa-search' style='font-size:15px'></i></button>
                  </form>
                  
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:40px">
                    <div class="card-body">
                    <table id="order" class="table">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Ngày Lập</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($don_hang as $order)
                
                  <tr>
                    <td>{{$order->Id}}</td>
                    <td>{{$order->Account->Ho_Ten}}</td>
                    <td>{{$order->Account->So_Dien_Thoai}}</td>
                    <td>{{$order->Ngay_Lap}}</td>
                    <td>{{$order->Dia_Chi_Giao_Hang}}</td>
                    <td>{{$order->Tong_Tien}}</td>
                    <td>
                      @if($order->Trang_Thai == 0) {{"Chưa hoàn thành"}}
                      @else {{"Đã hoàn thành"}}
                      @endif
                    </td>
                    <td>
                        
                        <form action="{{ route('quan-ly-don-hang.destroy',$order->Id) }}" method="POST">
   
                          @csrf
                          @method('DELETE')
                          <a href="{{ route('quan-ly-don-hang.edit', $order->Id) }}" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
                          <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-trash-alt' style='font-size:15px'></i></button>

                        </form>
                        
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