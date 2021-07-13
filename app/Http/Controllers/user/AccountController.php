<?php

namespace App\Http\Controllers\user;
use App\Models\Account;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
use Mail;
use App\Mail\MailContact;
use App\Mail\MailResponse;
use App\Models\FavoriteBook;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Account::where('Id', Cookie::get('UserId'))->first();
        $sach_yeu_thich = FavoriteBook::where('Id_TK', Cookie::get('UserId'))->get();
        $don_hang = Order::where('Id_KH', Cookie::get('UserId'))->get();
        //return dd($user);
        return View('user.pages.usermanagement', $user, ['sach_yeu_thich'=>$sach_yeu_thich, 'don_hang'=>$don_hang]);
        //
    }

    public function updateinfomation(Request $request, $id)
    {
        //
        $tai_khoan = Account::find($id);
        if($request->file('Anh_Dai_Dien')!= null){
            $name = $request->file('Anh_Dai_Dien')->getClientOriginalName();     
            $anh_dai_dien = $request->file('Anh_Dai_Dien')->move('images', $name);
        } 
        else $anh_dai_dien=$tai_khoan->Anh_Dai_Dien;
      
        $tai_khoan->Ho_Ten=$request['Ho_Ten'];
        $tai_khoan->Ngay_Sinh=$request['Ngay_Sinh'];
        $tai_khoan->Gioi_Tinh=$request['Gioi_Tinh'];
        $tai_khoan->Anh_Dai_Dien=$anh_dai_dien;
        $tai_khoan->So_Dien_Thoai=$request['So_Dien_Thoai'];
        $tai_khoan->Dia_Chi=$request['Dia_Chi'];
        //$tai_khoan->Gioi_Tinh=$request['Gioi_Tinh'];
        $tai_khoan->save();
        return redirect()->back();
    }

    public function addfavoritebook(Request $request)
    {
        $sach = $request['Id_Sach'];
        $check = FavoriteBook::where('Id_Sach', $sach)->first();
        if($check == null){
            $sach_yeu_thich=FavoriteBook::create([
                'Id_Sach'=>$sach,
                'Id_TK'=>Cookie::get('UserId')
            ]);
            return response()->json('Đã thêm vào sách yêu thích!');
        }           
        return response()->json('Sách đã yêu thích');
    }

    public function deletefavoritebook(Request $request)
    {
        $sach = $request['Id'];
        $sach_yt = FavoriteBook::find($sach);
        if($sach_yt != null){
            $sach_yt->delete();
        }
        $sach_yeu_thich = FavoriteBook::where('Id_TK', Cookie::get('UserId'))->get();         
        return response()->json($sach_yeu_thich);
    }

    public function changepass(Request $request)
    {
        $mk = $request['Mat_Khau'];
        $tai_khoan = Account::find(Cookie::get('UserId'));
        if($tai_khoan != null){
            $tai_khoan->Mat_Khau = $mk;
        }
        $tai_khoan->save();      
        return redirect()->back();
    }

    public function mailcontact(Request $request)
    {
        $data = [
            'name' => $request['Name'],
            'email' => $request['Email'],
            'phone' => $request['Phone'],
            'content' => $request['Content'],
        ];
        Mail::to('ypbookstore2018@gmail.com')->send(new MailContact($data));
        //password tài khoản: a@123456 
        Mail::to($request['Email'])->send(new MailResponse());    
        return redirect()->back();
        //return dd($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
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
