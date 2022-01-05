<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DLCsController;
use App\Http\Controllers\KillersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('hello', function () {
    return "Hello World";
});
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::group(['middleware'=>'auth:sanctum'],function () {
    // 查詢所有球隊
    Route::get('DLCs', [DLCsController::class, 'api_DLCs']);
    // 修改指定球隊
    Route::patch('DLCs', [DLCsController::class, 'api_update']);
    // 刪除指定球隊
    Route::delete('DLCs', [DLCsController::class, 'api_delete']);
    // 查詢所有球員
    Route::get('killers', [KillersController::class, 'api_killers']);
    // 修改指定球員
    Route::patch('killers', [KillersController::class, 'api_update']);
    // 刪除指定球員
    Route::delete('killers', [KillersController::class, 'api_delete']);


});
