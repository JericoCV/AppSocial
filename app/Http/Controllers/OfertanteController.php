<?php

namespace App\Http\Controllers;

use App\Models\Ofertante;
use App\Models\Users;
use Illuminate\Http\Request;

class OfertanteController extends Controller
{
    //Vistas - Formularios
    public function createbidder(Users $users){
        return view("Ofertante.ofertante",compact('users'));
    }
    ///////////////////////////////////////////////

    //Querys:Eloquent - Nuevos registros
    public function newbidder(Users $users, Request $request){
        $request->validate([
            'nombre' => 'required',
            'ruc' => 'required',
            'propietario' => 'required',
            'direccion' => 'required',
            'tipo' => 'required'
        ]);
        $bidder = new Ofertante();
        $bidder->userid = $users->id;
        $bidder->nombre = $request->nombre;
        $bidder->ruc = $request->ruc;
        $bidder->tipo = $request->tipo;
        $bidder->propietario = $request->propietario;
        $bidder->estado = "Desactivado";
        $bidder->ubicacion = $request->direccion;
        $bidder->save();
        return redirect()->route('home',compact('users'));
    }
    ///////////////////////////////////////////////
    public function searchbyname(string $value){
        $results = Ofertante::where(function ($query) use ($value) {
            return $query->where('nombre', 'LIKE', '%'.$value.'%')
                ->orWhere('propietario', 'LIKE', '%'.$value.'%');})->get();
        return $results;
    }
}
