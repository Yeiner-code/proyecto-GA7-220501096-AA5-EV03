@extends('layouts.app')

@section('titulo', 'crear cursos')

@section('contenido')
    <br>
    <h3>Crear Un Nuevo Curso</h3>
    <form action="/cursos" method="post">
        @csrf
        <div class="mb-3">
          <label for="Nombrecurso" class="form-label">Nombre del curso</label>
          <input type="text" class="form-control" id="nombre" name="nombre">

        </div>
        <div class="mb-3">
            <label for="-Descrpcioncurso" class="form-label">Descripcion del curso</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>


@endsection
