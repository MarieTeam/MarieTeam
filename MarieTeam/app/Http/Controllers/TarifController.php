<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TarifController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function viewTarif()
    {
        $tarifsEte = DB::table('tarifer')
            ->select('tarifer.tarif', 'type.libelle')
            ->join('type', 'type.num', '=', 'tarifer.num_type')
            ->where('tarifer.date_deb', '=', '01/06')
            ->where('type.lettre', '=', DB::raw('tarifer.lettre_type'))
            ->distinct()
            ->get();


        return view('tarifs')->with('TarifsEte', $tarifsEte);
    }

}
