<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogOrder extends Model
{
    //
    protected $table = 'log_order';
    protected $fillable = ['order_id','status'];
    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
