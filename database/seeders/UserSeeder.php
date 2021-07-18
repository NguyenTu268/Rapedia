<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $data = [
            [
            	'name' => 'giunbabie'
                'email' => 'ndanh.tu@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
            	'name' => 'anhtu1'
                'email' => 'ndatu.19it3@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
            	'name' => 'admin'
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
