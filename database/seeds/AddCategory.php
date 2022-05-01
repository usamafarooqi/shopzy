<?php

use Illuminate\Database\Seeder;
use App\Category;

class AddCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ 

            'name'=> 'Men Shoes',
            'description'=> 'good shoes',
            
        ]);
        Category::create([ 

            'name'=> 'Women Shoes',
            'description'=> 'good shoes',
            
        ]);

        Category::create([ 

            'name'=> 'Casual Shoes',
            'description'=> 'good shoes',
            
        ]);

        Category::create([ 

            'name'=> 'Running Shoes',
            'description'=> 'good shoes',
            
        ]);
    }
}
