<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 /**
     * The database table used by the model.
     * its a Product Model updating the for add  and remove
     * manage products  
     *
     * @var string
     */

    protected $table = 'products';

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
    protected $fillable = ['name','rate','qty_left','status'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product')->withTimestamps();
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }
 
    public function product_image()
    {
        
        return $this->hasMany(ProductImage::class);
       
    }
    public function product_attribute()
    {
        return $this->hasOne(ProductAttribute::class);
       
    }



    public function product_cart()
    {
        
        return $this->hasMany(CartDetail::class,'product_id','id');
       
    }

    public function scopeGetProduct($query)
    {
            return $query->get();
          
    } 





 
    public function scopeActive($query)
    {
        return $query->where('qty_left', '<>', 0)->latest()->paginate(6);
    }
    
    public function scopeStatusActive($query,$id)
    {
        return $query->with('categories', 'product_image')->whereHas('categories', function ($query) use ($id) {
    
            $query->where('category_id', '=', $id);
    
        })->where('qty_left', '<>', 0)->get();
    }

    public function scopeCategoryActive($query,$id)
    {
        return $query->with('categories')->whereHas(
            'categories', function ($q) use ($id) {$q->where('category_id', $id);
            })->where('qty_left', '<>', 0)->get();
    }

    public function scopeSearch($query,$keyword)
    {
        
            return $query->where('name', 'LIKE', "%$keyword%")

            ->orwhereHas('categories', function ($query) use ($keyword) {

                $query->where('name', 'LIKE', "%$keyword%");

            })->where('qty_left', '<>', 0)->with('categories')->latest()->paginate(6);
          
    }  
    public function scopeQtyLeft($query)
    {
            return $query->with('categories', 'product_image')->where('qty_left', '<>', 0)->get();
            
    }  

    public function users()
    {
        return $this->belongsToMany(User::class,'user_wish_lists')->withPivot('user_id','product_id');
       
    }
 
    public function order_carts()
    {
        return $this->belongsToMany(Order::class,'order_cart_details')->withPivot('qty', 'total','images','created_at','total_cart','total_qty','category_name');
    }
}




