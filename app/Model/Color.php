<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }

}
