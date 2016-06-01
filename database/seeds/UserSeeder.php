<?php

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
             DB::table('users')->insert([
            'name' => 'Divyanshu',
            'email' => 'divyanshu.up32@gmail.com',
            'password' => bcrypt('hello123'),
        ]);
    }
}
