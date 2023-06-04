<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\MaterielType;
use App\Models\Division;
use App\Models\Marque;
use App\Models\Modèle;
use App\Models\Port;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function PHPSTORM_META\type;

class MaterielController extends Controller
{
    public function index()
    {
        $materiels = Materiel::query()->with(
            'materielType:id,type',
            'materielMarque:id,marque',
            'materielModèle:id,Modèle',
            'materielAffectation:id,division'
        )->get();

        $matTypes = MaterielType::all()->pluck('type');
        $nomMateriels = [];

        foreach ($matTypes as $matType) {
            $count = Materiel::whereHas('MaterielType', function ($query) use ($matType) {
                $query->where('type', $matType);
            })->count();

            $nomMateriels[$matType] = $count;
        }
        //dd($nomMateriels, $matTypes);
        //$materiels = Materiel::all();
        $materielTypes = MaterielType::all();

        $mat = '[{"id":1,"mat":a}, {"id":2,"mat":b}, {"id":3,"mat":c}, {"id":4,"mat":d}]';
        return view('materiel.index', ['materiels' => $materiels])
            ->with('matTypes', $matTypes)
            ->with('nomMateriels', $nomMateriels);
    }

    public function create()
    {

        $matType = MaterielType::all();
        $afictations = Division::all();
        $etats = ['très bon', 'bien', 'moyen', 'mauvais'];
        $caractéristiquesPlaceHolder = "caractéristiques... \n processeur \n Ram  \n stockage \n carte graphique \n lecteur/graveur \n ssd ou hdd \n description ";

        return view('materiel.createMateriel')
            ->with('matType', $matType)
            ->with('etats', $etats)
            ->with('caractéristiquesPlaceHolder', $caractéristiquesPlaceHolder)
            ->with('afictations', $afictations);
    }

    public function store(Request $request)
    {

        $request->validate([
            'materiel_type' => 'required',
            'marque' => 'required',
            'modèle' => 'required',
            'N_serie' => '',
            'N_Inventair' => '',
            'affectation' => 'required',
            'caractéristiques' => '',
            'date_aqusition' => '',
            'état' => 'required'
        ]);
        Materiel::create($request->all());

        return redirect()->route('Materiel.create')
            ->with('success', 'le port et créé avec succès');
    }

    public function listMateriel()
    {
        $materiels = Materiel::query()->with(
            'materielType:id,type',
            'materielMarque:id,marque',
            'materielModèle:id,Modèle',
            'materielAffectation:id,division'
        )->get();
        $matType = MaterielType::all();
        $marques = Marque::all();
        $modeles = Modèle::all();
        $afictations = Division::all();
        $etats = ['très bon', 'bien', 'moyen', 'mauvais'];
        return view('materiel.listMateriel', ['materiels' => $materiels])
            ->with('matType', $matType)
            ->with('etats', $etats)
            ->with('marques', $marques)
            ->with('modeles', $modeles)
            ->with('afictations', $afictations);
    }

    public function edit($materielID)
    {
        $materiel = Materiel::query()->where('id', $materielID)->get();
        $ports = Materiel::findOrFail($materielID)->ports;
        $matType = MaterielType::all();
        $type = MaterielType::query()->where('id', $materiel[0]->materiel_type)->pluck('type')->get(0);
        $marque = Marque::query()->where('materiel_type', $materiel[0]->materiel_type)->get();
        $modele = Modèle::query()->where('marque', $marque[0]->id)->get();
        $afictations = Division::all();
        $etats = ['très bon', 'bien', 'moyen', 'mauvais'];




        return view('materiel.editMateriel', compact('materiel'))
            ->with('matType', $matType)
            ->with('ports', $ports)
            ->with('type', $type)
            ->with('etats', $etats)
            ->with('marque', $marque)
            ->with('modele', $modele)
            ->with('afictations', $afictations);
    }


    public function modify(Request $request, $materielid)
    {
        $request->validate([
            'id' => 'required',
            'materiel_type' => 'required',
            'marque' => 'required',
            'modèle' => 'required',
            'N_serie' => '',
            'N_Inventair' => '',
            'affectation' => 'required',
            'caractéristiques' => '',
            'date_aqusition' => '',
            'état' => 'required'
        ]);
        $materiel = Materiel::findOrFail($materielid);
        $materiel->update($request->all());

        return redirect()->route('Materiel.edit', $request->id)
            ->with('success', 'le le materiel a etez modifier avec succès');
    }

    public function show($materielID)
    {
        $materiel = Materiel::findOrFail($materielID);
        $ports = Materiel::findOrFail($materielID)->ports;
        $type = MaterielType::query()->where('id', $materiel->materiel_type)->pluck('type')->get(0);
        $marque = Marque::query()->where('materiel_type', $materiel->marque)->pluck('marque')->get(0);
        $modele = Modèle::query()->where('marque', $materiel->modèle)->pluck('Modèle')->get(0);
        $affictation = Division::query()->where('id', $materiel->affectation)->pluck('division')->get(0);
        return view('materiel.showMateriel', compact('materiel'))
            ->with('type', $type)
            ->with('marque', $marque)
            ->with('modele', $modele)
            ->with('affictation', $affictation)
            ->with('ports', $ports);
    }

    public function drop($ID)
    {
        Materiel::destroy($ID);
        return redirect()->route('Materiel.index');
    }
    public function search(Request $request)
    {
        // Retrieve the search parameters from the request
        $materielType = $request->input('materiel_type');
        $materielMarque = $request->input('marque');
        $materielModele = $request->input('modele');
        $materielNSerie = $request->input('N_serie');
        $materielNInventair = $request->input('N_Inventair');
        $materielcarac = $request->input('caractéristiques');
        $materielAffectation = $request->input('affectation');
        $materielDateAqusition = $request->input('date_aqusition');
        $materielEtat = $request->input('état');
        // ... Retrieve other search parameters

        // Perform the search logic using the retrieved parameters
        $materiels = Materiel::query()
            ->when($materielType, function ($query, $materielType) {
                $query->where('materiel_type', $materielType);
            })
            ->when($materielMarque, function ($query, $materielMarque) {
                $query->where('marque', $materielMarque);
            })
            ->when($materielModele, function ($query, $materielModele) {
                $query->where('modele', $materielModele);
            })
            ->when($materielNSerie, function ($query, $materielNSerie) {
                $query->where('n_serie', 'LIKE', '%' .  $materielNSerie. '%');
            })
            ->when($materielNInventair, function ($query, $materielNInventair) {
                $query->where('n_inventair', 'LIKE', '%' .  $materielNInventair. '%');
            })
            ->when($materielAffectation, function ($query, $materielAffectation) {
                $query->where('affectation', $materielAffectation);
            })
            ->when($materielcarac, function ($query, $materielcarac) {
                $query->where('caractéristiques', 'LIKE', '%' .  $materielcarac. '%');
            })
            ->when($materielDateAqusition, function ($query, $materielDateAqusition) {
                $query->where('date_aqusition', $materielDateAqusition);
            })
            ->when($materielEtat, function ($query, $materielEtat) {
                $query->where('état', $materielEtat);
            })
            // ... Apply other search filters
            ->get();
            //$view = view('materiel.list', compact('materiels'))->render();
            return view('materiel.list', ['materiels'=> $materiels]);
            //return response()->json(['html' => $view]);
    }
}
