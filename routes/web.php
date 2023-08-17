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

Route::get('test',function(){
    // $url = Url::where('slug','asdfa')->first();
    // if(!$url){

    //     return 'hello';
    // }
    // return 'nope';
    
});

Route::get('/{url}',[UrlController::class,'redirect']);
