<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogOrder extends Model
{
    //manage log information related to orders table
    protected $table = 'log_order';
    protected $fillable = ['order_id','status'];

    //relation with Order::class log order model
    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
