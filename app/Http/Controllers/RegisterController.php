<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class RegisterController extends Controller
{
    //
	public function getRegister(){
		return view('./login');
	}
	public function postRegister(Request $request){
		$data = array();
		$data['username'] = $request->username;
		$data['email'] = $request->email;
		$data['password'] = $request->password;
		$data['role'] = "0";
		DB::table('users')->insert($data);
		//Session::put('message','Đăng kí tài khoản thành công');
		$a = "dang ki thanh cong";
		return redirect('login')->with('a', $a);
	}
}
