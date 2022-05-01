<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductColor;

class ProductSize extends Model
{
    protected $guarded = [];

    public function productColor()

    {
        return $this->belongsTo('App\ProductColor','product_color_id','id');
        
    }
}
