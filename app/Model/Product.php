<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;
use App\Model\ImageProduct;
use App\Model\SizeProduct;




class Product extends Model
{
    protected $guarded = array();
    public function SubCategoryName(){
        return SubCategory::where('id',$this->sub_category_id)->first();
    }


    public function stors()
    {
        return $this->belongsTo('App\User');
    }


    public function images()
    {
        return $this->hasMany('App\Model\ImageProduct');
    }


    public function sizes()
    {
        return $this->hasMany('App\Model\SizeProduct')->with('size');
    }

    public function colors()
    {
        return $this->hasMany('App\Model\Color');
    }
}
