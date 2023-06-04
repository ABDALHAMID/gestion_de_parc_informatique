<?php

namespace App\Http\Controllers;

use App\Models\Port;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PortController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'port' => 'required',
            'mac_address' => 'required',
            'ip_address' => 'required',
            'masque_reseau' => 'required',
            'material' => 'required'
        ]);

        Port::create($request->all());

        return redirect()->route('Materiel.edit', intval($request->material))
        ->with('success','le port et créé avec succès');;
    }

    public function drop(Request $request, $portID ){
        Port::destroy($portID);
        return redirect()->route('Materiel.edit', intval($request->material))
        ->with('success','le port et supprumer avec succès');;
    }
}
