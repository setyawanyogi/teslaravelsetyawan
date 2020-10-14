<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Alert;

class CategoryController extends Controller
{
    public function index() {


    	$category = Category::all();

    	return view('categoryindex',['daftarkategori'=>$category]);
    }

    public function create(){

    	return view('categorycreate');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'nama_kategori'=>'required'
    	]);
    	$category = new Category([
            'nama_kategori' => $request->get('nama_kategori')
        ]);
        $category->save();
		Alert::success('Data Berhasil Dimasukkan');
    	return redirect('kategori');

    }

    public function edit($id){
    	$category = Category::find($id);
    	return view('categoryupdate',['daftarkategori'=> $category]);
    }

    public function update(Request $request, $id){
    	$this->validate($request, [
    		'nama_kategori'=>'required'
    	]);

    	$category = Category::find($id);
    	$category->nama_kategori = $request->nama_kategori;
    	$category->save();
    	Alert::success('Data Berhasil Diubah');
    	return redirect('kategori');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('kategori');
    }
}
