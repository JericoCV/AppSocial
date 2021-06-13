<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Users;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function guardar(Request $data,Users $users)
    {

        $post = new Post();
        $post->userid = $users->id;
        $post->descripcion = $data["descripcion"];
        $imageName = time().'.'.$data->imagen->extension();
        $data->imagen->move(public_path('images'),$imageName);
        $post->multimedia = $imageName;
        $post->save();
        return redirect()->route('home',$users);

    }

    public function mostrar()
    {
        $resultado = Post::all();
        return view("home", ["resultado" => $resultado]);
    }

    public function mostrarPost(int $id)
    {
        $resultado = Post::where("id", $id)->first();
        return view("actpost", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {

        $post = Post::find($request->id);

        $post->userid = $request->userid;
        $post->descripcion = $request->descripcion;
        $imageName = time().'.'.$request->imagen->extension();
        $request->imagen->move(public_path('images'),$imageName);
        $post->multimedia = $imageName;
        $post->save();
        return redirect("/home");

    }

    public function mostrarPosts(int $id)
    {
        $resultado = Post::where("id", $id)->first();
        return view("delpost", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $post=Post::findOrFail($request->id);
        $post->delete();
        return redirect("/home");
    }
}
