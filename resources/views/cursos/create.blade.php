@extends('layouts.app')

@section('titulo', 'crear cursos')

@section('contenido')
    <br>
    <h3>Crear Un Nuevo Curso o Libro</h3>
    <form action="/cursos" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Nombrecurso" class="form-label">Nombre del curso o libro</label>
          <input type="text" class="form-control" id="nombre" name="nombre">

        </div>
        <div class="mb-3">
            <label for="-Descrpcioncurso" class="form-label">Descripcion del curso o Libro</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Guardar</button>

      </form>


@endsection
