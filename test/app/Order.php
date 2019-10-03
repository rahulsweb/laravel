<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['order_code','user_id'];
    public function users()
    {
        $this->belongsTo(User::class);
    }
}
