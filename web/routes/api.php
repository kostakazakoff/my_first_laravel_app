<?php

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

/*
API Routes:
'/' => 'index',
'/real_estates' => 'All real_estates',
'/real_estates/{id}' => 'real_estate with id',
'/real_estates/create' => 'Create real estate',
'/real_estates/put/{id}' => 'Update real estate with id',
'/real_estates/delete/{id}' => 'Delete real estate with id',
*/

Route::get('/real_estates', function() {
    return response()->json(['real_estates']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
