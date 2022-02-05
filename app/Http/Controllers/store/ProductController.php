<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use App\model\Block;
use App\model\Governorate;
use App\model\Region;
use Illuminate\Http\Request;
use App\Model\SubCategory;
use App\Model\Product;
use App\Model\Color;
use App\Model\size;
use App\Model\SizeProduct;

use App\Model\ImageProduct;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SubCategories=SubCategory::all();
        $size=size::all();
        return view('storepanel.product.addproduct',compact('SubCategories','size'));

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




    public function allproduct()
    {
        $Product=Product::where('user_id',\auth::user()->id)->get();
        $SubCategories=SubCategory::all();

        return view('storepanel.product.allproduct',compact('Product','SubCategories'));

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
            'price' => 'integer|min:0',

        ],

            [
                'price.integer' => 'السعر يجب ان يكون عدد صحيح ',
                'price.min' => 'لا يمكن ان تكون قيمة السعر اقل من صفر',

            ]);


        $Product = new Product();
        $Product->name_ar = $request->name_ar;
        $Product->name_en = $request->name_en;
        $Product->user_id = \Auth::user()->id;

        $Product->price = $request->price;
        $Product->is_visible = $request->is_visible;
        $Product->is_colored = 1;
        $Product->is_sized = 1;
        $Product->details = $request->details;
        if (isset($request->main_image)) {
            $ext = pathinfo($request->main_image->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" || $ext == "jpeg") {
                $new_au = uniqid() . "." . $ext;


                $path = $request->main_image->move('uploads', $new_au);
            }
        }

        if (isset($new_au))
            if ($new_au != '' or $new_au != null) {
                $Product->main_image = $new_au;

            }


        $Product->save();
        if (isset($request->is_sized)){

            $getsizeReq = $request->sizes;
//        $getsizeReq = implode(',', $getsizeReq);
//        for($i=0; $i <= count($request->sizes); $i++) {
//
//            $size = new SizeProduct();
//            $size->product_id = $Product->id;
//            $size->size_id=$request->sizes[$i];
//            $size->save();
//        }


        foreach ($getsizeReq as $key => $value) {
            $size = new SizeProduct();
            $size->product_id = $Product->id;
            $size->size_id = $value;
            $size->save();
        }

    }


        if (!File::isDirectory(public_path() . '/uploads/products/images/' . date('Y') . '/' . date('m') . '/' . date('d'))) {
            File::makeDirectory(public_path() . '/uploads/products/images/' . date('Y') . '/' . date('m') . '/' . date('d'), 0777, true);
        }


                $getimages=$request->file('files');


                foreach ($getimages as $key=>$file){

                    $_img=null;


                        $_img = time() . '.' . $file->extension();
                        $img = Image::make($file->getRealPath());
                        $img->save(public_path('uploads/products/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $_img));


                    $ImageProduct = new ImageProduct();
                    $ImageProduct->product_id = $Product->id;
                    $ImageProduct->nameimage=$_img;
                    $ImageProduct->save();
                }



                $inputs=$request->all();
        if (isset($request->is_colored)) {

            for ($i = 1; $i <= $request->colorcount; $i++) {

                if (array_key_exists('color' . $i, $inputs)) {
                    $Color = new Color();
                    $Color->product_id = $Product->id;
                    $Color->code = $inputs['color' . $i];
                    $Color->save();
                }

            }


        }

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

    }





    public function discountvalueproduct(Request $request, $id)
    {
        $request->validate([
            'price' => 'integer|min:0',

        ],

            [
                'price.integer' => 'السعر يجب ان يكون عدد صحيح ',
                'price.min' => 'لا يمكن ان تكون قيمة السعر اقل من صفر',

            ]);




        $Product =Product::find($id);

        $Product->price = $request->newprice;

        $Product->ignor_price = $Product->price;
        if (isset($request->is_sale) && $request->is_sale !=null)
            $Product->is_sale = 1;
        else
            $Product->is_sale = 0;

        $Product->update();

        $flash_notification = array('message' => 'تم  تعديل العنصر   بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);



    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    $request->validate([
        'price' => 'integer|min:0',

    ],

        [
            'price.integer' => 'السعر يجب ان يكون عدد صحيح ',
            'price.min' => 'لا يمكن ان تكون قيمة السعر اقل من صفر',

        ]);



        $Product =Product::find($id);
        $Product->name_ar= $request->name_ar;
        $Product->name_en= $request->name_en;

        $Product->price = $request->price;
        if (isset($request->is_visible) && $request->is_visible !=null)
        $Product->is_visible = 1;
        else
            $Product->is_visible = 0;

        $Product->details = $request->details;
        if (isset($request->main_image)) {
            $ext = pathinfo($request->main_image->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "csv" || $ext == "pdf" || $ext == "jfif" ||$ext == "jpeg") {
                $new_au= uniqid() . "." . $ext;


                $path = $request->main_image->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $Product->main_image =$new_au;

            }


        $Product->update();

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
        $Product=Product::where('id',$id)->delete();
        $ImageProduct =ImageProduct::where('product_id',$id)->delete();
        $Color = Color::where('product_id',$id)->delete();



        $flash_notification = array('message' => 'تم  حذف العنصر بنجاح!', 'alert_type' => 'success');
        return redirect()->back()->with('flash_notification', $flash_notification);
    }



    public function readAddress()
    {
        set_time_limit(0);
        $response = file_get_contents('https://api.mirsalapp.com/rest/areas?lang=en');

        $response = json_decode($response);
        $addresses=$response->data;

        foreach ($addresses as $address){
            $name=$address->name;
            $id=$address->id;
            $code=$address->code;
            $gov=new Governorate();
            $gov->gov_id=$id;
            $gov->code=$code;
            $gov->name=$name;
            $gov->save();

            $areas=$address->areas;
            foreach ($areas as $area){
                $name=$area->name;
                $id=$area->id;
                $code=$area->code;
                $reg=new Region();
                $reg->reg_id=$id;
                $reg->code=$code;
                $reg->name=$name;
                $reg->governorates_id=$gov->id;
                $reg->save();

                $blocks=$area->blocks;
                foreach ($blocks as $block){
                    $name=$block->name;
                    $id=$block->id;
                   // $code=$block->code;
                    $block=new Block();
                    $block->block_id=$id;
                    $block->code=$id.'';
                    $block->name=$name;
                    $block->regions_id=$reg->id;
                    $block->save();




                }


            }


        }


        $arr=Array();

    }
}
