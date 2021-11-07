<?php

use App\Http\Controllers\ApiAuthenticationController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
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







Route::post('/register',[ApiAuthenticationController::class,'register']);

Route::post('/login',[ApiAuthenticationController::class ,'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/tags',[TagController::class ,'index']);
Route::post('/tags',[TagController::class ,'store']);
Route::put('tags/{id}', [TagController::class,'update']);
Route::delete('tags/{id}',[TagController::class , 'destory']);

});



Route::post('/logout',[ApiAuthenticationController::class,'logout']);


