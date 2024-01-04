<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;

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
    return view('welcome');
});
Route::get('/login',[customcontroller::class,'login'])->middleware('alreadyloggedin');
Route::get('/registration',[customcontroller::class,'registration'])->middleware('alreadyloggedin');
Route::post('/register-user',[customcontroller::class,'registerUser'])->name('register-user');
Route::post('/login-user',[customcontroller::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[customcontroller::class,'dashboard'])->middleware('isloggedin');
Route::get('/logout',[customcontroller::class,'logout']);

