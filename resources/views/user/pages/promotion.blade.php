@extends('user.layout')
@section('content')
<style>
    .dropdown-menu6 .price-active{
        color: #ff4e00;
    }
</style>
<!-- banner -->
<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="{{route('user.index')}}">Trang Chủ</a>
                    <i>|</i>
                </li>
                <li>Khuyến Mãi</li>
            </ul>
        </div>
    </div>
</div>
<!--//banner -->
<!--/shop-->
@if($Id != null)
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">
        <div class="inner-sec-shop px-lg-4 px-3">
            <h2 class="tittle-w3layouts my-lg-4 mt-3 text-left" style="color:#FFC107; font-weight:bold"><i class="fas fa-gift"></i> {{$Ten_CTKM}} <i class="fas fa-gift"></i></h2>
            <div class="row">
                <!-- product left -->
                <div class="side-bar col-lg-3">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">Tìm kiếm</h3>
                        <form action="{{route('user.promotion')}}" method="GET">
                                <input class="form-control" type="search" name="search" placeholder="Tìm kiếm" required="">
                                <button class="btn1">
                                        <i class="fas fa-search"></i>
                                </button>
                                <div class="clearfix"> </div>
                        </form>
                    </div>
                    <!-- price range -->
                    <div class="range">
                        <h3 class="agileits-sear-head">Khoảng giá</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                <a class="{{ Request::get('price') == 1 ? 'price-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 1])}}" style="border:solid 1px; padding:5px">0 - 100000 VNĐ</a>  
                                <a class="{{ Request::get('price') == 2 ? 'price-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 2])}}" style="border:solid 1px; padding:5px">100000 - 200000 VNĐ</a>
                            </li>
                            <li style="padding-top:20px">
                                <a class="{{ Request::get('price') == 3 ? 'price-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 3])}}" style="border:solid 1px; padding:5px">200000 - 300000 VNĐ</a> 
                                <a class="{{ Request::get('price') == 4 ? 'price-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 4])}}" style="border:solid 1px; padding:5px">Trên 300000 VNĐ</a>
                            </li>
                            <li style="padding-top:20px">
                                <a class="{{ Request::get('price') == 0 ? 'price-active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 0])}}" style="border:solid 1px; padding:5px">Tất cả</a> 
                            </li>
                        </ul>
                    </div>
                    <!-- //price range -->
                    <!--preference -->
                    <div class="range" style="margin-top:15px">
                        <h3 class="agileits-sear-head">Sắp xếp theo</h3>
                        <form method="GET" id="form-order"> 
                        <select name="orderby" class="orderby" style="padding:5px; width:150px" onchange="onChanged()">
                            <option value="def" {{ Request::get('orderby') == 'def' || '' ? 'selected' : '' }}> Mặc định </option>
                            <option value="new" {{ Request::get('orderby') == 'new' ? 'selected' : '' }}> Mới nhất </option>
                            <option value="old" {{ Request::get('orderby') == 'old' ? 'selected' : '' }}> Cũ nhất </option>
                            <option value="asc" {{ Request::get('orderby') == 'asc' ? 'selected' : '' }}> Giá tăng dần </option>
                            <option value="des" {{ Request::get('orderby') == 'des' ? 'selected' : '' }}> Giá giảm dần </option>
                        </select>
                        </form>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="range" style="margin-top:15px">
                        <h3 class="agileits-sear-head">Thể loại</h3>
                        <form method="GET" id="form-cate">
                        <select name="category" class="category" onchange="onChangedCate()" style="padding:5px;">
                            <option value="00" {{ Request::get('category') == '00' || '' ? 'selected' : '' }}> Tất cả </option>
                            <option value="01" {{ Request::get('category') == '01' ? 'selected' : '' }}> Truyện tranh </option>
                            <option value="02" {{ Request::get('category') == '02' ? 'selected' : '' }}> Sách thiếu nhi </option>
                            <option value="03" {{ Request::get('category') == '03' ? 'selected' : '' }}> Kỹ năng sống </option>
                            <option value="04" {{ Request::get('category') == '04' ? 'selected' : '' }}> Kinh tế </option>
                            <option value="05" {{ Request::get('category') == '05' ? 'selected' : '' }}> Văn học </option>
                            <option value="06" {{ Request::get('category') == '06' ? 'selected' : '' }}> Tâm lý/Giáo dục </option>
                            <option value="07" {{ Request::get('category') == '07' ? 'selected' : '' }}> Văn hóa/Du lịch </option>
                            <option value="08" {{ Request::get('category') == '08' ? 'selected' : '' }}> Sách giáo khoa </option>
                            <option value="09" {{ Request::get('category') == '09' ? 'selected' : '' }}> Thưởng thức/Đời sống </option>
                            <option value="10" {{ Request::get('category') == '10' ? 'selected' : '' }}> Tạp chí </option>
                            <option value="11" {{ Request::get('category') == '11' ? 'selected' : '' }}> Sách học ngoại ngữ/Từ điển </option>
                            <option value="12" {{ Request::get('category') == '12' ? 'selected' : '' }}> Sách tham khảo </option>
                            <option value="13" {{ Request::get('category') == '13' ? 'selected' : '' }}> Sách ẩm thực </option>
                        </select>
                    </form>
                    </div>
                    <!-- //discounts -->
                    <!-- content -->
                    <div class="range" style="margin-top:15px">
                        <h3 class="agileits-sear-head">Nội dung khuyến mãi</h3>
                        <p><i class="fas fa-star" style="color:#FFC107;"></i> Chương trình bắt đầu từ ngày {{date('d-m-Y', strtotime($Tg_Bat_Dau))}} đến {{date('d-m-Y', strtotime($Tg_Ket_Thuc))}}</p>
                        <div style="padding-top: 15px;padding-left: 30px;letter-spacing: 1px;font-size: 0.9em;line-height: 1.9em;color: #959596;">
                            {!!html_entity_decode($Noi_Dung)!!}
                        </div>
                        <p style="padding-top:15px"><i class="fas fa-gift" style="color:red"></i> Cùng với nhiều ưu đãi hấp dẫn khác <a href="{{$Link_Chi_Tiet}}">Xem chi tiết</a></p>

                    </div>
                    <!-- //content -->
                </div>
                <!-- //product left -->
                <!--/product right-->
                <div class="left-ads-display col-lg-9">
                    <div class="" style="padding-left:20px">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{!! $Banner !!}" alt="" style="width:100%; height: 70px; object-fit:cover;">												
                            </div>					
                        </div>						
                        <div class="row">
                            <!-- /womens -->
                            @include('user.pages.promotion-partial')
                        </div>
                        <br>
                        {!! $book->links() !!}	
                </div>
                <!--//product right-->
            </div>
    </div>
