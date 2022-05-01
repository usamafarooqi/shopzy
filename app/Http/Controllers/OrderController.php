<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrderByGuest;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'billingFirstName' => 'required',
            'billingLastName' => 'required',
            'billingAddress' => 'required',
            'billingCity' => 'required',
            'billingCountry' => 'required',
            'billingEmail' => 'required',
            'billingPhoneNumber' => 'required',
        ]);
        
        
        $cart = session()->has('cart') ? session()->get('cart') : null;

        if($cart == null)
        {
            return back();
        }
        //dd($cart);

        if($request->shippingFirstName != null)
        {
            $user = [
                'billing_first_name' => $request->billingFirstName,
                'billing_last_name' => $request->billingLastName,
                'billing_email' => $request->billingEmail,
                'billing_phone_no' => $request->billingPhoneNumber,
                'billing_address' => $request->billingAddress,
                'billing_city' => $request->billingCity,
                'billing_country' => $request->billingCountry,
                'billing_post_code' => $request->billingPostCode,


                'shipping_first_name' => $request->shippingFirstName,
                'shipping_last_name' => $request->shippingLastName,
                'shipping_email' => $request->shippingEmail,
                'shipping_phone_no' => $request->shippingPhoneNumber,
                'shipping_address' => $request->shippingAddress,
                'shipping_city' => $request->shippingCity,
                'shipping_country' => $request->shippingCountry,
                'shipping_post_code' => $request->shippingPostCode,

               
            ];
        }
        else
        {
            $user = [
                'billing_first_name' => $request->billingFirstName,
                'billing_last_name' => $request->billingLastName,
                'billing_email' => $request->billingEmail,
                'billing_phone_no' => $request->billingPhoneNumber,
                'billing_address' => $request->billingAddress,
                'billing_city' => $request->billingCity,
                'billing_country' => $request->billingCountry,
                'billing_post_code' => $request->billingPostCode,
            ];
        }

        DB::beginTransaction();

        $total = 0;
        if(session('cart') !=null)
        {
            foreach (session('cart') as $id => $item)
            {
                $sub_total =$item['price'] * $item['quantity']; 
                $total += $sub_total;
             
            }
        }

        $customer = OrderByGuest::create($user);
        
        $create_order = [
            'order_by_guest_id' => $customer->id,
            'total_price' => $total,
           
        ];
        
        $order = Order::create($create_order);

        if($cart != null)
        {
            foreach($cart as $cart)
            {
                $order_detail = [
                    'product_id' => $cart['id'],
                    'order_id' => $order->id,
                    'quantity' => $cart['quantity'],
                    'price' => $cart['price'],
                    'image' => $cart['image'],

                ];

                $saveOrderDetail = OrderDetail::create($order_detail);
            }
        }

        if($user && $order && $saveOrderDetail)
        {
            DB::commit();
            $request->session()->forget('cart');
            return redirect()->route('frontend.index')->with('success','Your Order Has Place Successfully');
        }
        else
        {
            DB::rollBack();
            return redirect()->route('checkout.page');
        }


    }
   
    
}
