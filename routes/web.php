<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

// Route::get('login',[ConnectionController::class, 'login']);
// Route::get('logout',[ConnectionController::class, 'logout']);
// Route::get('signin',[ConnectionController::class, 'signin'] );



Route::get('/admin/user/view/{id}', [UserController::class, 'view'])->name('viewuser');;
Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('updateuser');
Route::post('/admin/user/create', [ UserController::class, 'save'] )->name('createuser');
Route::get('/admin/user/create', [UserController::class, 'create'] )->name('adduser');;
Route::get('/admin/user',[UserController::class, 'getAll'])->name('listuser');
Route::post('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('deleteuser');

Route::post('/login',[AuthController::class,'signin'])->name('signin');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/product/view/{id}', [ProductController::class, 'view'])->name('viewproduct');;
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('updateproduct');
Route::post('/product/create', [ ProductController::class, 'save'] )->name('createproduct');
Route::get('/product/create', [ProductController::class, 'create'] )->name('addproduct');;
Route::get('/product', [ProductController::class, 'getAll'])->name('listproduct');
Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('deleteproduct');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
