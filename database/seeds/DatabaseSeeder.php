<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AddRole::class);
        $this->call(AddUser::class);
        $this->call(AddProfile::class);
        $this->call(AddCategory::class);
        $this->call(AddProduct::class);
        $this->call(AddTag::class);
        $this->call(AddProductColor::class);
        $this->call(AddProductSize::class);
        $this->call(AddProductAttribute::class);
        $this->call(AddProductImage::class);
        $this->call(AddOrder::class);
        $this->call(AddOrderDetail::class);
        $this->call(AddOrderByGuest::class);

        
    }
}
