<?php

namespace App\Http\Controllers;
use App\Models\Port;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bateau;


class ToutLesBateaux extends Controller
{
    public function Bateauxrecherche(Request $request)
    {
        $ports = Port::all(); // Récupérez tous les ports enregistrés en base de données.

        $port_depart = $request->input('selectDepart');
        $port_arrivee = $request->input('selectArrivee');
        $port_arrivee_nom = Port::find($port_arrivee)->nom;


        return view('toutLesBateaux', [
            'ports' => $ports,
            'port_depart' => $port_depart,
            'port_arrivee' => $port_arrivee,
            'port_arrivee_nom' => $port_arrivee_nom,
        ]);
    }
}
