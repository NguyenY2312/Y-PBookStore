<?php

namespace App\Http\Controllers\admin;
use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tai_khoan = Account::where('is_deleted', 0)->paginate(10); // Phân trang
        return View('admin.pages.Account.account', ['tai_khoan'=>$tai_khoan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('admin.pages.Account.create');
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
        $account = Account::where('Email', $request['Email'])->get();
        foreach ($account as $item)
        {
            $is_deleted = $item->is_deleted;
        }
        if ($account->count() == 0 || $is_deleted == 1) {
            $tai_khoan=Account::create([
                'Email'=>$request['Email'],
                'Mat_Khau'=>$request['Mat_Khau'],
                'Ho_Ten'=>$request['Ho_Ten'],
                'Anh_Dai_Dien'=>$request['Anh_Dai_Dien'],
                'So_Dien_Thoai'=>$request['So_Dien_Thoai'],
                'Dia_Chi'=>$request['Dia_Chi'],
                'Loai_TK'=>$request['Loai_TK'],
                'Gioi_Tinh'=>$request['Gioi_Tinh'],
                'Trang_Thai'=>$request['Trang_Thai']
            ]);
            return redirect()->route('account.index');
        }
        else
        {
            $errors = new MessageBag(['create' => ["Tài khoản đã tồn tại!"]]);
            return redirect()->route('account.create')->withErrors($errors);
        }
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
        $tai_khoan = Account::find($id);
        return View('admin.pages.Account.edit', $tai_khoan);
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
        $tai_khoan = Account::find($id);
        $tai_khoan->Email=$request['Email'];
        $tai_khoan->Mat_Khau=$request['Mat_Khau'];
        $tai_khoan->Ho_Ten=$request['Ho_Ten'];
        $tai_khoan->Anh_Dai_Dien=$request['Anh_Dai_Dien'];
        $tai_khoan->So_Dien_Thoai=$request['So_Dien_Thoai'];
        $tai_khoan->Dia_Chi=$request['Dia_Chi'];
        $tai_khoan->Loai_TK=$request['Loai_TK'];
        $tai_khoan->Gioi_Tinh=$request['Gioi_Tinh'];
        $tai_khoan->Trang_Thai=$request['Trang_Thai'];
        $tai_khoan->save();
        return redirect()->route('account.index');
    }

    public function delete(Request $request, $id)
    {
        $tai_khoan = Account::find($id);
        $tai_khoan->is_deleted = 1;
        $tai_khoan->save();
        return redirect()->route('account.index');
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

    public function search(Request $request)
    {
        $tai_khoan = Account::where([ ['Email','like','%'.$request->inputAccount.'%'],['is_deleted', '=', '0'] ])
                    ->orwhere([ ['Ho_Ten','like','%'.$request->inputAccount.'%'],['is_deleted', '=', '0'] ])
                    ->orwhere([ ['So_Dien_Thoai','like','%'.$request->inputAccount.'%'],['is_deleted', '=', '0'] ])
                    ->orwhere([ ['Dia_Chi','like','%'.$request->inputAccount.'%'],['is_deleted', '=', '0'] ])
                    ->paginate(10);
        return View('admin.pages.Account.account', ['tai_khoan'=>$tai_khoan]);
    }
}
