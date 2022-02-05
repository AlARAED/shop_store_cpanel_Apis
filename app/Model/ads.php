<?php

namespace App\model;
use App\Model\Category;
use App\User;

use Illuminate\Database\Eloquent\Model;

class ads extends Model
{

    protected $guarded = array();
    public function StoreName(){
        return User::where('id',$this->user_id)->first();
    }
}
