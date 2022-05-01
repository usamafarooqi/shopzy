<?php

use Illuminate\Database\Seeder;
use App\Tag;

class AddTag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([ 

            'product_id'=> 1,
            'tag'=> 'bata',
            
        ]);
    }
}
