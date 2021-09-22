<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
         [  
            'name' => 'jean',
            'email' => 'jean.mg@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456', // password
            'remember_token' => '987654',
            'created_at' => '2021-09-21 13:54:53',
            'updated_at' => '2021-09-21 13:54:54'
         ],
         [  
            'name' => 'jean2',
            'email' => 'jean2.mg@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456', // password
            'remember_token' => '987654',
            'created_at' => '2021-09-21 13:54:53',
            'updated_at' => '2021-09-21 13:54:54'
            
         ],
         [  
            'name' => 'jean3',
            'email' => 'jean3.mg@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456', // password
            'remember_token' => '987654',
            'created_at' => '2021-09-21 13:54:53',
            'updated_at' => '2021-09-21 13:54:54'
            
         ],
    ]);
    }
}
