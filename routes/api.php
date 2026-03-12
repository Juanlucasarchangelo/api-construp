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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'produtos', 'middleware' => ['token']], function () {
    Route::get('/listar', [App\Http\Controllers\Produtos::class, 'index']);
    Route::post('/criar', [App\Http\Controllers\Produtos::class, 'criar']);
    Route::put('/editar/{id}', [App\Http\Controllers\Produtos::class, 'editar']);
    Route::delete('/excluir/{id}', [App\Http\Controllers\Produtos::class, 'excluir']);
});
