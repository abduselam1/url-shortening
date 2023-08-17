<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
/As the description provides To create url shortner The user must authenticate to the system
/So I implemented API authentication using sanctum
/when the user authenticate usin our end point we will send them a token 
/then they have to use it on bearer token in authorization header
/
*/
Route::post('login', [AuthController::class, 'login'])->name('api.login');
Route::post('register', [AuthController::class, 'register'])->name('api.register');


Route::group(['middleware'=>'auth:sanctum'],function(){

    Route::post('logout',[AuthController::class,'logout'])->name('api.logout');

    Route::get('urls',[UrlController::class,'index'])->name('urls.index');
    Route::post('urls',[UrlController::class, 'store'])->name('urls.store');
    Route::delete('urls/{url}',[UrlController::class,'destroy'])->name('urls.destroy');

});
