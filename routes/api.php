<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('register', [UserController::class,'register']);
Route::post('login', [UserController::class,'login']);

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', [UserController::class,'details']);
});
/////After user logs in/////
Route::get('search/{key}', [BookController::class,'search']);
Route::post('rent', [BookController::class,'rent_books']);
Route::post('userbookcount',[BookController::class,'bookcount']);