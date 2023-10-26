<?php

use App\Models\Url;
use Hashids\Hashids;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('form',function(){
    return view('form');
});

Route::view('table','table');

Route::view('login','login');

Route::view('register','register');

Route::get('/{url}',[UrlController::class,'redirect']);
