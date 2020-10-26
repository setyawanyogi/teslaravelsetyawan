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
            'phone'=>'081233334444',
            'address'=>'Jl. Pattimura No.3',
        	'role_id'=>'1'
        ]);

        User::create([
        	'name'=>'Dian Sastro',
        	'email'=>'user@siperpus.com',
        	'password'=>bcrypt('12345678'),
            'phone'=>'081244445555',
            'address'=>'Jl. Soekarno No.8',
        	'role_id'=>'2'
        ]);
    }
}
