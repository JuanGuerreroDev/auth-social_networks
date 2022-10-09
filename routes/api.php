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


// Passport Keys
//Encryption keys generated successfully.
//Personal access client created successfully.
//Client ID: 1
//Client secret: R6u7qx4KYmdCCC2iXBLv4253Ab9UV9c67QpKLbqQ
//Password grant client created successfully.
//Client ID: 2
//Client secret: DY8JJy5JvvWPMWS744YtZpQhsuxoOT3oUkuoZksX
