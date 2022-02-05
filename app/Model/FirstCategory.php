<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class FirstCategory extends Model
{
    protected $guarded = array();
    public function CategoryName(){
        return Category::where('id',$this->category_id)->first();
    }
}
