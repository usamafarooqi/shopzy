<?php

use Illuminate\Database\Seeder;
use App\ProductColor;

class AddProductColor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColor::create([ 

            'product_id'=> 1,
            'color'=> 'red',
            
            
        ]);
    }
}
