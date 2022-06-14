<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class OrderDetail extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function productid(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
