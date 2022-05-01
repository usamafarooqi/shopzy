<?php

use Illuminate\Database\Seeder;
use App\Product;

class AddProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([ 

            'name'=> 'jogger',
            'category_id'=> 1,
            'short_description'=> 'good shoes',
            'long_description'=> 'good ghj shoes',
            'price'=> 1200,
            'discount' =>5,

            
        ]);
    }
}
