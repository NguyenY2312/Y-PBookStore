<?php

namespace App\Http\Controllers\user;
use App\Models\Book;
use App\Models\Category;
use App\Models\ImageBook;
use App\Models\PublishingHouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
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

    public function Shop(){
        $book = Book::where('Trang_Thai',2)->paginate(16);
        $book_new = Book::orderBy('Id', 'desc')->take(4)->get();
        $sach_noi_bat = Book::where('Trang_Thai',2)->orderBy('Id', 'desc')->take(7)->get();
        return view($this->viewprefix.'shop',compact('book','sach_noi_bat','book_new'));
        //return view($this->user."shop");
    }
    public function Contact(){
        return view($this->user."contact");
    }
    public function Single($book_id){
        $category=Category::orderBy('Id', 'desc')->get();
        $books = DB::table('sach')
        ->join('the_loai','the_loai.Id','=','sach.The_Loai')
        ->where('sach.Id',$book_id)->where('Trang_Thai',2)->get();
        foreach($books as  $v){
            $cat=$v->The_Loai;
        }
        $sach_tuong_tu = DB::table('sach')
        ->join('the_loai','the_loai.Id','=','sach.The_Loai')
        ->where('the_loai.The_Loai',$cat)->where('Trang_Thai',2)->whereNotIn('sach.Id',[$book_id])->get();
        return view($this->viewprefix.'single')->with('category',$category)->with('books',$books)->with('sach_tuong_tu',$sach_tuong_tu);
        //return view($this->user."single");
    }
    public function About(){
        return view($this->user."about");
    }
    public function Cart(){
        return view($this->user."cart");
    }
}
