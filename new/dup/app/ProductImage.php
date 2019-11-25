<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    /**
     * The database table used by the model.
     * its a ProductImage Model updating the for add  and remove
     * manage products images  related to the Product Model
     *
     * @var string
     */
    protected $table = 'product_images';

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
    protected $fillable = ['name', 'product_id'];

    //relation with products table ProductImage Class
    public function product()
    {
        return $this->belongsToMany(Product::class);

    }

}
