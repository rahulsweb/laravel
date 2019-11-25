<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //

      //
    /**
     * The database table used by the model.
     * its a ProductCategory Model updating the for add  and remove
     * manage products category  related to the Product Model 
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

  //relation with products table ProductCategory Class
    public function products()
{
    return $this->belongsTo(Product::class,'product_id');
}
  //relation with products table  ProductCategory  Class
public function product_image()
{
    return $this->belongsTo(ProductImage::class,'product_id');
}
  //relation with categories table   ProductCategory Class
public function categories()
{
    return $this->belongsTo(Category::class,'category_id');
}

  //reuseable code using scope concept laravel  scopeProductCategory in ProductCategory class
public function scopeProductCategory($query)
{
    return $query->join('categories', 'categories.id', '=', 'category_product.category_id')
    ->join('products', 'products.id', '=', 'category_product.product_id')
    ->where('products.qty_left', '<>', 0)
    ->select('categories.id', 'categories.name', DB::raw("count(category_product.category_id) as count"))
    ->groupBy('categories.name')
    ->get();
}


}
