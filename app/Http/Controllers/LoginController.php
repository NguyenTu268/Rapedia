<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;
use DB;

class LoginController extends Controller
{
    //
	public function getLogin(){
		return view('./login');
	}
	public function postLogin(Request $request){
		
		// Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
			$username = $request->input('username');
			$password = $request->input('password');
			$getlogin = DB::table('users')->where('username', $username)->where('password', $password)->first();

			if ($getlogin) {
				$getrole = $getlogin->role;
				if ($getrole == 1) {
					return redirect('admin');
				} else {
					Session::put('username', $getlogin->username);
					return redirect('home');
				}
				
			} else {

				return redirect('login');
			}
		
	}

	public function logout()
	{
		# code...
		Session::flush();
		return redirect('login');
	}

	
}


