<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
    protected $guarded = [];
    
    public function product()

    {
        return $this->belongsTo('App\Product','product_id','id');
        
    }
}
