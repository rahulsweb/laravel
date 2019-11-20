<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname','state','country','pincode','address1','user_id'];

    //  relationship with users one to many relation 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

//  relationship with  orders 
    public function orders()
    {
        return $this->hasOne(Order::class);
    }
    
}