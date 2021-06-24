@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ NHÀ XUẤT BẢN</h3>
                </div>
                <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="padding-top:50px">
                  <a class="btn btn-primary" href="{{ route('quan-ly-nha-xuat-ban.create')}}" style="padding: 0.5rem 1.5rem; border-radius: 10px; margin-left:40px"><i class='fas fa-plus' style='font-size:15px'></i></a>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="publish" class="table">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên Nhà Xuất Bản</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($nha_xuat_ban as $publish)
                  <tr>
                    <td>{{$publish->Id}}</td>
                    <td>{{$publish->Ten_NXB}}</td>
                    <td>{{$publish->Dia_Chi}}</td>
                    <td>{{$publish->So_Dien_Thoai}}</td>
                    <td>{{$publish->Email}}</td>
                    <td> 
                    @if($publish->Trang_Thai == 0) {{"Ngừng hoạt động"}}
                    @else {{"Hoạt động"}}
                    @endif
                    </td>
                    <td>
                        
                        <form action="{{ route('quan-ly-nha-xuat-ban.destroy',$publish->Id) }}" method="POST">
   
                          @csrf
                          @method('DELETE')
                          <a href="{{route('quan-ly-nha-xuat-ban.edit',$publish->Id)}}" class="btn btn-warning" style="padding: 0.5rem 1.5rem; border-radius: 10px;"><i class='fas fa-edit' style='font-size:15px'></i></a>
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