<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index($search)
    {
        $cursos = Curso::where([
            [function ($query) use ($search) {
                if (($s = $search)) {
                    $query->orWhere('nombre', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(2);

        return view('search.index', compact('cursos'));
    }
}
