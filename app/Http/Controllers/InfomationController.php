<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\celebrity;
use Session;
use DB;

class InformationController extends Controller
{
    public function upload(Request $req)
	{
		$req->validate([
			'file' => 'mimes:jpg,png,jpeg| max:2400',
		]);

		$fileModel = new celebrity;

		if($req->file()) {
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$fileModel->name = $req->name;
			$fileModel->idname = $req->idname;
			$fileModel->slug = $req->slug;
			$fileModel->content1 = $req->content1;
			$fileModel->image = 'storage/app/public/' . $filePath;
			$fileModel->save();

			return back()
			->with('success','Thông báo đã được đăng thành công.')
			->with('file', $fileName);
		}
	}

	 public function getSingle($slug)
   {
   	# code...
   // 	$inf = infomation::where('slug', $slug)->first();
   // 	// echo $inf;
   // 	 // return view('info')->with('inf', $inf);
   // 	return view('info',['inf'=>$inf]);
   // }

   public function viewpost(Request $req)
   {
   	# code...
   	$data = celebrity::orderBy('id')->get();
   	return view('view-post')->with('data', $data);
   }
   public function post(Request $req)
   {
   	# code...
   	return view('post');
   }
}
