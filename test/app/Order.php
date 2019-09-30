<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

       /**
     * The database table used by the model.
     *
     * @var string
     */


    /**
    * The database primary key value.
    *
    * @var string
    */


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total','status'];
}
