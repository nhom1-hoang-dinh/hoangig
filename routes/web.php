<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UserController;


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



Auth::routes(['register' => false]);

Route::get('/register', [UserController::class, 'dangky']);
Route::post('/register', [UserController::class, 'postdangky']);
Route::prefix('user')->group(function () {
	Route::get('/logout', [UserController::class,'logout']);
	Route::get('/hoso', [UserController::class,'hoso'])->middleware('auth');
	Route::post('/hoso', [UserController::class,'posthoso']);

});

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('intoblog/{id}', [HomeController::class, 'intoblog']);
Route::get('listpost', [HomeController::class, 'listpost']);

Route::get('/product/{id}',[ProductController::class, 'show'])->where('id','[0-9]+');
Route::get('/listproduct/{type?}',[ProductController::class, 'listproduct'])->where('type','[0-9]+');

Route::prefix('admin')->group(function () {
	Route::get('login', [AdminController::class,'getlogin']);
	Route::post('postlogin', [AdminController::class,'postlogin']);

	Route::get('/', [AdminController::class,'index']);
	Route::get('/product', [AdminController::class,'showlistproduct']);

	Route::get('/addproduct',[AdminController::class,'addproduct']);
	Route::post('/postaddproduct/{i}',[AdminController::class,'postaddproduct']);

	Route::get('/post', [AdminController::class,'showlistpost']);
	Route::get('/addpost', [AdminController::class,'addpost']);
	Route::post('/addpost', [AdminController::class,'postaddpost']);


});


Route::prefix('shopping')->group(function () {
	Route::get('/',[ShoppingController::class,'index']);
	Route::POST('/add',[ShoppingController::class,'add']);
	Route::get('/remove/{id}',[ShoppingController::class,'remove']);
	Route::POST('/update',[ShoppingController::class,'update']);
	Route::get('/pay',[ShoppingController::class,'pay'])->middleware('auth');
	Route::get('/payfinish',[ShoppingController::class,'payfinish'])->middleware('auth');
	Route::get('/history',[ShoppingController::class,'history'])->middleware('auth');
	Route::get('/introhistory/{id}',[ShoppingController::class,'introhistory'])->middleware('auth');
});

