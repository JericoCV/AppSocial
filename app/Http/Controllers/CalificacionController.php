<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Users;
use Illuminate\Http\Request;


class CalificacionController extends Controller
{
    public function newrating(Request $request, Users $users){
        $rating = new Calificacion();
        $rating->userid = $request->userid;
        $rating->userid2 = $request->userid2;
        $rating->valor = $request->valor;
        $rating->comentario = $request->comentario;
        $rating->save();
        return redirect()->route('home',compact('users'));
    }
    /*public function mostrarrating(){
        $vercalificacion = Calificacion::get();
        return view("verCalificacion", ["vercalificacion"=>$vercalificacion]);
    }  */
}
