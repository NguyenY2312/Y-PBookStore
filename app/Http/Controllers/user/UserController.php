<?php

namespace App\Http\Controllers\user;
use App\Models\Book;
use App\Models\Category;
use App\Models\ImageBook;
use App\Models\PublishingHouse;
use App\Models\Promotion;
use App\Models\DetailPromotion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Cart;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->viewnamespace='user/';
    }
    public function Index(){
        $sach_moi = Book::orderBy('Id', 'desc')->take(8)->get();
        //return dd($sach);
        $sach_ban_chay = Book::orderBy('Id', 'desc')->take(4)->get();
        return view($this->viewprefix."index", ['sach_moi'=>$sach_moi, 'sach_ban_chay'=>$sach_ban_chay]);
    }
    public function Shop($id){
        if($id == 0){
            $book = Book::where('Trang_Thai',2)
                        ->paginate(12);
        }
        else{
        $book = Book::where('Trang_Thai',2)
                      ->where('The_loai', $id)
                      ->paginate(12);
        }
        //return response()->json('Thành công');
        return view($this->viewprefix.'shop',compact('book'));
    }

    public function ShopQuery(Request $request, $id){
        $max = $request['Max'];
        $min = $request['Min'];
        if($id == 0){
            $book = Book::where('Trang_Thai',2)
                        ->where([ ['Gia_Tien','>=', $min],['Gia_Tien','<=', $max] ])
                        ->paginate(12);
        }
        else{
        $book = Book::where('Trang_Thai',2)
                      ->where('The_loai', $id)
                      ->paginate(12);
        }
        return response()->json($book);
    }

    public function Contact(){
        return view($this->viewprefix.'contact');
    }

    public function Promotion(Request $request){
        $promotion = Promotion::where('Trang_Thai', 0)->orderBy('Id', 'desc')->first();
        if ($promotion != null){
        $detail = DetailPromotion::where('Id_Khuyen_Mai', $promotion->Id)->where('Kich_Hoat', 0)->get();
        $book = Book::where('Id', '=', 0);
        foreach($detail as $detailpromotion)
        {
            $book = $book->orwhere('The_Loai', '=',$detailpromotion->Id_The_Loai);           
        }
        if($request['price']){
            $price = $request['price'];
            switch($price)
            {
                case 1:
                $book = $book->groupby('Id')->having('Gia_Khuyen_Mai', '>=', 0)->having('Gia_Khuyen_Mai','<=', 100000);
                break;
                case 2:
                $book = $book->groupby('Id')->having('Gia_Khuyen_Mai', '>=', 100000)->having('Gia_Khuyen_Mai','<=', 200000);
                break;
                case 3:
                $book = $book->groupby('Id')->having('Gia_Khuyen_Mai', '>=', 200000)->having('Gia_Khuyen_Mai','<=', 300000);
                break;
                case 4:
                $book = $book->groupby('Id')->having('Gia_Khuyen_Mai', '>=', 300000);
                break;
                default:
                $book = $book->groupby('Id')->having('Gia_Khuyen_Mai', '>=', 0);
                break;
            }
        }
        if($request['category']){
            $cate = $request['category'];
            if($cate==0) $book = $book;
            else
            $book = $book->groupby('Id')->having('The_Loai', '=', $cate);
        }
        if($request['orderby']){
            $orderby = $request['orderby'];
            switch($orderby)
            {
                case 'new':
                $book = $book->orderBy('Id', 'desc');
                break;
                case 'old':
                $book = $book->orderBy('Id', 'asc');
                break;
                case 'asc':
                $book = $book->orderBy('Gia_Khuyen_Mai', 'asc');
                break;
                case 'des':
                $book = $book->orderBy('Gia_Khuyen_Mai', 'desc');
                break;
                default:
                $book = $book->orderBy('Id', 'desc');
                break;
            }
        }
        $book = $book->groupby('Id')->having('is_deleted', 0)->paginate(12);
        return view($this->viewprefix."promotion", $promotion,['book'=>$book]);
        }
        else
        {
            $errors = new MessageBag(['error' => ["Hiện không có chương trình khuyến mãi!"]]);
            return view($this->viewprefix."error")->withErrors($errors);
        }
    }

    public function Single($book_id){
        //lấy thông tin sách chi tiết
        $sach = Book::where('Id',$book_id)->where('Trang_Thai',2)->first();
        //lấy thông tin thể loại/ nhà xuất bản
        $thong_tin_sach = Book::where('Id',$book_id)->where('Trang_Thai',2)->get();
        //sách liên quan
        $sach_tuong_tu = Book::where('The_Loai', $sach->The_Loai)->where('Trang_Thai',2)->whereNotIn('Id',[$book_id])->get();
        return view($this->viewprefix.'single', $sach, ['thong_tin_sach'=>$thong_tin_sach, 'sach_tuong_tu'=>$sach_tuong_tu]);
        //return view($this->user."single");
    }
    public function About(){
        return view($this->viewprefix.'about');
    }
    public function showCart(){
        return view($this->viewprefix."cart");
    }
    public function saveCart(Request $request){
        $Id=$request->bookid_hidden;
        $So_Luong=$request->qty;
        $book_info = Book::where('Id',$Id)->where('Trang_Thai',2)->first();

        $data['id']=$book_info->Id;
        $data['qty']=$So_Luong;
        $data['name']=$book_info->Ten_Sach;
        $data['price']=$book_info->Gia_Tien;
        $data['weight']=$book_info->Gia_Tien;
        $data['options']['image']=$book_info->Anh_Bia;
        Cart::add($data);


        return redirect()->route('gio-hang');
    }
    public function deleteCart($rowId){
        Cart::update($rowId,0);
        return redirect()->route('gio-hang');
    }
    public function updateCart(Request $request){
        $rowId=$request->rowId_cart;
        $qty=$request->cart_quantity;
        Cart::update($rowId,$qty);
        return redirect()->route('gio-hang');
    }
    public function checkout(){
        return view($this->viewprefix."checkout");
    }
    
    

}

