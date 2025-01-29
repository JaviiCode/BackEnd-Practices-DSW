<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsuarioCollection;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return new UsuarioCollection($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        /*$usuario = new Usuario($request->all());
        $usuario->save();
        return new UsuarioResource($usuario);*/
        return new UsuarioResource(Usuario::Create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $filtroPosts = request()->query('posts');

        if($filtroPosts){
            return new UsuarioResource($usuario->loadMissing('posts.categoria'));
        }

        return new UsuarioResource($usuario);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $actualizado = $usuario->update($request->all());
        return response()->json(['success' => $actualizado]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
