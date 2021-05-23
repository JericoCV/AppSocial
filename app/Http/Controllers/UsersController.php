<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function createuser(){
        return view("Users.createuser");
    }
    public function createbidder(){
        return view("Users.ofertante");
    }
    public function createapplicant(){
        return view("Users.solicitante");
    }
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

    public function home(Users $users){
        return view("home",compact('users'));
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
            return redirect()->route('home',$users);
        }else{
            return redirect()->route('/');
        }
    }
}
