<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/register', function () {
//    return view('register');
//});
//Route::get('/', function () {
//    return view('login');
//});
Route::get('/home', function () {
    return view('home');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/admin/category', function () {
    return view('admin.addcategory');
});

route::get('register',[\App\Http\Controllers\signupcontroller::class, 'view'])->name('users.register');
route::post('register',[\App\Http\Controllers\signupcontroller::class, 'register']);

route::get('login',[\App\Http\Controllers\LoginController::class,'view'])->name('Login');
route::post('login',[\App\Http\Controllers\LoginController::class, 'login']);
