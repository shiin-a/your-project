<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
public function index(){
return view('index');
}

public function post(Request $request)
{
$msg = $request->msg;
$data = [
'msg'=>'Hello ' . $msg .' san',
];
return view('index', $data);
}
}
