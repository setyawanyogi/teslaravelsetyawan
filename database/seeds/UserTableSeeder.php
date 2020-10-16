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
        	'name'=>'Nikolas Saputra',
        	'email'=>'admin@siperpus.com',
        	'password'=>bcrypt('12345678'),
        	'role'=>'admin'
        ]);

        User::create([
        	'name'=>'Dian Sastro',
        	'email'=>'user@siperpus.com',
        	'password'=>bcrypt('12345678'),
        	'role'=>'user'
        ]);
    }
}
