<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 

            'name'=> 'admin ',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('secret'),
            'role_id'=> 1,
            
        ]);
    }
}
