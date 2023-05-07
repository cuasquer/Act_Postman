<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\SchoolController;
use App\Http\Controllers\Api\DepartamentsController;
use App\Http\Controllers\Api\CountriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('users',[UsersController::class,'index']);
Route::get('users/{id}',[UsersController::class,'show']);
Route::post('users',[UsersController::class,'store']);
Route::put('users/{id}',[UsersController::class,'update']);
Route::delete('users/{id}',[UsersController::class,'destroy']);

Route::get('countries',[CountriesController::class,'index']);
Route::get('countries/{id}',[CountriesController::class,'show']);
Route::post('countries',[CountriesController::class,'store']);
Route::put('countries/{id}',[CountriesController::class,'update']);
Route::delete('countries/{id}',[CountriesController::class,'destroy']);

Route::get('departments',[DepartamentsController::class,'index']);
Route::get('departments/{id}',[DepartamentsController::class,'show']);
Route::post('departments',[DepartamentsController::class,'store']);
Route::put('departments/{id}',[DepartamentsController::class,'update']);
Route::delete('departments/{id}',[DepartamentsController::class,'destroy']);

Route::get('schools',[SchoolController::class,'index']);
Route::get('schools/{id}',[SchoolController::class,'show']);
Route::post('schools',[SchoolController::class,'store']);
Route::put('schools/{id}',[SchoolController::class,'update']);
Route::delete('schools/{id}',[SchoolController::class,'destroy']);