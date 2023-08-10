php artisan ser 
<?php

use App\Http\Controllers\HallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
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
/// halls ///
ROute::get('h',[HallController::class,'index'])->name('hall.index');
route::get('c',[HallController::class , 'create'])->name('hall.create');
route::get('s',[HallController::class , 'delete'])->name('hall.delete');
route::get('d',[HallController::class , 'show'])->name('hall.show');
/// resources ///
ROute::get('r',[ResourceController::class,'index'])->name('resources.index');
route::get('rc',[ResourceController::class,'create'])->name('resources.create');
route::get('rs',[ResourceController::class,'delete'])->name('resources.delete');
route::get('rd',[ResourceController::class,'show'])->name('resources.show');