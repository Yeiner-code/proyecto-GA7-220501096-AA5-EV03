@extends('layouts.app')

@section('titulo', 'crear cursos')

@section('contenido')
<br>
<h3 class="tex-center">Listado de Cursos Disponibles</h3>
<br>
<div class="row">
@foreach ($course as $cursito)
<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$cursito->nombre}}</h5>
          <p class="card-text">{{$cursito->descripcion}}</p>
          <a href="#" class="btn btn-primary">Ver detalles</a>
        </div>
      </div>
</div>
@endforeach
</div>

@endsection
