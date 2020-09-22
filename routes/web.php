<?php

use App\Http\Middleware\HelloMiddleware;
use App\Http\Middleware\HamsterMiddleware;
use App\Http\Middleware\Dog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
echo "web.php<br />";
Route::get('hello',  'HelloController@index');
Route::post('hello',  'HelloController@post');
Route::get('error',  'HelloController@error');

