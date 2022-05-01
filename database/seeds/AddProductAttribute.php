<?php

use Illuminate\Database\Seeder;
use App\ProductAttribute;

class AddProductAttribute extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create([ 

            'product_id'=> 1,
            'name'=> 'service',
            'value'=> 'ertyu'
            
        ]);
    }
}
