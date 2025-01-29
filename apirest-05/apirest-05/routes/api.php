<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('registrar', function () {

    $admin=User::where('email','admin@email.com')->first();
    if(!$admin){
    // Administrador
    $admin = new User();
    $admin->name = "Administrador";
    $admin->email = 'admin@email.com';
    $admin->password = Hash::make('1234');
    $admin->save();
    }

    $adminToken = $admin->createToken('admin-token', ['create', 'update', 'delete']);

    $actualizador=User::where('email','actualizador@email.com')->first();
    if(!$actualizador){
    // Actualizador
    $actualizador = new User();
    $actualizador->name = "Actualizador";
    $actualizador->email = 'actualizador@email.com';
    $actualizador->password = Hash::make('1234');
    $actualizador->save();
    }
    $updateToken = $actualizador->createToken('actualizador-token', ['update']);

    $visor=User::where('email','visor@email.com')->first();
    if(!$visor){
    // Visor
    $visor = new User();
    $visor->name = "Visor";
    $visor->email = 'visor@email.com';
    $visor->password = Hash::make('1234');
    $visor->save();
    }
    $readToken = $visor->createToken('visor-token', ['read']);

    return [
        'admin' => $adminToken->plainTextToken,
        'actualizador' => $updateToken->plainTextToken,
        'visor' => $readToken->plainTextToken
    ];
});

Route::group(['prefix' => 'javiigm', 'middleware' => 'auth:sanctum'], function(){
    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('posts', PostsController::class);
});


