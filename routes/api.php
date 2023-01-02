<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\StoreController;
use App\Http\Controllers\API\TransectionController;
use App\Http\Controllers\API\ReportController;

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

Route::post('register', [UserController::class, 'register']);
Route::post('login',[UserController::class, 'login']);
Route::post('logout',[UserController::class, 'logout']);


// /api/store/
// /api/store/add

Route::group(['prefix' => 'store', 'middlewar' => 'auth:santum'], function(){
    Route::get('/', [StoreController::class, 'index']);
    Route::post('/add', [StoreController::class, 'add']);
    Route::post('/edit/{id}', [StoreController::class, 'edit']);
    Route::post('/update/{id}', [StoreController::class, 'update']);
    Route::delete('/delete/{id}', [StoreController::class, 'delete']);
});

Route::group(['prefix' => 'transection', 'middlewar' => 'auth:santum'], function(){
    Route::post('/', [TransectionController::class, 'index']);
    Route::post('/add', [TransectionController::class, 'add']);

});

Route::group(['prefix' => 'report', 'middlewar' => 'auth:santum'], function(){ 
    Route::post('/', [ReportController::class, 'index']);
    Route::get('/dashcard', [ReportController::class, 'dashcard']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

