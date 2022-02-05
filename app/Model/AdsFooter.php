<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AdsFooter extends Model
{
    protected $guarded = array();
    public function StoreName(){
        return User::where('id',$this->user_id)->first();
    }
}
