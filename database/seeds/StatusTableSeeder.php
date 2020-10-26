<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
        	'nama_status'=>'peminjaman'
        ]);

        Status::create([
        	'nama_status'=>'pengembalian'
        ]);
    }
}
