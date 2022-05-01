<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\OrderByGuest;
use App\OrderDetail;

class Order extends Model
{
    protected $guarded = [];

    public function orderByGuest()

    {
        return $this->belongsTo('App\OrderByGuest','order_by_guest_id','id');
        
    }
    public function orderDetail()

    {
        return $this->hasMany('App\OrderDetail','order_id','id');
        
    }
}
