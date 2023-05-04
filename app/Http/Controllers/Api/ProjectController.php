<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return response()->json($projects);
    }

  // Definizione metodo della pagina dettaglio
    public function dettaglio($id)
    {
        $progetto = Progetto::find($id);
        return view('progetti.dettaglio', compact('progetto'));
    }
}
