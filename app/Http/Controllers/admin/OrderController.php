<?php

namespace App\Http\Controllers\admin;
use App\Models\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->viewprefix='admin.pages.OrderManagement.';
        $this->viewnamespace='admin/pages/OrderManagement';
    }
    public function index()
    {
        //
        $don_hang=Order::all();
        return view($this->viewprefix.'ordermanagement',compact('don_hang'));
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
        $don_hang= Order::find($id);//publishinghouse tên model
        return view($this->viewprefix.'edit')->with('don_hang', $don_hang);
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
        $don_hang = Order::find($id);
        $data= $request->validate([
            'Trang_Thai' => 'required',
        ]);
       
        if($don_hang->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('quan-ly-don-hang.index');
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
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('quan-ly-don-hang.index');
       
        
    }
}
