php artisan ser 
<?php

use App\Http\Controllers\HallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

Route::get('/', function () {return view('welcome');});

/// halls ///
Route::group(['prefix'=>'hall'],function(){
    route::get('index',[HallController::class,'index'])->name('hall.index');
    Route::get('create',[HallController::class , 'create'])->name('hall.create');
    Route::post('store',[HallController::class , 'store'])->name('hall.store');
    route::get('delete/{id}',[HallController::class , 'destroy'])->name('hall.delete');
    route::get('edit/{id}',[HallController::class , 'edit'])->name('hall.edit');
    Route::put('update/{id}',[HallController::class,'update'])->name('hall.update');
});

/// resources ///
Route::group(['prefix'=>'resource'],function(){
    route::get('index',[ResourceController::class,'index'])->name('resource.index');
    route::get('create',[ResourceController::class,'create'])->name('resource.create');
    route::post('store',[ResourceController::class,'store'])->name('resource.store');
    route::get('delete/{id}',[ResourceController::class,'destroy'])->name('resource.delete');
    route::get('edit/{id}',[ResourceController::class,'edit'])->name('resource.edit');
    route::put('update/{id}',[ResourceController::class,'update'])->name('resource.update');
});

/// products ///
Route::group(['prefix'=>'product'],function(){
    route::get('index',[ProductController::class,'index'])->name('product.index');
    route::get('create',[ProductController::class , 'create'])->name('product.create');
    route::post('store',[ProductController::class , 'store'])->name('product.store');
    route::get('delete/{id}',[ProductController::class , 'destroy'])->name('product.delete');
    route::get('edit/{id}',[ProductController::class , 'edit'])->name('product.edit');
    route::put('update/{id}',[ProductController::class,'update'])->name('product.update');    
});

/// users ///
Route::group(['prefix'=>'user'],function(){
    route::get('index',[UserController::class,'index'])->name('user.index');
    route::get('create',[UserController::class , 'create'])->name('user.create');
    route::post('store',[UserController::class , 'store'])->name('user.store');
    route::get('delete/{id}',[UserController::class , 'destroy'])->name('user.delete');
    route::get('edit/{id}',[UserController::class , 'edit'])->name('user.edit');
    route::put('update/{id}',[UserController::class,'update'])->name('user.update');    
});