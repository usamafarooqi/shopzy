<?php

use Illuminate\Database\Seeder;
use App\Order;

class AddOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([

            'order_by_guest_id'=> 1,
            'quantity'=> 6,
            'total_price'=>12000,
            
        ]);
    }
}
