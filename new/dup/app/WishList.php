<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
 /**
     * The database table used by the model.
     * its a WishList Model updating the for add  and remove
     * manage products wishlist  related to the WishList Model
     *
     * @var string
     */


    protected $table = 'user_wish_lists';
    //
    protected $fillable = ['user_id','product_id'];

    //relation with products table Wishlist Class

    public function products()
{
    return $this->belongsTo(Product::class,'product_id');
}
   //relation with users table Wishlist Class
public function users()
{
    return $this->belongsTo(User::class,'user_id');
}

}
