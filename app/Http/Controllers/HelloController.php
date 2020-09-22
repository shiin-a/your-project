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

		   $msg = 'Contorollerindex()';
		   return view('hello.index', ['msg'=>$msg, ]);	
	}

	public function post(Request $request)
	{
	   
	   echo "Controller@post<br />";
	   $rules = [
	       'name' => 'required',
	       'age' => 'numeric',
	   ];
	   $messages = [
	       'name.required' => '名前は必ず入力して下さい。(from HelloController)',
	       'mail.email'  => 'メールアドレスが必要です。(from HelloController)',
	       'age.numeric' => '年齢は整数で記入下さい。(from HelloController)',
	       'age.min' => '年齢はゼロ歳以上で記入下さい。(from HelloController)',
	       'age.max' => '年齢は200歳以下で記入下さい。(from HelloController)',
	   ];
	   $validator = Validator::make($request->all(), $rules, $messages);

	   $validator->sometimes('age', 'min:0', function($input){
	       return !is_int($input->age);
	   });
	   $validator->sometimes('age', 'max:200', function($input){
	       return !is_int($input->age);
	   });
			
	   if ($validator->fails()) {
	       return redirect('/errorhamster')
		   ->withErrors($validator)
		   ->withInput();
	   }
	   return view('hello.index', ['msg'=>'正しく入力されました！']);

	}
	public function hamster()
	{

		return view('hello.hamster', [
	       'name' => 'hamtyan',
	       'msg' => 'I wanted to have a hamster.',
	   ]);
	}
}
