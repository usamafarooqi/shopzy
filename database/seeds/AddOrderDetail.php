<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;

class AddOrderDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([

            'product_id'=> 1,
            'order_id'=>1,
            'quantity'=> 12,
            'price'=> 2000,

        ]);
    }
}
