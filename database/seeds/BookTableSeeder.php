<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	['kategori_id'=>'4',
        	'judul_buku'=>'Membuat Aplikasi IoT:Internet of Things',
        	'nama_pengarang'=>'Hardana & Radian'],
        	[
        	'kategori_id'=>'4',
        	'judul_buku'=>'Guru Ideal di Era Digital',
        	'nama_pengarang'=>'Erwin Widiasworo'
        	],
        	[
        	'kategori_id'=>'3',
        	'judul_buku'=>'Dasar-Dasar Hukum Pidana',
        	'nama_pengarang'=>'Zuleha, S.H, M.H'
        	]
        ]);
    }
}
