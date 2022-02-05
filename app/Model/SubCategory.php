<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class SubCategory extends Model
{
    protected $guarded = array();
    public function CategoryName(){
        return Category::where('id',$this->category_id)->first();
    }

    public function stors()
    {
        return $this->belongsTo('App\User');
    }
}
