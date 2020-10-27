<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CategoryBookSeeder::class);
    	$this->call(RoleTableSeeder::class);
    	$this->call(BookTableSeeder::class);
      	$this->call(UserTableSeeder::class);
      	$this->call(StatusTableSeeder::class);
        $this->call(BorrowTableSeeder::class);
    }
}