</section>
@endif
<script>
    window.onload = function(){
        var element = document.getElementById("nav-ctkm");
        element.classList.add("active");

        var x = localStorage.getItem("mytime");
        var y = localStorage.getItem("myurl");
        var n = localStorage.getItem("mycate");
        var z = location.href;
        var attrs = z.substr(z.indexOf("page"), 6);
        if(y != null){
            if(y.search("page") === -1 && y.search("price") === -1 && y.search("orderby") === -1 && y.search("category") === -1)
            {

            }
            else if(y.search("page") === -1){
                var url = y + '&' + attrs;
                window.location.href = url;
            }
            else{
                var attrurl = y.substr(y.indexOf("page"), 6);
                var newurl = y.replace(attrurl, attrs);
                window.location.href = newurl;
            }
            localStorage.removeItem("myurl");
        }

        var attrr = z.substr(z.indexOf("orderby"), 11);
        if(x != null){
            if(x.search("page") === -1 && x.search("price") === -1 && x.search("orderby") === -1 && x.search("category") === -1)
            {

            }
            else if(x.search("orderby") === -1){
                var url1 = x + '&' + attrr;
                window.location.href = url1;
            }
            else{
                var attrurl1 = x.substr(x.indexOf("orderby"), 11);
                var newurl1 = x.replace(attrurl1, attrr);
                window.location.href = newurl1;
            }
            localStorage.removeItem("mytime");
        }

        var attrrs = z.substr(z.indexOf("category"), 11);
        if(n != null){
            if(n.search("page") === -1 && n.search("price") === -1 && n.search("orderby") === -1 && n.search("category") === -1)
            {

            }
            else if(n.search("category") === -1){
                var url2 = n + '&' + attrrs;
                window.location.href = url2;
            }
            else{
                var attrurl2 = n.substr(n.indexOf("category"), 11);
                var newurl2 = n.replace(attrurl2, attrrs);
                window.location.href = newurl2;
            }
            localStorage.removeItem("mycate");
        }
    }
    function onChanged(){
        $('#form-order').submit();
        localStorage.mytime = location.href;
    }
    function onChangedCate(){
        $('#form-cate').submit();
        localStorage.mycate = location.href;
    }
</script>
@stop
		