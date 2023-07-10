<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemSellController;
use App\Http\Controllers\StoreController;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->prefix('items')->name('items.')->group(function () {
    Route::get('/', [ItemSellController::class,'index'])->name('index');
    Route::get('/create',[ItemSellController::class,'create'])->name('create');
    Route::post('/store',[ItemSellController::class,'store'])->name('store');
});

Route::middleware('auth')->prefix('stores')->name('stores.')->group(function () {
    Route::get('/', [StoreController::class,'index'])->name('index');
    Route::get('/create',[StoreController::class,'create'])->name('create');
    Route::post('/store',[StoreController::class,'store'])->name('store');
});

    Route::get('/',[HomeController::class,'mainShop'])->name('shop');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
