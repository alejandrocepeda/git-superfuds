<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //

    protected $fillable = [
        'product_id',
        'price',
        'lot_number',
        'quantity',
        'expiration_date'
    ];

    public function products(){
        return $this->hasOne('App\Product','id','product_id');
    }

   
}
