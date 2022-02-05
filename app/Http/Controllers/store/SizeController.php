<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Size=Size::all()->sortBy("created_at");
        return view('storepanel.product.addsize',compact('Size'));
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
        $Size = new Size();
        $Size->name = $request->name;
        $Size->save();
        $flash_notification = array('message' => 'تم  اضافة عنصر جديد   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
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
        $Size=Size::find($id);
        $Size->name = $request->name;

        $Size->update();

        $flash_notification = array('message' => 'تم  تحديث  بيانات    بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Size=Size::where('id',$id)->delete();
        $flash_notification = array('message' => 'تم  حذف العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }
}
