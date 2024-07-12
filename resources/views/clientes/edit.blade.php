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

        <form action="{{url ('clientes/'.$cliente->id) }}" method="post">
            @method("PUT")
            @csrf

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="codigo" id="codigo" value="{{ $cliente->codigo }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="numero_social" class="col-sm-2 col-form-label">Numero Social:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="numero_social" id="numero_social" value="{{ $cliente->numero_social }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="telefono" id="telefono" value="{{ $cliente->telefono }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="domicilio" class="col-sm-2 col-form-label">Domicilio:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="domicilio" id="domicilio" value="{{ $cliente->domicilio }}" required>
                </div>
            </div>
            <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>