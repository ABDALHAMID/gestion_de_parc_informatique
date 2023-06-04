<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

use function Psy\debug;

class MarqueController extends Controller
{
    public function getMarquesByMaterielType(Request $request)
    {
        $matTypeId = $request->input('matTypeId');
        $marques = Marque::where('materiel_type', $matTypeId)->get();
        return response()->json($marques);
    }
}
