<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ToutLesBateaux extends Controller
{
    public function Bateauxrecherche (Request $request)
    {
        $selectDepart = $request->input('selectDepart');
        $selectArrivee = $request->input('selectArrivee');
        $mode_transport = $request->input('mode_transport');
        $nbPersonnes = $request->input('nbPersonnes');

        $tests = DB::select('SELECT * FROM `bateau`');

        return view('toutLesBateaux')
            ->with('mode_transport', $mode_transport)
            ->with('selectDepart', $selectDepart)
            ->with('selectArrivee', $selectArrivee)
            ->with('nbPersonnes', $nbPersonnes)
            ->with('tests', $tests);
    }
}
