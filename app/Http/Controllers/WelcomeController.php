<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Courses;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categoria = Categories::all();
        return view('welcome.index', ['categorias' => $categoria]);
    }
    public function show(Request $request){
        $request->validate(['search' => ['required', 'string', 'max:255']]);
        return to_route('search.index', ['search'=>$request->search]);
    }
}
