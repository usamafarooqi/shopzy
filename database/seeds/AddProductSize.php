<?php

use Illuminate\Database\Seeder;
use App\ProductSize;

class AddProductSize extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create([ 

            'product_color_id'=> 1,
            'size'=> 7,
            'sku'=> 'tyuu',
            'quantity'=> 23,
            
        ]);
    }
}
