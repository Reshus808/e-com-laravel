<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
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

Route::get("data",[dummyAPI::class, 'getData']);
//Route::get('list', [dummyAPI::class, 'list']);
Route::get('list/{id?}', [dummyAPI::class, 'list']);
Route::post('create', [dummyAPI::class, 'create']);
Route::put('update/{id}', [dummyAPI::class, 'update']);
Route::delete('delete/{id}', [dummyAPI::class, 'delete']);
Route::get('search/{title}', [dummyAPI::class, 'search']);




