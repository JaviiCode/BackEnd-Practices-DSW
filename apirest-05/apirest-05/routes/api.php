<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'javiigm'], function(){
    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('posts', PostsController::class);
});
