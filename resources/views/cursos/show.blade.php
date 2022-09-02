@extends('layouts.plantilla')
@section('title', 'Curso' . $curso)
@section('content')
    @if ($categoria)
        <h1><?= "Bienvenido al curso $curso, de la categoria $categoria" ?></h1>
    @else
        <h1><?= "Bienvenido al curso $curso" ?></h1>
    @endif
@endsection
