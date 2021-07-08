<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Category;
use App\Models\DetailPromotion;
use Carbon\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $khuyen_mai = Promotion::where('is_deleted', 0)->orderBy('Id', 'desc')->paginate(7);
        return View('admin.pages.Promotion.promotion', ['khuyen_mai' => $khuyen_mai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('admin.pages.Promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $get_used = Promotion::where([ ['Trang_Thai','=', 0], ['is_deleted','=', 0] ]);
        //
        $name = $request->file('Banner')->getClientOriginalName();
        if ($request->file('Banner') != null) $pathimg = $request->file('Banner')->move('images', $name);
        else $pathimg = '/admin/images/promotion/';
        //lấy trạng thái
        $datenow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $startdate = $request['Tg_Bat_Dau'];
        $enddate = $request['Tg_Ket_Thuc'];
        if ($enddate < $datenow) $trangthai = 1;
        else if ($startdate > $datenow) $trangthai = 2;
        else $trangthai = 0;
        if ($trangthai == 0 && $get_used->count() > 0)
        {
            $errors = new MessageBag(['create' => ["Có khuyến mãi đang áp dụng. Không thể tạo nữa!"]]);
            return redirect()->route('promotion.create')->withErrors($errors);          
        }
        else 
        {
            $khuyen_mai=Promotion::create([
                'Ten_CTKM'=>$request['Ten_CTKM'],
                'Banner'=>$pathimg,
                'Tg_Bat_Dau'=>$startdate,
                'Tg_Ket_Thuc'=>$enddate,
                'Noi_Dung'=>$request['Noi_Dung'],
                'Link_Chi_Tiet'=>$request['Link_Chi_Tiet'],
                'Trang_Thai'=>$trangthai,
            ]);
            //return dd($datenow);
            return redirect()->route('promotion.index');
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
        $khuyen_mai = Promotion::find($id);
        $noi_dung_khuyen_mai = DetailPromotion::all()->where('Id_Khuyen_Mai', $id);
        $the_loai = Category::all();
        //return dd($noi_dung_khuyen_mai);
        return View('admin.pages.Promotion.edit', $khuyen_mai, ['noi_dung_khuyen_mai'=>$noi_dung_khuyen_mai, 'the_loai'=>$the_loai]);
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
        $get_used = Promotion::where([ ['Trang_Thai','=', 0], ['is_deleted','=', 0] ])->first();
        if ($get_used->count() > 0){
            $used_Id = $get_used->Id;
        }
        //
        $khuyen_mai = Promotion::find($id);
        $name = $request->file('Banner')->getClientOriginalName();
        if ($request->file('Banner') != null) $pathimg = $request->file('Banner')->move('images', $name);
        else $pathimg = $khuyen_mai->Banner;
        //lấy trạng thái
        $datenow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $startdate = $request['Tg_Bat_Dau'];
        $enddate = $request['Tg_Ket_Thuc'];
        if ($enddate < $datenow) $trangthai = 1;
        else if ($startdate > $datenow) $trangthai = 2;
        else $trangthai = 0;
        if ($trangthai == 0 && $used_Id != $id)
        {
            $errors = new MessageBag(['update' => ["Có khuyến mãi đang áp dụng. Không thể tạo nữa!"]]);
            return redirect()->route('promotion.edit', $id)->withErrors($errors);          
        }
        else
        {
            $khuyen_mai->Ten_CTKM = $request['Ten_CTKM'];
            $khuyen_mai->Banner = $pathimg;
            $khuyen_mai->Tg_Bat_Dau = $startdate;
            $khuyen_mai->Tg_Ket_Thuc = $enddate;
            $khuyen_mai->Noi_Dung = $request['Noi_Dung'];
            $khuyen_mai->Link_Chi_Tiet = $request['Link_Chi_Tiet'];
            $khuyen_mai->Trang_Thai = $trangthai;
            $khuyen_mai->save();
            return redirect()->route('promotion.index');
        }
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

    public function delete(Request $request, $id)
    {
        $khuyen_mai = Promotion::find($id);
        $khuyen_mai->is_deleted = 1;
        $khuyen_mai->save();
        return redirect()->route('promotion.index');
    }

    public function search(Request $request)
    {
        $khuyen_mai = Promotion::where([ ['Ten_CTKM','like','%'.$request->inputPromotion.'%'],['is_deleted', '=', '0'] ])
                    ->orderBy('Id', 'desc')->paginate(7);
        return View('admin.pages.Promotion.promotion', ['khuyen_mai'=>$khuyen_mai]);
    }

    public function addpromotiondetail(Request $request)
    {
        $name = $request->file('Banner_The_Loai')->getClientOriginalName();
        if ($request->file('Banner_The_Loai') != null) $pathimg = $request->file('Banner_The_Loai')->move('images', $name);
        else $pathimg = '/admin/images/promotion/';
        $noi_dung=DetailPromotion::create([
            'Id_Khuyen_Mai'=>$request['Id_Khuyen_Mai'],
            'Id_The_Loai'=>$request['The_Loai'],
            'Banner'=>$pathimg,
            'Gia_Tri_Khuyen_Mai'=>$request['Gia_Tri'],
            'Kich_Hoat'=>$request['Kich_Hoat'],
        ]);
        //return dd($datenow);
        return redirect()->back();
    }

    public function editpromotiondetail(Request $request)
    {
        $id = $request['Id_NDKM'];
        $noi_dung = DetailPromotion::find($id);
        $name = $request->file('Banner_The_Loai')->getClientOriginalName();
        if ($request->file('Banner_The_Loai') != null) $pathimg = $request->file('Banner_The_Loai')->move('images', $name);
        else $pathimg = $noi_dung->Banner;
        $noi_dung->Id_The_Loai = $request['The_Loai'];
        $noi_dung->Banner = $pathimg;
        $noi_dung->Gia_Tri_Khuyen_Mai = $request['Gia_Tri'];
        $noi_dung->Kich_Hoat = $request['Kich_Hoat'];
        $noi_dung->save();
        //return dd($datenow);
        return redirect()->back();
    }

    public function delpromotiondetail($id)
    {
        $noi_dung = DetailPromotion::find($id);
        $noi_dung->delete();
        //return dd($datenow);
        return redirect()->back();
    }
}
