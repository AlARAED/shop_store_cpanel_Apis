<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class ImageProduct extends Model
{
    protected $guarded = array();


    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }




}
