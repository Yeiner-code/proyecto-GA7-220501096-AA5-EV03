@extends('layouts.app')

@section('titulo', 'Detalles del cursos o libro')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($course->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card.text">{{$course->descripcion}}</p>
    </div>
    <a href="/cursos/{{$course->id}}/edit" class="btn btn-dark">Editar curso</a>
</div>




@endsection
