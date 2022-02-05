<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomesuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('superadmin.cpanel.home');

    }

    public function setting(Request $request){
        return view('superadmin.cpanel.setting.setting');

    }

    public function settingvendor(Request $request){
        return view('storepanel.setting.setting');

    }
    /**]]]]
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function addstore()
    {
        return view('superadmin.cpanel.storepanel.add');

    }


    public function addcategory()
    {
        return view('superadmin.cpanel.category.add');

    }


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
    public function update(Request $request)
    {


        $User =User::find(\auth::user()->id);
        if(isset($request->name)) {

            $User->name = $request->name;

        }
        if(isset($request->email)) {

            $User->email = $request->email;
        }


                if(isset($request->discount_value)) {
                    $User->is_sale  = 1;


                    $User->discount_value  = $request->discount_value ;

                }


                    if(isset($request->password)){
            $User->password =  \Hash::make($request->password);

        }
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
                $User->image =$new_au;

            }
        $User->update();

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
        //
    }
}
