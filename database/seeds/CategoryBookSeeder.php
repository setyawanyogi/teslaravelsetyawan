<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'nama_kategori'=> 'sejarah'
        ]);
        Category::create([
        	'nama_kategori'=> 'bahasa'
        ]);
        Category::create([
        	'nama_kategori'=> 'hukum'
        ]);
        Category::create([
        	'nama_kategori'=> 'teknologi'
        ]);
        Category::create([
        	'nama_kategori'=> 'komik'
        ]);        
    }
}
