<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Model\Governorate;
use App\Model\Region;
use App\Model\Block;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users=User::all()->sortBy("created_at");
        $Categories=Category::all()->sortBy("created_at");
        $Governorate=Governorate::all()->sortBy("created_at");
        $Region=Region::all()->sortBy("created_at");
        $Block=Block::all()->sortBy("created_at");





        return view('superadmin.cpanel.store.add',compact('Users','Categories','Governorate','Region','Block'));

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],

        [
             'name.unique' => __('The email has already been taken.'),
             'password.min' => __('The password must be at least 8 characters.'),
             'password.confirmed' => __('The password confirmation does not match.'),

        ]);
        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->category_id = $request->category_id;
        $User->governorates_id = $request->governorates_id;
        $User->regions_id = $request->regions_id;
        $User->blocks_id = $request->blocks_id;


        if (isset($request->imagestore)) {
            $ext = pathinfo($request->imagestore->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" ||$ext == "jpeg") {
                $new_au= uniqid() . "." . $ext;


                $path = $request->imagestore->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $User->imagestore =$new_au;

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


        $User->save();

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


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $User =User::find($id);


        $User->name = $request->name;
        $User->email = $request->email;

        if (isset($request->imagestore)) {
            $ext = pathinfo($request->imagestore->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" ||$ext == "jpeg") {
                $new_au= uniqid() . "." . $ext;


                $path = $request->imagestore->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $User->imagestore =$new_au;

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

        $flash_notification = array('message' => 'تم  تعديل العنصر   بنجاح!', 'alert_type' => 'success');
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


    public function blockstore($id)
    {
     $User =User::find($id);
    if($User->is_block==0){

    $User->is_block  = 1;
        }
     else{
    $User->is_block  =0;

      }

        $User->save();

        $flash_notification = array('message' => 'تم  تغيير حالة  الحساب   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }







    public function editpassworduser(Request $request,$id)
    {
        $User =User::find($id);
        $User->password= Hash::make($request->password);
        $User->update();
        $flash_notification = array('message' => 'تم  تغيير كلمة السر   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);

    }




    public function get_reg_by_gov(Request $request)
    {

        $data['cities'] = Region::where("governorates_id", $request->country_id)
            ->get();
        return response()->json($data);


    }


    public function get_block_by_reg(Request $request)
    {

        $data['cities'] = Block::where("regions_id", $request->country_id)
            ->get();
        return response()->json($data);


    }


}
