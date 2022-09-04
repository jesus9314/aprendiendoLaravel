@extends('layouts.plantilla')
@section('title', 'Crear un Curso')
@section('content')
    <h1>Editando {{ $curso->nombre }}</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $curso->nombre) }}">
        </label>
        @error('nombre')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción
            <br>
            <textarea name="description" rows="5">
                {{ old('description', $curso->description) }}
            </textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
