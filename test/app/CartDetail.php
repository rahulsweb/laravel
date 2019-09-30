<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    //

  /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carts';

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
    protected $fillable = ['name', 'code', 'rate','color','image','qty','product_id','user_id','session_id'];
    

 
    public function product()
    {
        return $this->belongsToMany(Product::class,'product_id','id');
       
    }
    public function user()
    {
        return $this->belongsToMany(User::class,'user_id','id');
       
    }

}
