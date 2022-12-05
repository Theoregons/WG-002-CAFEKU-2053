<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');


Auth::routes();

Route::middleware(['owner'])->group(function(){
    Route::resource('menu', MenuController::class);
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::get('order', [OrderController::class,'index'])->name('order');
    Route::post('order', [OrderController::class,'order'])->name('order');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::middleware(['admin'])->group(function(){
    Route::resource('menu', MenuController::class);
    Route::resource('category', CategoryController::class);
});

