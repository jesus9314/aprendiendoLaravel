<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.index');
    }
    public function create()
    {
        return "cursos.create";
    }
    public function show($curso, $categoria = null)
    {
        return view('cursos.show',compact('curso','categoria'));
    }
}
