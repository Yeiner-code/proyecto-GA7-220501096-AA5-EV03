@extends('layouts.app')

@section('titulo', 'Editar cursos')

@section('contenido')
<br>
    <h3>Editar información del Curso o Libro</h3>
    <form action="{{ route('cursos.update', $course->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del curso o libro</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $course->nombre }}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del curso o Libro</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $course->descripcion }}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
            @if($course->imagen)
                <br>
                <img src="{{ Storage::url($course->imagen) }}" alt="Imagen del curso" style="height: 100px; width: 100px; margin-top: 10px;">
            @endif
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
