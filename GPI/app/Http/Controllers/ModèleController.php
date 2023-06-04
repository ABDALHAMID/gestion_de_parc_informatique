<?php

namespace App\Http\Controllers;

use App\Models\Modèle;
use Illuminate\Http\Request;

class ModèleController extends Controller
{
    public function getModelesByMarque(Request $request)
    {
        $marqueId = $request->input('marqueId');
        $modeles = Modèle::where('marque', $marqueId)->get();
        return response()->json($modeles);
    }
}
