<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class AddProductImage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create([
            'product_id' =>1,
        ]);
    }
}
