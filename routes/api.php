<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//create
Route::post('/opiela/52205/create', [PeopleController::class,'store']);
//update
Route::put('/opiela/52205/update', [PeopleController::class,'edit']);
//delete
Route::delete('/opiela/52205/delete', [PeopleController::class,'delete']);
//get
Route::get('/opiela/52205/{request}', [PeopleController::class,'read']);
//get all
Route::get('/opiela/52205/', [PeopleController::class,'index']);
