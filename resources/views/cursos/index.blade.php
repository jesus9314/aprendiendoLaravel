@extends('layouts.plantilla')
@section('title', 'Cursos')
@section('content')
    <h1>Bienvenido a los cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <hr>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection
