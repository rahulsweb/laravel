<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = ['order_code','user_id','billing_id','shipping_id','coupon_id'];
    // user order relation 
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    //order payment relation 
    public function orderPayment()
    {
        return $this->hasMany(OrderPaymentDetail::class,'order_id');
    }

    //order cart relation
    public function order_carts()
    {
        return $this->belongsToMany(Product::class,'order_cart_details')->withPivot('qty', 'total','images','created_at','total_cart','total_qty','category_name');
    }

    //log of each order relations
    public function log_order()
    {
        return $this->hasMany(LogOrder::class);
    }
    public function shipping_address()
    {
        return $this->belongsTo(Address::class,'shipping_id');
    }
    public function billing_address()
    {
        return $this->belongsTo(Address::class,'billing_id');
    }

    public function coupons()
    {
        return $this->belongsTo(Coupon::class,'coupon_id');
    }
}   
