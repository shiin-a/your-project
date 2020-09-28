<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Debugbar;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
	public function index(Request $request){
		echo "Controller@index2<br />";
echo $_ENV["DB_DATABASE"];
//   \Debugbar::error('Error!');
//   \Debugbar::warning('Watch out…');
//   \Debugbar::addMessage('Another message', 'mylabel');

   $items = DB::select('select * from persons');
   return view('hello.index', ['items' => $items]);


//  		   $msg = 'Contorollerindex()';
//  		   return view('hello.index', ['msg'=>$msg, ]);


//  $file = 'people.txt';
//  // Open the file to get existing content
//  $current = file_get_contents($file);
//  // Append a new person to the file
//  $current .= "John Smith\n";
//  // Write the contents back to the file
//  file_put_contents($file, $current);










	
	}

	public function post(Request $request)
	{
	   
	  echo "Controller@post<br />";

	   $rules = [
	       'name' => 'required',
	       'age' => 'numeric',
	   ];
	   $messages = [
	       'name.required' => '名前は必ず入力して下さい。',
	       'age.numeric' => '年齢を整数で記入下さい。',
	       'age.between' => '年齢は0~200の間で入力下さい。',
	   ];
	   $validator = Validator::make($request->all(), $rules, $messages);

           $validator->sometimes('age', 'min:0', function($input){
               return !is_int($input->age);
           });
           $validator->sometimes('age', 'max:200', function($input){
               return !is_int($input->age);
           });
	   if ($validator->fails()) {
	       return redirect('/error')
			   ->withErrors($validator)
			   ->withInput();
	   }
           return view('hello.index', ['msg'=>"正しい", ]);
	}
	public function error()
	{

		return view('hello.error', ['msg'=>"正しくない", ]);
	}
}
