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
    protected $fillable = ['title','code','type','discount','qty','qty_left','status'];








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
       
             if($this->qty_left > 0)
         return ($this->discount/100)*$total;
       
         return $total;
    }

    public function expire($code)
    {
        $coupon=self::where('code',$code)->first();
        if($coupon->status=='InActive' && $coupon->qty_left < 1)
        return true;
  
        return false;

    }



    public function setStatus($code)
    {
        $coupon=self::where('code',$code)->first();
        if($coupon->qty_left < 1)
        {
            $coupon->status="InActive";
            
            return $coupon->update(['status'=>$coupon->status]);
        }
    
    }
    
}
