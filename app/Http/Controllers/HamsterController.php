<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HamsterController extends Controller
{
	public function index(){
		return view('index');
	}

	public function indexja()
	{
		return view('index-ja');
	}
}
