<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('welcome.index', ['cursos' => $cursos]);
    }

    public function show($curso)
    {
        $cursos = Curso::all();
        return view('welcome.index', ['cursos' => $cursos]);
    }
}
