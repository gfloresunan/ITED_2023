<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index($cat)
    {
        $cursos = Courses::where('category', '=', $cat)->latest()
            ->paginate(10);
        return view('cursos.index', ['cursos'=>$cursos]);
    }

    public function show($id)
    {
        $curso = Courses::where('id', '=', $id)->get();

        return view('curso.index', ['curso'=>$curso]);
    }
}
