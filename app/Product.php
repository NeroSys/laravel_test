<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title', 'description'
    ];


    public function order()
    {
        return $this->belongsTo(Order::class, 'id');
    }
}
