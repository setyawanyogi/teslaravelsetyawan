<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use DB;

class BooksController extends Controller
{
    public function index(){

    	$book = DB::table('books')
    	->join('category_book','books.kategori_id', '=', 'category_book.id')
    	->select('books.*', 'category_book.nama_kategori')
    	->get();

    	return view ('booksindex', ['daftarbuku'=> $book]);


    }
}
