<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class OrderByGuest extends Model
{
    protected $guarded = [];
   
    public function order()
    {
        return $this->hasOne('App\Order','order_by_guest_id','id');
    }
     
}
