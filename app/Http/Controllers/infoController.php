<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gang;
use App\Models\celebrity;
use App\Models\news;

class infoController extends Controller
{
    //
	public function upload(Request $req)
	{
        # code...

		$req->validate([
			'file' => 'mimes:jpg,png,jpeg| max:2400',
		]);

		$fileModel = new celebrity;

		if($req->file()) {
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$fileModel->name = $req->name;
			$fileModel->presentation = $req->presentation;
			$fileModel->slug = $req->slug;
			$fileModel->content1 = $req->content1;
			$fileModel->image = 'storage/app/public/' . $filePath;
			$fileModel->save();

			return back()
			->with('success','Bài đã được đăng thành công.')
			->with('file', $fileName);
		}
	}

	public function getSingle($slug)
	{
   	# code...
		$inf = celebrity::where('slug', $slug)->first();
		return view('info',['inf'=>$inf]);
	}

	public function viewpost(Request $req)
	{
   	# code...

		$data = celebrity::orderBy('id')->get();
		return view('view-post')->with('data', $data);
	}

	public function edit($id)
	{
		# code...
		$data = celebrity::find($id);
		return view('post')->with('edit', $data);
	}
	public function update(Request $req, $id)
	{
		# code...
		
		if ($req->file) {
			# code...
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$data = celebrity::find($id);
			$data->name = $req->name;
			$data->slug = $req->slug;
			$data->presentation = $req->presentation;
			$data->content1 = $req->content1;
			$data->image = 'storage/app/public/' . $filePath;
			$data->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.')
			->with('file', $fileName);
		} else {
			$data = celebrity::find($id);
			$data->name = $req->name;
			$data->slug = $req->slug;
			$data->presentation = $req->presentation;
			$data->content1 = $req->content1;
			$data->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.');
		}

	}

	public function delete($id)
	{
		# code...
		$data = celebrity::find($id);
		$data->delete();
		return back();
	}

	public function post(Request $req)
	{
   	# code...
		return view('post');
	}
	public function all_post($pageshow, Request $request)
	{
		# code...
			$num_start = $pageshow;

            $countrow = celebrity::count();

            $currentPage = $num_start ? $num_start : 1;

            $pageShow = 4;

            $countPage = ceil($countrow / $pageShow);

            if ($currentPage > $countPage) {
                $currentPage = $countPage;
            }
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $pageStart = ($currentPage - 1) * $pageShow;


            $data = celebrity::orderBy('id', 'desc')->offset($pageStart)->limit($pageShow)->where('name', 'like', $request->search.'%')->get();
			return view('celeb')->with('celeb', $data)->with('currentPage', $currentPage)->with('countPage', $countPage);
	}
	// ---------------------------------------
	public function uploadgang(Request $req)
	{
        # code...

		$req->validate([
			'file' => 'mimes:jpg,png,jpeg| max:2400',
		]);

		$fileModel = new gang;

		if($req->file()) {
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$fileModel->name = $req->name;
			$fileModel->slug = $req->slug;
			$fileModel->content2 = $req->content2;
			$fileModel->image = 'storage/app/public/' . $filePath;
			$fileModel->save();

			return back()
			->with('success','Bài đã được đăng thành công.')
			->with('file', $fileName);
		}
	}

	public function getSinglegang($slug)
	{
   	# code...
		$inf = gang::where('slug', $slug)->first();
		return view('infoGang',['inf'=>$inf]);
	}

	public function viewpostgang(Request $req)
	{
   	# code...
		$data = gang::orderBy('id')->get();
		return view('view-post-gang')->with('data', $data);
	}

	public function editgang($id)
	{
		# code...
		$data = gang::find($id);
		return view('post-gang')->with('edit', $data);
	}
	public function updategang(Request $req, $id)
	{
		# code...
		
		if ($req->file) {
			# code...
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$data = gang::find($id);
			$data->name = $req->name;
			$data->slug = $req->slug;
			$data->presentation = $req->presentation;
			$data->content1 = $req->content1;
			$data->image = 'storage/app/public/' . $filePath;
			$data->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.')
			->with('file', $fileName);
		} else {
			$data = gang::find($id);
			$data->name = $req->name;
			$data->slug = $req->slug;
			$data->presentation = $req->presentation;
			$data->content1 = $req->content1;
			$data->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.');
		}

	}

