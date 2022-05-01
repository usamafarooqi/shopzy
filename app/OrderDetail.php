<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class OrderDetail extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id','id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
}
