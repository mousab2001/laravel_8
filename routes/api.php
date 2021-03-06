<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/new',[\App\Http\Controllers\HistoryController::class,'index']);
Route::post('/edit',[\App\Http\Controllers\HistoryController::class,'editPerson']);
Route::post('/newUser',[\App\Http\Controllers\HistoryController::class,'addPerson']);

