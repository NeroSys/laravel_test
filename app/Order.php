<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    
    public function product(){
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function user(){
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
