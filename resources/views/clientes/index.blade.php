@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('clientes/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Numero Social</th>
                <th>Telefono</th>
                <th>Domicilio</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($clientes as $cliente)
            <tr>
              <td>{{ $cliente->id }}</td>
              <td>{{ $cliente->codigo }}</td>
              <td>{{ $cliente->numero_social }}</td>
              <td>{{ $cliente->telefono }}</td>
              <td>{{ $cliente->domicilio }}</td>
              <td><a href="{{ url('clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('clientes/'.$cliente->id) }}" method="post">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
            </tr>
           </tbody>
           @endforeach
        </table>
    </div>
</main>