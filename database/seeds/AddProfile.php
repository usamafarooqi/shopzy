<?php

use Illuminate\Database\Seeder;
use App\Profile;

class AddProfile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([ 

            'firstName'=> 'Muhammad ahmad',
            'lastName'=> 'raza',
            'contact#'=> 123456789,
            'address'=>'sdfgh fgh',
            'city'=> 'pakpattan',
            'country'=>'Pakistan',
            'user_id'=> 1,
            
        ]);
    }
}
