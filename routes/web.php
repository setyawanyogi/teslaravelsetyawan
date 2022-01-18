<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=> 'auth'],function(){
	Route::get('home', 'HomeController@index')->name('dashboard');
	//CRUD category
	Route::get('kategori', 'CategoryController@index')->name('daftarkategori');
	Route::get('kategori/tambah', 'CategoryController@create')->name('tambahkategori');
	Route::post('/kategori/store', 'CategoryController@store');
	Route::get('/kategori/edit/{id}', 'CategoryController@edit');
	Route::put('/kategori/update/{id}', 'CategoryController@update');
	Route::get('/kategori/delete/{id}', 'CategoryController@delete');
	//CRUD books
	Route::get('buku', 'BooksController@index')->name('daftarbuku');
	Route::get('buku/tambah', 'BooksController@create')->name('tambahbuku');
	Route::post('/buku/store', 'BooksController@store');
	Route::get('/buku/edit/{id}', 'BooksController@edit');
	Route::put('/buku/update/{id}', 'BooksController@update');
	Route::get('/buku/delete/{id}', 'BooksController@delete');
	//CRUD member
	Route::get('member', 'UserController@index')->name('daftarmember');
	Route::get('/member/edit/{id}', 'UserController@edit');
	Route::put('/member/update/{id}', 'UserController@update');
	//CRUD pinjam
	Route::get('pinjam', 'BorrowController@pinjamindex')->name('daftarpinjam');
	Route::get('pinjam/tambah', 'BorrowController@pinjamcreate')->name('tambahpeminjaman');
	Route::post('/pinjam/store', 'BorrowController@pinjamstore');
	Route::get('/pinjam/edit/{id}', 'BorrowController@edit');
	Route::put('/pinjam/update/{id}', 'BorrowController@update');
	Route::get('/pinjam/delete/{id}', 'BorrowController@delete');

	//CRUD pengembalian
	Route::get('pengembalian', 'BorrowController@pengembalianindex')->name('daftarpengembalian');
});

Route::group(['middleware'=> 'auth'],function(){
	Route::get('home', 'HomeController@index')->name('dashboard');
});