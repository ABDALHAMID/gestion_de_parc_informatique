<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\MaterielType;
use App\Models\Division;
use App\Models\Marque;
use App\Models\Modèle;
use Illuminate\Support\Facades\DB;
use App\Models\Port;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

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
        )->paginate(10);

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
        $marque = Marque::query()->where('id', $materiel->marque)->pluck('marque')->get(0);
        $modele = Modèle::query()->where('id', $materiel->modèle)->pluck('Modèle')->get(0);
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
        $materielModele = $request->input('modèle');
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
                $query->where('modèle', $materielModele);
            })
            ->when($materielNSerie, function ($query, $materielNSerie) {
                $query->where('n_serie', 'LIKE', '%' .  $materielNSerie . '%');
            })
            ->when($materielNInventair, function ($query, $materielNInventair) {
                $query->where('n_inventair', 'LIKE', '%' .  $materielNInventair . '%');
            })
            ->when($materielAffectation, function ($query, $materielAffectation) {
                $query->where('affectation', $materielAffectation);
            })
            ->when($materielcarac, function ($query, $materielcarac) {
                $query->where('caractéristiques', 'LIKE', '%' .  $materielcarac . '%');
            })
            ->when($materielDateAqusition, function ($query, $materielDateAqusition) {
                $query->where('date_aqusition', $materielDateAqusition);
            })
            ->when($materielEtat, function ($query, $materielEtat) {
                $query->where('état', $materielEtat);
            })->paginate(250);
        //$view = view('materiel.list', compact('materiels'))->render();
        return view('materiel.list', ['materiels' => $materiels]);
        //return response()->json(['html' => $view]);
    }

    public function Monitoring()
    {
        $routerID = MaterielType::query()->where('type', 'routeur')->pluck('id')->get(0);
        $materiels = Materiel::query()->where('materiel_type', $routerID)
            ->with(
                'materielMarque:id,marque',
                'materielModèle:id,Modèle',
                'materielAffectation:id,division',
                'ports'
            )->paginate(5);

        return view('materiel.monitoring')
            ->with('materiels', $materiels);
    }

    public function checkPing(Request $request)
    {
        $host = $request->input('host'); // Replace with the host or IP address you want to ping

        $pingCommand = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? 'ping -n 1 ' : 'ping -c 1 ';
        $pingCommand .= escapeshellarg($host);

        exec($pingCommand, $output, $result);

        if ($result === 0) {
            // Ping was successful
            return response()->json(['status' => true]);
        } else {
            // Ping failed
            return response()->json(['status' => false]);
        }
    }
    public function statistique()
    {

        $years = Materiel::distinct()
            ->orderBy(DB::raw('YEAR(date_aqusition)'))
            ->pluck(DB::raw('YEAR(date_aqusition)'))
            ->map(function ($year) {
                return strval($year);
            })
            ->all();


        $materialCountsByYear = Materiel::selectRaw('YEAR(date_aqusition) AS year')
            ->selectRaw('materiel_type')
            ->selectRaw('COUNT(*) as count')
            ->with('materielType:id,type')
            ->groupBy('year', 'materiel_type')
            ->orderBy('year')
            ->get();

        $data = [];

        foreach ($materialCountsByYear as $materialCount) {
            $year = $materialCount->year;
            $count = $materialCount->count;
            $type = $materialCount->materielType->type;

            if (!isset($data[$type])) {
                $data[$type] = [];
            }

            $data[$type][$year] = $count;
        }

        $division = Division::all()->pluck('division');

        $materialCountsByDivision = Materiel::selectRaw('affectation')
            ->selectRaw('materiel_type')
            ->selectRaw('COUNT(*) as count')
            ->with('materielType:id,type')
            ->with('materielAffectation:id,division')
            ->groupBy('affectation', 'materiel_type')
            ->get();

        $data1 = [];

        foreach ($materialCountsByDivision as $materialCount) {
            $affectation = $materialCount->materielAffectation->division;
            $count = $materialCount->count;
            $type = $materialCount->materielType->type;

            if (!isset($data1[$type])) {
                $data1[$type] = [];
            }

            $data1[$type][$affectation] = $count;
        }


        $materialCountsBytype = Materiel::selectRaw('materiel_type')
            ->selectRaw('COUNT(*) as count')
            ->with('materielType:id,type')
            ->groupBy('materiel_type')
            ->get();

        $data2 = [];

        foreach ($materialCountsBytype as $materialCount) {
            $count = $materialCount->count;
            $type = $materialCount->materielType->type;

            if (!isset($data2[$type])) {
                $data2[$type] = [];
            }

            $data2[$type] = $count;
        }

        $materialCountsByEtat = Materiel::selectRaw('état')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('état')
            ->get();

        $data3 = [];

        foreach ($materialCountsByEtat as $materialCount) {
            $count = $materialCount->count;
            $etat = $materialCount->état;

            if (!isset($data3[$etat])) {
                $data3[$etat] = [];
            }

            $data3[$etat] = $count;
        }

        $materialCountsByMarkAndModele = Materiel::selectRaw('materiel_type')
            ->selectRaw('marque')
            ->selectRaw('modèle')
            ->selectRaw('COUNT(*) as count')
            ->with(
                'materielType:id,type',
                'materielMarque:id,marque',
                'materielModèle:id,Modèle'
            )
            ->groupBy('materiel_type', 'marque', 'modèle')
            ->get();

        $data4 = [];

        foreach ($materialCountsByMarkAndModele as $materialCount) {
            $type = $materialCount->materielType->type;
            $marque = $materialCount->materielMarque->marque;
            $modele = $materialCount->materielModèle->Modèle;
            $count = $materialCount->count;

            if (!isset($data4[$type])) {
                $data4[$type] = [];
            }
            if (!isset($data4[$type][$marque])) {
                $data4[$type][$marque] = [];
            }

            $data4[$type][$marque][$modele] = $count;
        }
        return view('materiel.statistique')
            ->with('years', $years)
            ->with('data', $data)
            ->with('data1', $data1)
            ->with('data2', $data2)
            ->with('data3', $data3)
            ->with('data4', $data4)
            ->with('division', $division);
    }
}
