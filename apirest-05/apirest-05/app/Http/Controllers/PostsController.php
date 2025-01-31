<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsCollection;
use App\Http\Resources\PostsResource;
use App\Models\posts;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::paginate(10);
        return new PostsCollection($posts);
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
    public function store(StorepostsRequest $request)
    {
        return new PostsResource(Posts::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        $filtroCategorias = request()->query('categorias');

        if($filtroCategorias){
            return new PostsResource($posts->loadMissing('categorias'));
        }
        return new PostsResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostsRequest $request, posts $posts)
    {
        $actualizado = $posts->update($request->all());
        return response()->json(['success' => $actualizado]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts)
    {
        $eliminado = $posts->delete();
        return response()->json(['success' => $eliminado]);
    }
}
