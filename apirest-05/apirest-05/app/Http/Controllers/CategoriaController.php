<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Esto me sirve para mostrar todos los datos de categoria
        $categoria = Categoria::paginate(10);
        return new CategoriaCollection($categoria);
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
    public function store(StoreCategoriaRequest $request)
    {
        return new CategoriaResource(Categoria::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //Esto me sirve para mostrar datos especificos de una categoria en especifico
        return new CategoriaResource($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $actualizado = $categoria->update($request->all());
        return response()->json(['success' => $actualizado]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $eliminado = $categoria->delete();
        return response()->json(['success' => $eliminado]);
    }
}
