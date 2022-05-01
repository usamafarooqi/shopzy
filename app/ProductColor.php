<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\ProductSize;

class ProductColor extends Model
{
    protected $guarded = [];

    public function product()

    {
        return $this->belongsTo('App\Product','product_id','id');
        
    }

    public function productSize()
    {
        return $this->hasMany('App\ProductSize','product_color_id','id');
    }
}
