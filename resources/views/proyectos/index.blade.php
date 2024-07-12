@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('proyectos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Fecha De Inicio</th>
                <th>Fecha Final</th>
                <th>Cuantia</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
              <td>{{ $proyecto->id }}</td>
              <td>{{ $proyecto->codigo }}</td>
              <td>{{ $proyecto->descripcion }}</td>
              <td>{{ $proyecto->fecha_inicio }}</td>
              <td>{{ $proyecto->fecha_fin }}</td>
              <td>{{ $proyecto->cuantia }}</td>
              <td><a href="{{ url('proyectos/'.$proyecto->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('proyectos/'.$proyecto->id) }}" method="post">
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