<?php

namespace App\Http\Controllers\user;
use App\Models\Book;
use App\Models\Category;
use App\Models\ImageBook;
use App\Models\PublishingHouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->user='user/pages/';
    }
    public function Index(){
        $sach_moi = Book::orderBy('Id', 'desc')->take(8)->get();
        //return dd($sach);
        $sach_ban_chay = Book::orderBy('Id', 'desc')->take(4)->get();
        return view($this->user."index", ['sach_moi'=>$sach_moi, 'sach_ban_chay'=>$sach_ban_chay]);
    }

    public function Shop(){
        return view($this->user."shop");
    }
    public function Contact(){
        return view($this->user."contact");
    }
    public function Single(){
        return view($this->user."single");
    }
    public function About(){
        return view($this->user."about");
    }
    public function Cart(){
        return view($this->user."cart");
    }
}
