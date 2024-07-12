<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index',['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:clientes|max:10',
            'numero_social' => 'required|',
            'telefono' => 'required|',
            'domicilio' => 'required|',
        ]);

        $cliente = new Cliente();
        $cliente->codigo = $request->input('codigo');
        $cliente->numero_social = $request->input('numero_social');
        $cliente->telefono = $request->input('telefono');
        $cliente->domicilio = $request->input('domicilio');
        $cliente->save();

        return view('clientes.message', ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $Cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'codigo' => 'required|max:10|unique:clientes,codigo,' .$id,
            'numero_social' => 'required|',
            'telefono' => 'required|',
            'domicilio' => 'required|',
        ]);

        $cliente = new Cliente();
        $cliente->codigo = $request->input('codigo');
        $cliente->numero_social = $request->input('numero_social');
        $cliente->telefono = $request->input('telefono');
        $cliente->domicilio = $request->input('domicilio');
        $cliente->save();

        return view('clientes.message', ['msg' => 'Registro Modificado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect("clientes");
    }
}