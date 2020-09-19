<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
	public function index(Request $request){
		echo "Controller@index<br />";

		   $validator = Validator::make($request->query(), [
		       'id' => 'required',
		       'pass' => 'required',
		   ]);
		   if ($validator->fails()) {
		       $msg = 'クエリーに問題があります。';
		   } else {
		       $msg = 'ID/PASSを受け付けました。フォームを入力下さい。';
		   } 
  return view('hello.index', ['msg'=>$msg, ]);	
	}

	public function post(HelloRequest $request)
	{
		echo "Controller@post<br />";

		   $validator = Validator::make($request->all(), [
		       'name' => 'required',
		       'age' => 'numeric|between:0,30',
		   ]);
		   if ($validator->fails()) {
		       return redirect('/hello')
				   ->withErrors($validator)
				   ->withInput();
		   } 
		return view('hello.index', ['msg'=>'正しく入力されました。']);
	}
}
