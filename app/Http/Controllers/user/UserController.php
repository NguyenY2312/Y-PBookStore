<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->viewnamespace='user/';
    }
    public function Index(){
        $allbooks = Book::where('Trang_Thai',2);
        return view($this->viewprefix.'index',compact('allbooks'));
    }

    public function Shop(){
        $book = Book::where('Trang_Thai',2)->get();
        return view($this->viewprefix.'shop',compact('book'));
        //return view($this->user."shop");
    }
    public function Contact(){
        return view($this->user."contact");
    }
    public function Single($Id){
        $books = Book::where('Id',$Id)->where('Trang_Thai',2)->get();
        return view($this->viewprefix.'single',compact('books'));
        //return view($this->user."single");
    }
    public function About(){
        return view($this->user."about");
    }
    public function Cart(){
        return view($this->user."cart");
    }
}
