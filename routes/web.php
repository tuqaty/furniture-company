php artisan ser 
<?php

use App\Http\Controllers\HallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SaleController;


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

/// departments ///
Route::group(['prefix'=>'dep'],function(){
    route::get('index',[DepartmentsController::class,'index'])->name('ped.index');
    route::get('create',[DepartmentsController::class , 'create'])->name('dep.create');
    route::post('store',[DepartmentsController::class , 'store'])->name('dep.store');
    route::get('delete/{id}',[DepartmentsController::class , 'destroy'])->name('dep.delete');
    route::get('edit/{id}',[DepartmentsController::class , 'edit'])->name('dep.edit');
    route::put('update/{id}',[DepartmentsController::class,'update'])->name('dep.update');    
});

/// oreders ///
Route::group(['prefix'=>'dep'],function(){
    route::get('index',[OrderController::class,'index'])->name('oreder.index');
    route::get('create',[OrderController::class , 'create'])->name('oreder.create');
    route::post('store',[OrderController::class , 'store'])->name('oreder.store');
    route::get('delete/{id}',[OrderController::class , 'destroy'])->name('oreder.delete');
    route::get('edit/{id}',[OrderController::class , 'edit'])->name('oreder.edit');
    route::put('update/{id}',[OrderController::class,'update'])->name('oreder.update');    
});

/// notifications ///
Route::group(['prefix'=>'noti'],function(){
    route::get('index',[NotificationController::class,'index'])->name('noti.index');
    route::get('create',[NotificationController::class , 'create'])->name('noti.create');
    route::post('store',[NotificationController::class , 'store'])->name('noti.store');
    route::get('delete/{id}',[NotificationController::class , 'destroy'])->name('noti.delete');
    route::get('edit/{id}',[NotificationController::class , 'edit'])->name('noti.edit');
    route::put('update/{id}',[NotificationController::class,'update'])->name('noti.update');    
});

/// roles ///
Route::group(['prefix'=>'dep'],function(){
    route::get('index',[RoleController::class,'index'])->name('role.index');
    route::get('create',[RoleController::class , 'create'])->name('role.create');
    route::post('store',[RoleController::class , 'store'])->name('role.store');
    route::get('delete/{id}',[RoleController::class , 'destroy'])->name('role.delete');
    route::get('edit/{id}',[RoleController::class , 'edit'])->name('role.edit');
    route::put('update/{id}',[RoleController::class,'update'])->name('role.update');    
});

/// sales ///
Route::group(['prefix'=>'dep'],function(){
    route::get('index',[SaleController::class,'index'])->name('sale.index');
    route::get('create',[SaleController::class , 'create'])->name('sale.create');
    route::post('store',[SaleController::class , 'store'])->name('sale.store');
    route::get('delete/{id}',[SaleController::class , 'destroy'])->name('sale.delete');
    route::get('edit/{id}',[SaleController::class , 'edit'])->name('sale.edit');
    route::put('update/{id}',[SaleController::class,'update'])->name('sale.update');    
});