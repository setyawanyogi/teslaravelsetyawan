<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Book;
use App\Borrow;
use App\User;
use App\Status;
use Alert;

class BorrowController extends Controller
{
    public function pinjamindex(){

    	$borrow = DB::table('borrows')
    				->join('users','borrows.member_id','=','users.id')
    				->join('books','borrows.book_id','=','books.id')
    				->join('status','borrows.status_id','=','status.id')
    				->select('borrows.*','books.*','users.*','status.*')
    				->where('borrows.status_id','=','1')
    				->get();
    	return view('peminjamanindex',['daftarborrow'=>$borrow]);

    }


 	public function pengembalianindex(){

    	$borrow = DB::table('borrows')
    				->join('users','borrows.member_id','=','users.id')
    				->join('books','borrows.book_id','=','books.id')
    				->join('status','borrows.status_id','=','status.id')
    				->select('borrows.*','books.*','users.*','status.*')
    				->where('borrows.status_id','=','2')
    				->get();
    	return view('pengembalianindex',['daftarborrow'=>$borrow]);

    }
}
