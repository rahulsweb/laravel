<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCartDetail extends Model
{
    //
    protected $table = 'order_cart_details';
    protected $fillable = ['order_id','product_id','qty','total','images','total_cart','total_qty','category_name'];




public function products()
{
    return $this->belongsTo(Product::class,'product_id');
}
  

}
