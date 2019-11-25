<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //

      //
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_product';

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

    protected $fillable = ['category_id', 'product_id'];


    public function products()
{
    return $this->belongsTo(Product::class,'product_id');
}
public function product_image()
{
    return $this->belongsTo(ProductImage::class,'product_id');
}

public function categories()
{
    return $this->belongsTo(Category::class,'category_id');
}

}
