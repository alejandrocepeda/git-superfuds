<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function inventory(){
        return $this->hasOne('App\Inventory','product_id','id');
    }
}
