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
	       'age' => 'numeric|between:0,150',
	   ];
	   $messages = [
	       'name.required' => '名前は必ず入力して下さい。',
	       'age.numeric' => '年齢を整数で記入下さい。',
	       'age.between' => '年齢は０～150の間で入力下さい。',
	   ];
	   $validator = Validator::make($request->all(), $rules, $messages);


	   if ($validator->fails()) {
	       return redirect('/hello')
			   ->withErrors($validator)
			   ->withInput();
	   }
           return view('hello.index', ['msg'=>"正しい", ]);
	}
	public function error()
	{

		return view('hello.error', ['msg'=>"正しい", ]);
	}
}
