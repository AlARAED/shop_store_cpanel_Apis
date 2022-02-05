<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    protected $guarded = array();
    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }
    public function size(){
        return $this->belongsTo('App\Model\Size');
    }


}