	public function deletegang($id)
	{
		# code...
		$data = gang::find($id);
		$data->delete();
		return back();
	}

	public function postgang(Request $req)
	{
   	# code...
		return view('post-gang');
	}

	// public function a ()
	// {
	// 	# code...
	// 	$data = infomation::orderBy('id', 'desc')->paginate(5);
	// 	return view('celeb')->with('celeb', $data);
	// }

	public function all_post_gang($pageshow, Request $request)
	{
		# code...
			$num_start = $pageshow;

            $countrow = gang::count();

            $currentPage = $num_start ? $num_start : 1;

            $pageShow = 4;

            $countPage = ceil($countrow / $pageShow);

            if ($currentPage > $countPage) {
                $currentPage = $countPage;
            }
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $pageStart = ($currentPage - 1) * $pageShow;


            $data = gang::orderBy('id', 'desc')->offset($pageStart)->limit($pageShow)->where('name', 'like', $request->search.'%')->get();
			return view('group')->with('gang', $data)->with('currentPage', $currentPage)->with('countPage', $countPage);
	}

	public function allnews($pageshow, Request $request)
	{
		# code...

		$num_start = $pageshow;

            $countrow = news::count();

            $currentPage = $num_start ? $num_start : 1;

            $pageShow = 4;

            $countPage = ceil($countrow / $pageShow);

            if ($currentPage > $countPage) {
                $currentPage = $countPage;
            }
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $pageStart = ($currentPage - 1) * $pageShow;


            $data = news::orderBy('id', 'desc')->offset($pageStart)->limit($pageShow)->where('title', 'like', $request->search.'%')->get();
			return view('news')->with('data', $data)->with('currentPage', $currentPage)->with('countPage', $countPage);
		$data = news::orderBy('id')->get();
		return view('news')->with('data', $data);
	}

	public function news()
	{
		# code...
		return view('post-news');
	}

	public function postnews(Request $req)
	{
        # code...

		$req->validate([
			'file' => 'mimes:jpg,png,jpeg| max:2400',
		]);

		$fileModel = new news;

		if($req->file()) {
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$fileModel->title = $req->title;
			$fileModel->slug = $req->slug;
			$fileModel->presentation = $req->presentation;
			$fileModel->content1 = $req->content1;
			$fileModel->image = 'storage/app/public/' . $filePath;
			$fileModel->save();

			return back()
			->with('success','Bài đã được đăng thành công.')
			->with('file', $fileName);
		}
	}

	public function viewnews()
	{
		# code...
		$data = news::orderBy('id')->get();
		return view('view-news')->with('data', $data);
	}

	public function editnews($id)
	{
		# code...
		$data = news::find($id);
		return view('post-news')->with('edit', $data);
	}
	public function updatenews(Request $req, $id)
	{
		# code...
		
		if ($req->file) {
			# code...
			$fileName = time().'_'.$req->file->getClientOriginalName();
			$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

			$fileModel = news::find($id);
			$fileModel->title = $req->title;
			$fileModel->slug = $req->slug;
			$fileModel->presentation = $req->presentation;
			$fileModel->content1 = $req->content1;
			$fileModel->image = 'storage/app/public/' . $filePath;
			$fileModel->save();
			$fileModel->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.')
			->with('file', $fileName);
		} else {
			$fileModel = news::find($id);
			$fileModel->title = $req->title;
			$fileModel->slug = $req->slug;
			$fileModel->presentation = $req->presentation;
			$fileModel->content1 = $req->content1;
			$fileModel->save();
			return back()
			->with('success','Bài đã sửa đăng thành công.');
		}

	}

	public function deletenews($id)
	{
		# code...
		$data = news::find($id);
		$data->delete();
		return back();
	}
	public function getSinglenews($slug)
	{
   	# code...
		$inf = news::where('slug', $slug)->first();
		return view('infonews',['inf'=>$inf]);
	}

	public function home()
	{
		# code...

		$data = news::orderBy('id', 'DESC')->paginate(4);

		return view('index')->with('news', $data);
	}
}
