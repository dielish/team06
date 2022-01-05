<?php


use App\Http\Controllers\DLCsController;
use App\Http\Controllers\KillersController;
use App\Http\Controllers\UserComntroller;
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
    return view('welcome');
});

Route::get('killers/difficulty',[KillersController::class,'difficulty'])->name('killers.difficulty');
Route::get('killers/soso',[KillersController::class,'soso'])->name('killers.soso');
Route::get('killers/er',[KillersController::class,'er'])->name('killers.er');
Route::get('DLCs/price',[DLCsController::class,'price'])->name('DLCs.price');
Route::get('DLCs/p',[DLCsController::class,'p'])->name('DLCs.p');
Route::get('DLCs/rt',[DLCsController::class,'rt'])->name('DLCs.rt');


Route::resource("killers",KillersController::class);
Route::resource("DLCs",DLCsController::class);
