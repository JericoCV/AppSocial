<?php

namespace App\Http\Controllers;
use App\Models\Ofertante;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function createoffer(Ofertante $usertype){
        return view('Oferta.nuevaoferta', compact('usertype'));
    }
}
