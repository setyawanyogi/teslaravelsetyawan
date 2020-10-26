<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use Alert;

class UserController extends Controller
{
    public function index(){

    	$data = DB::table('users')
    			->join('role', 'role_id', '=', 'role.id')
    			->select('users.*','role.role')
    			->get();

    	return view('membersindex',['daftarmember'=>$data]);

    }

    public function edit($id){
    	$user = User::find($id);
    	$role = Role::all();

    	return view('membersupdate',['daftarmember'=>$user,'daftarrole'=>$role]);
    }

    public function update(Request $request, $id){
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    		'address'=>'required',
    		'role_id'=>'required'
    	]);

    	$member = User::find($id);
    	$member->name = $request->name;
    	$member->email = $request->email;
    	$member->phone = $request->phone;
    	$member->address = $request->address;
    	$member->role_id = $request->role_id;
    	$member->save();
    	Alert::success('Data Berhasil Dimasukkan');
    	return redirect('member');

    }
}
