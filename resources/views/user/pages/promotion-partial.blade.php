<div class="row">
    <!-- /womens -->
    @if($book->count() > 1)
    @foreach($book as $books)
    <div class="col-md-3 product-men women_two shop-gd">
        <div class="product-googles-info googles">
            <div class="men-pro-item">
                <div class="men-thumb-item">
                    <img src="{!! asset($books->Anh_Bia) !!}" class="img-fluid anh-bia" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{ route('user.single',$books->Id)}}" class="link-product-add-cart">Chi Tiết</a>
                        </div>
                    </div>
                    <span class="product-new-top" style="background: #F60B0E;">- {{(1 - ($books->Gia_Khuyen_Mai / $books->Gia_Tien))*100}}%</span>
                </div>
                <div class="item-info-product">
                    <div class="info-product-price">
                        <div class="grid_meta">
                            <div class="product_price">
                                <h4 class= "hidden"> 
                                    <a class="ten-sach" href="{{ route('user.single',$books->Id)}}">{{$books->Ten_Sach}}</a>
                                </h4>
                                <div class="grid-price mt-2">
                                    <span class="money gia-tien">{{number_format($books->Gia_Khuyen_Mai)}} VNĐ <i style="color:gray; font-size:70%; text-decoration-line:line-through;"> {{number_format($books->Gia_Tien).' '. 'VNĐ'}} </i></span>
                                </div>
                            </div>
                        </div>
                        <div class="googles single-item hvr-outline-out">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="googles_item" value="Farenheit">
                                <input type="hidden" name="amount" value="575.00">
                                <button type="submit" class="googles-cart pgoogles-cart" style="margin-top: -5px;">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                        @if (Cookie::get('UserId') != null)
                        <div class="googles single-item hvr-outline-out" style="margin-top:-15px">
                            <form>
                            {{ csrf_field() }}
                                <button type="button" class="googles-heart" onclick="Favorite({{ $books->Id }})">
                                    <i class="fas fa-heart"></i>
                                </button>	
                            </form>
                        </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    @foreach($book as $books)
    <div class="col-md-3 product-men women_two shop-gd" style="max-width:100%">
        <div class="product-googles-info googles" style="width: 280px;">
            <div class="men-pro-item">
                <div class="men-thumb-item">
                    <img src="{!! asset($books->Anh_Bia) !!}" class="img-fluid anh-bia" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{ route('user.single',$books->Id)}}" class="link-product-add-cart">Chi Tiết</a>
                        </div>
                    </div>
                    <span class="product-new-top" style="background: #F60B0E;">- {{(1 - ($books->Gia_Khuyen_Mai / $books->Gia_Tien))*100}}%</span>
                </div>
                <div class="item-info-product">
                    <div class="info-product-price">
                        <div class="grid_meta">
                            <div class="product_price">
                                <h4 class= "hidden"> 
                                    <a class="ten-sach" href="{{ route('user.single',$books->Id)}}">{{$books->Ten_Sach}}</a>
                                </h4>
                                <div class="grid-price mt-2">
                                    <span class="money gia-tien">{{number_format($books->Gia_Khuyen_Mai)}} VNĐ <i style="color:gray; font-size:70%; text-decoration-line:line-through;"> {{number_format($books->Gia_Tien).' '. 'VNĐ'}} </i></span>
                                </div>
                            </div>
                        </div>
                        <div class="googles single-item hvr-outline-out">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="googles_item" value="Farenheit">
                                <input type="hidden" name="amount" value="575.00">
                                <button type="submit" class="googles-cart pgoogles-cart" style="margin-top: -5px;">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                        @if (Cookie::get('UserId') != null)
                        <div class="googles single-item hvr-outline-out" style="margin-top:-15px">
                            <form>
                            {{ csrf_field() }}
                                <button type="button" class="googles-heart" onclick="Favorite({{ $books->Id }})">
                                    <i class="fas fa-heart"></i>
                                </button>	
                            </form>
                        </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <div id="snackbar">Đã thêm vào sách yêu thích</div>
</div>