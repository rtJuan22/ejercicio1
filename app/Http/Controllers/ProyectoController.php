<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index',['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:proyectos|max:10',
            'descripcion' => 'required|',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'cuantia' => 'required|'
        ]);

        $proyecto = new Proyecto();
        $proyecto->codigo = $request->input('codigo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->fecha_fin = $request->input('fecha_fin');
        $proyecto->cuantia = $request->input('cuantia');
        $proyecto->save();

        return view('proyectos.message', ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $Proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.edit', ['proyecto' => $proyecto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'codigo' => 'required|max:10|unique:proyectos,codigo,' .$id,
            'descripcion' => 'required|',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'cuantia' => 'required|'
        ]);

        $proyecto = new Proyecto();
        $proyecto->codigo = $request->input('codigo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->fecha_fin = $request->input('fecha_fin');
        $proyecto->cuantia = $request->input('cuantia');
        $proyecto->save();


        return view('proyectos.message', ['msg' => 'Registro Modificado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();

        return redirect("proyectos");
    }
}