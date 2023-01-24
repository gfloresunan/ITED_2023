<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index($cat)
    {
        $cursos = Curso::where('categoria_id', '=', $cat)->get();

        return view('cursos.index', ['cursos'=>$cursos]);
    }

}
