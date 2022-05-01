<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderByGuest;
use App\OrderDetail;
use App\Product;

class dashboardController extends Controller
{
    public function indexPage()
    {
        return view('dashboard.index');
    }

   
    public function allOrder()
    {
        $orders = Order::all();
      
        //dd($orders);
        return view('dashboard.order.all-order',compact('orders'));
    }

    public function singleOrder($id)
    {
        
        $order = Order::findOrFail($id);
        //dd($order->orderByGuest);
       
        return view('dashboard.order.single-order',compact('order'));
    }
  

}
