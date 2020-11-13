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

    public function pinjamcreate(){

        $user = User::all();
        $book = Book::all();
        $status = Status::all();

    	return view('peminjamancreate',['daftaruser'=>$user, 'daftarbuku'=>$book,'daftarstatus'=>$status]);
    }

    public function pinjamstore(Request $request){
        $this->validate($request,[
            'member_id'=>'required',
            'book_id'=>'required',
            'status_id'=>'required',
        ]);

        $borrow = Borrow::create([
            'member_id'=>$request->get('member_id'),
            'book_id'=>$request->get('book_id'),
            'status_id'=>$request->get('status_id'),
        ]);
        $borrow->save();

        Alert::success('Data Berhasil Dimasukkan');
        return redirect('pinjam');
    }
}
