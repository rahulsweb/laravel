<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    //
   /**
     * The database table used by the model.
     * its a ProductAttribute Model updating the for add  and remove
     * manage products  related to the Product Model 
     *
     * @var string
     */
    protected $table = 'product_attributes';

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
    protected $fillable = ['color', 'quantity','product_id'];


    //relation with products table ProductAttribute Class
    public function product()
    {
        return $this->belongsTo(Product::class);
       
    }

}
