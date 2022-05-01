<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $guarded = [];

    public function product()

    {
        return $this->hasMany('App\Product','category_id','id');
        
    }
}
