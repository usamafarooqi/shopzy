<?php

use Illuminate\Database\Seeder;
use App\Role;

class AddRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ 

            'name'=> 'admin',
            'description'=> 'only one admin',
            
        ]);
    }
}
