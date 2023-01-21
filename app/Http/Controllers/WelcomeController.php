<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all();
        return view('welcome.index', ['categorias' => $categoria]);
    }

    public function show($curso)
    {
        $cursos = Curso::all();
        return view('welcome.index', ['categorias' => $cursos]);
    }
}
