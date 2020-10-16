<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use DB;
use Alert;

class BooksController extends Controller
{
    public function index(){

    	$book = DB::table('books')
    	->join('category_book','books.kategori_id', '=', 'category_book.id')
    	->select('books.*', 'category_book.nama_kategori')
    	->get();

    	return view ('booksindex', ['daftarbuku'=> $book]);


    }

    public function create(){

    	$category = Category::All();

    	return view('bookscreate', ['daftarkategori'=> $category]);
    }

    public function store(Request $request){
    	
    	$this->validate($request,[
    		'judul_buku'=>'required',
    		'nama_pengarang'=>'required',
    		'kategori_id'=>'required',
    	]);

    	$book = DB::table('books')->insert([
    		'judul_buku'=> $request->get('judul_buku'),
    		'nama_pengarang'=> $request->get('nama_pengarang'),
    		'kategori_id'=> $request->get('kategori_id')
    	]);

    	Alert::success('Data Berhasil Dimasukkan');
    	return redirect('buku');
    }

    public function edit($id){
    	$book = Book::find($id);
    	$category= Category::all();

    	return view ('booksupdate',['daftarbuku'=> $book, 'daftarkategori'=>$category]);

    }

    public function update(Request $request, $id){
    	$this->validate($request,[
    		'judul_buku'=> 'required',
    		'nama_pengarang'=> 'required',
    	]);

    	$book = Book::find($id);
    	$book->judul_buku = $request->judul_buku;
    	$book->nama_pengarang = $request->nama_pengarang;
    	$book->kategori_id = $request->kategori_id;
    	$book->save();
    	Alert::success('Data Berhasil Dimasukkan');
    	return redirect('buku');

    }

    public function delete($id){
    	$book = Book::find($id);
    	$book->delete();
    	Alert::success('Data Berhasil Dihapus');
        return redirect('buku');
    }
}
