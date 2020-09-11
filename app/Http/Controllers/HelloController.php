<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
	public function index(Request $request){
 
		return view('hello.index', ['msg'=>'フォームを入力.']);
	}

	public function post(Request $request)
	{

                $rule = [ 
                        'name' => 'required',
                      //  'mail' => 'email',
                        'age' => 'numeric|between:0,150',
                ];          	
		 $this->validate($request, $rule);
		return view('hello.index', ['msg'=>'正しく入力されました。']);
	}
}
