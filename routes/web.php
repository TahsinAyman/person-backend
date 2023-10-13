<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return response()->json([
        "message" => "Welcome to Ultimate Backend API",
        "result" => true,
        "statusCode" => Response::HTTP_OK
    ], Response::HTTP_OK);
});