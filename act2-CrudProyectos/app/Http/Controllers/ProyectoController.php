<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        $listaProyectos = Proyecto::all();
        return view('proyectos.index', compact('listaProyectos'));
    }

    public function create(){
        return view('proyectos.create');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'estado' => 'required',
        ]);

        $proyecto = new Proyecto();
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->categoria = $request->categoria;
        $proyecto->precio = $request->precio;
        $proyecto->estado = $request->estado;
        $respProyecto = $proyecto->save();
        return redirect()->route('proyectos.index', compact('respProyecto'));
    }

    public function edit(Proyecto $proyecto){
        return view('proyectos.edit', compact('usuario'));

    }
    public function update(Request $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->categoria = $request->categoria;
        $proyecto->precio = $request->precio;
        $proyecto->estado = $request->estado;
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    public function destroy(Proyecto $proyecto){
        //preguntar yeray libreta
        $proyecto = Proyecto::find($proyecto->id);
        $proyecto ->delete();
        return redirect()->route('proyectos.index');
    }
    public function show(Proyecto $proyecto){
        return view('proyectos.show', ['proyecto' => $proyecto]);
    }
}
