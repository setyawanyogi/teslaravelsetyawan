<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Panji Aminullah',
        	'email'=>'panjiamin@gmail.com',
        	'password'=>bcrypt('12345678'),
        	'role'=>'admin'
        ]);

        User::create([
        	'name'=>'Hendra Rahma',
        	'email'=>'hendrarahma@gmail.com',
        	'password'=>bcrypt('12345678'),
        	'role'=>'user'
        ]);
    }
}
