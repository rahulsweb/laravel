<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * The database table used by the model.
     *Coupon Model Use to manage Coupons functionality
     *relationship and their operation
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







    //relationship with orders table
    public function orders()
    {
        return $this->hasMany(Order::class);
    }



    //it is static functon of coupon class find code of coupon 
    public static  function findByCode($code)
    {
         return self::where('code',$code)->first();
    }

     //discount method use to decrease discount values related coupons
    public function discount($total)
    {
       
             if($this->qty_left > 0)
         return ($this->discount/100)*$total;
       
         return $total;
    }

     //check coupon expire or not
    public function expire($code)
    {
        $coupon=self::where('code',$code)->first();
        if($coupon->status=='InActive' && $coupon->qty_left < 1)
        return true;
  
        return false;

    }



     //check coupon status active or Inactive
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
