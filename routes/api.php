<?php

use App\Http\Controllers\PersonController;
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
Route
    ::controller(PersonController::class)
    ->prefix("/v1/person")
    ->name("person.")
    ->group(function () {
       Route::get("/fetch", "index"); 
       Route::get("/fetch/{person}", "show"); 
       Route::post("/add", "store");
       Route::put("/update/{person}", "update");
       Route::delete("/delete/{person}", "destroy");
    });