<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coupons';

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
    protected $fillable = ['title','code','type','discount'];








    public function orders()
    {
        return $this->hasMany(Order::class);
    }



    public static  function findByCode($code)
    {
         return self::where('code',$code)->first();
    }

    public function discount($total)
    {
         return ($this->discount/100)*$total;
    }

    
}
