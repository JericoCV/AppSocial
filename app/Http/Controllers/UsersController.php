<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Models\Ofertante;
use App\Models\Solicitante;

class UsersController extends Controller
{
    //Vistas - Formularios
    public function createuser(){
        return view("Users.createuser");
    }
    ///////////////////////////////////////////////

    //Querys:Eloquent - Nuevos registros
    public function newuser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'descripcion' => 'required',
            'type' => 'required'
        ]);
        $request->request->add(['password' =>Hash::make($request->input('password'))]);
        $users = new Users();
        $users->email = $request->email;
        $users->password = $request->password;
        $users->descripcion = $request->descripcion;
        $users->type = $request->type;
        $users->save();
        if ($users->type == 'ofertante'){
            return redirect()->route('createbidder',compact('users'));
        }else{
            return redirect()->route('createapplicant',compact('users'));
        }

    }

    ///////////////////////////////////////////////


    //Vistas - Red Social
    public function home(Users $users){
        if ($users->type == 'ofertante'){
            $usertype = Ofertante::where('userid',$users->id)->first();
            return view("home",compact('users','usertype'));
        }elseif ($users->type == 'solicitante'){
            $usertype = Solicitante::where('userid',$users->id)->first();
            return view("home",compact('users','usertype'));

        }
    }
    public function showusers(){
        $users = Users::all();
        return view("Usuario.showusers",compact('users'));
    }
    public function edituser(Users $users){
        return view('Usuario.edituser',compact('users'));
    }
    public function updateuser(Request $request, Users $users){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'descripcion' => 'required',
            'type' => 'required'
        ]);
        $request->request->add(['password' =>Hash::make($request->input('password'))]);
        $users->email = $request->email;
        $users->password = $request->password;
        $users->descripcion = $request->descripcion;
        $users->type = $request->type;
        $users->save();
        return redirect()->route('showuser',compact('users'));
    }
    public function destroyuser(Users $users){
        $users->delete();
        return redirect()->route('showusers');
    }
    public function validateuser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $users = Users::where('email',$request->email)->first();
        if (password_verify($request->password, $users->password)){
            session_start();
            $_SESSION['user'] = $users;
            return redirect()->route('home',$users);
        }else{
            return redirect()->route('/');
        }
    }
    public function profile(Users $users){
        if ($users->type == 'ofertante'){
            $usertype = Ofertante::where('userid',$users->id)->first();
            return view("profile",compact('users','usertype'));
        }elseif ($users->type == 'solicitante'){
            $usertype = Solicitante::where('userid',$users->id)->first();
            return view("profile",compact('users','usertype'));
        }
    }
    public function estadistica(Users $users){

    }
}
