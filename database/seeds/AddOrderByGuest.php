<?php

use Illuminate\Database\Seeder;
use App\OrderByGuest;
class AddOrderByGuest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderByGuest::create([

            'billing_first_name'=> 'qwerty',
            'billing_last_name'=> 'uiop',
            'billing_email'=>'qwerty@gmail.com',
            'billing_phone_no'=>'03062323234',
            'billing_address'=>'asdfghjk',
            'billing_city'=>'pakpattan',
            'billing_country'=>'Pakistan',

        ]);
    }
}
