<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductImage;
use App\Tag;
use App\ProductColor;
use App\ProductAttribute;
use App\OrderDetail;

class Product extends Model
{
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function productImage()
    {
        return $this->hasMany('App\ProductImage','product_id','id');
    }

    public function tag()
    {
        return $this->hasMany('App\Tag','product_id','id');
    }

    public function productColor()
    {
        return $this->hasMany('App\ProductColor','product_id','id');
    }

    public function productAttribute()
    {
        return $this->hasMany('App\ProductAttribute','product_id','id');
    }
    public function orderDetail()
    {
        return $this->hasOne('App\OrderDetail','product_id','id');
    }
}
