<?php

use App\Http\Controllers\Controller;

class TarifController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function viewTarif()
    {

    }
}
