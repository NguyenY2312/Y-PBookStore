<?php

namespace App\Http\Controllers\admin;
use DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\PublishingCompany;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sach = Book::paginate(10)->where('is_deleted', 0); // Phân trang
        return View('admin.pages.Book.book', ['sach'=>$sach]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $the_loai = Category::all();
        $nha_xuat_ban = PublishingCompany::all(); 
        return View('admin.pages.Book.create', ['the_loai'=>$the_loai], ['nha_xuat_ban'=>$nha_xuat_ban]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pathimg = '/user/images/book/'.$request->file('Anh_Bia')->getClientOriginalName();
        
        $sach=Book::create([
            'Ten_Sach'=>$request['Ten_Sach'],
            'The_Loai'=>$request['The_Loai'],
            'Anh_Bia'=>$pathimg,
            'Nha_Xuat_Ban'=>$request['Nha_Xuat_Ban'],
            'Tac_Gia'=>$request['Tac_Gia'],
            'So_Luong'=>$request['So_Luong'],
            'Mo_Ta'=>$request['Mo_Ta'],
            'Phien_Ban'=>$request['Phien_Ban'],
            'Loai_Bia'=>$request['Loai_Bia'],
            'Gia_Tien'=>$request['Gia_Tien'],
            'SKU'=>$request['SKU'],
            'So_Trang'=>$request['So_Trang'],
            'Trang_Thai'=>$request['Trang_Thai'],
        ]);
        //return dd($sach);
        return redirect()->route('book.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sach = Book::find($id);
        $the_loai = Category::all();
        $nha_xuat_ban = PublishingCompany::all(); 
        return View('admin.pages.Book.edit', $sach, ['the_loai'=>$the_loai,'nha_xuat_ban'=>$nha_xuat_ban]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sach = Book::find($id);
        if ($request->file('Anh_Bia') == null) $pathimg = $sach->Anh_Bia;
        else $pathimg = '/user/images/book/'.$request->file('Anh_Bia')->getClientOriginalName();

        $sach->Ten_Sach=$request['Ten_Sach'];
        $sach->The_Loai=$request['The_Loai'];
        $sach->Nha_Xuat_Ban=$request['Nha_Xuat_Ban'];
        $sach->Anh_Bia=$pathimg;
        $sach->Tac_Gia=$request['Tac_Gia'];
        $sach->So_Luong=$request['So_Luong'];
        $sach->Mo_Ta=$request['Mo_Ta'];
        $sach->Phien_Ban=$request['Phien_Ban'];
        $sach->Loai_Bia=$request['Loai_Bia'];
        $sach->Gia_Tien=$request['Gia_Tien'];
        $sach->SKU=$request['SKU'];
        $sach->So_Trang=$request['So_Trang'];
        $sach->Trang_Thai=$request['Trang_Thai'];
        $sach->save();
        return redirect()->route('book.index');
        //return dd($sach);
        //
    }
    public function delete(Request $request, $id)
    {
        $sach = Book::find($id);
        $sach->is_deleted = 1;
        $sach->save();
        return redirect()->route('book.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
