<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SubCategory;
use App\Model\Category;
use App\Model\FirstCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $Categories=Category::all()->sortBy("created_at");
        $subCategories=SubCategory::all()->sortBy("created_at");
        $FirstCategory=FirstCategory::all()->sortBy("created_at");





        return view('storepanel.subcategory.add',compact('Categories','subCategories','FirstCategory'));


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
        $SubCategory = new SubCategory();
        $SubCategory->name_ar = $request->name_ar;
        $SubCategory->name_en = $request->name_en;
        $SubCategory->category_id = \auth::user()->category_id;
        $SubCategory->user_id =  \Auth::user()->id;
        $SubCategory->save();

        $flash_notification = array('message' => 'تم  اضافة عنصر جديد   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }


    public function viewsubcategory(Request $request, $id)
    {
        $SubCategory =FirstCategory::find($id);

    $SubCatego = new SubCategory();
    $SubCatego->name_ar = $SubCategory->name_ar;
    $SubCatego->name_en = $SubCategory->name_en;
    $SubCatego->category_id = $SubCategory->category_id;
    $SubCatego->user_id = \Auth::user()->id;
    $SubCatego->save();
        $flash_notification = array('message' => 'تم    تغيير الحالة بنجاح!', 'alert_type' => 'success');
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
        $SubCategory =SubCategory::find($id);
        $SubCategory->name_ar = $request->name_ar;
        $SubCategory->name_en = $request->name_en;
        $SubCategory->update();

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

        $SubCategory=SubCategory::where('id',$id)->delete();
        $flash_notification = array('message' => 'تم  حذف العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }
}
