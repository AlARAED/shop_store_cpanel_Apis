<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;


class ProductCtontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    public function getproduct($id)
    {
        $Product=Product::where('id',$id)->with('images','sizes','colors')->where('is_visible',1)->first();
        $status = true;
        $success['items'] = $Product;
        return apiSuccess($success);
    }

    public function Getlast20product()
    {
        $Product=Product::latest()->where('is_visible',1)->limit(20)->get();
        $status = true;
        $success['items'] = $Product;
        return apiSuccess($success);
    }

    public function allproductByStore($idstore)
    {
        $Product=Product::where('user_id',$idstore)->where('is_visible',1)->get();
        $status = true;
        $success['items'] = $Product;
        return apiSuccess($success);
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





    public function checkout(Request $request)
    {

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
