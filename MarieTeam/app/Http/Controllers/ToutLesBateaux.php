<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ToutLesBateaux extends Controller
{
    public function Bateauxrecherche (Request $request)
    {
        $mode_transport = $request->input('mode_transport');
        return view('toutLesBateaux')->with('mode_transport', $mode_transport);
    }
}
