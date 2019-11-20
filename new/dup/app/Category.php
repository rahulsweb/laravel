<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Category extends Model
{
    /**
     * The database table used by the model.
     * Category Model represent categories table using 
     * relationship products
     * @var string
     */
    protected $table = 'categories';
 

   

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
    protected $fillable = ['name','parent_id','deleted_at'];


    //parent category id our categories 
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
       
    }
     //child category id our categories 
    public function child()
    {
        return $this->hasMany(Category::class,'parent_id');
       
    }
      //category related products 
    public function products()
    {
        return $this->belongsToMany(Product::class,'category_product')->withTimestamps();
       
    }

  

}
