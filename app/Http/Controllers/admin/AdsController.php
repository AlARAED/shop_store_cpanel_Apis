<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ads;
use App\User;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=ads::all()->sortBy("created_at");
        $Users=User::all()->sortBy("created_at");
        return view('superadmin.cpanel.ads.ads',compact('ads','Users'));
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
        $ads = new ads();
        $ads->name = $request->name;
        $ads->user_id = $request->user_id;

        if (isset($request->image)) {
            $ext = pathinfo($request->image->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" ||$ext == "jpeg") {
                $new_au= uniqid() . "." . $ext;


                $path = $request->image->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $ads->image =$new_au;

            }


        $ads->save();

        $flash_notification = array('message' => 'تم  اضافة عنصر    بنجاح!', 'alert_type' => 'success');
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
        $ads =ads::find($id);
        $ads->name = $request->name;
        if (isset($request->image)) {
            $ext = pathinfo($request->image->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" ||$ext == "jpeg") {
                $new_au= uniqid() . "." . $ext;


                $path = $request->image->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $ads->image =$new_au;

            }
        $ads->update();

        $flash_notification = array('message' => 'تم  تحديث  بيانات    بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads=ads::where('id',$id)->delete();
        $flash_notification = array('message' => 'تم  حذف العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }
}
