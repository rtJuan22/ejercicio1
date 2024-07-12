@extends('layout/template')

@section('title', 'Editar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Editar Formulario</h2>

        @if ($errors->any())
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{url ('proyectos/'.$proyecto->id) }}" method="post">
            @method("PUT")
            @csrf

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="codigo" id="codigo" value="{{ $proyecto->codigo }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha_inicio" class="col-sm-2 col-form-label">Fecha De Inicio:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ $proyecto->fecha_inicio }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha_fin" class="col-sm-2 col-form-label">Fecha Final:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="fecha_fin" id="fecha_fin" value="{{ $proyecto->fecha_fin }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="cuantia" class="col-sm-2 col-form-label">Cuantia:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="cuantia" id="cuantia" value="{{ $proyecto->cuantia }}" required>
                </div>
            </div>
            <a href="{{ url('proyectos') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>