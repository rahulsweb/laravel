<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPaymentDetail extends Model
{
    //
    /**
     * The database table used by the model.
     * its a OrderPaymentDetail Model updating the for add  and remove
     * OrderPaymentDetail products
     *
     * @var string
     */

    protected $table = 'order_payment_details';

    protected $fillable = ['order_id', 'payment_id', 'payment_type', 'status', 'rate', 'total'];

    //relation with orders and OrderPaymentDetail
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    //relation with Product and OrderPaymentDetail
    public function order_carts()
    {
        return $this->belongsToMany(Product::class, 'order_cart_details');
    }

}
