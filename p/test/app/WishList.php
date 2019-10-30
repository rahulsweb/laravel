<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $table = 'user_wish_lists';
    //
    protected $fillable = ['user_id','product_id'];

    public function products()
{
    return $this->belongsTo(Product::class,'product_id');
}
public function users()
{
    return $this->belongsTo(User::class,'user_id');
}
public function product_image()
{
    return $this->belongsTo(ProductImage::class,'product_id');
}
}
