<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use App\Models\Users;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    //Vistas - Formularios
    public function createapplicant(Users $users){
        return view("Solicitante.solicitante", compact('users'));
    }
    ///////////////////////////////////////////////

    //Querys:Eloquent - Nuevos registros
    public function newapplicant(Users $users, Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'ocupacion' => 'required',
            'contacto' => 'required',
            'sexo' => 'required',
            'fechanacimiento' => 'required'
        ]);
        $applicant = new Solicitante();
        $applicant->userid = $users->id;
        $applicant->nombre = $request->nombre;
        $applicant->apellido = $request->apellido;
        $applicant->dni = $request->dni;
        $applicant->ocupacion = $request->ocupacion;
        $applicant->contacto = $request->contacto;
        $applicant->sexo = $request->sexo;
        $applicant->fechanacimiento = $request->fechanacimiento;
        $applicant->save();
        return redirect()->route('home',compact('users'));

    }
    ///////////////////////////////////////////////

}

