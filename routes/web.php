<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::resource('/home',HomeController::class);
Route::get('/test',function(){
    return view('test');
});

Route::get('/register',function(){
    return view('registration');
})->name('register');
