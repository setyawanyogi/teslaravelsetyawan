<?php

use Illuminate\Database\Seeder;
use App\Borrow;

class BorrowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Borrow::create([
        	'member_id'=>'2',
        	'book_id'=>'3',
        	'status_id'=>'1'
        ]);

        Borrow::create([
        	'member_id'=>'2',
        	'book_id'=>'2',
        	'status_id'=>'1'
        ]);

        Borrow::create([
        	'member_id'=>'2',
        	'book_id'=>'1',
        	'status_id'=>'2'
        ]);
    }
}
