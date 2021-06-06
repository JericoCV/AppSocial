<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function guardar(Request $data)
    {

        $post = new Post();
        $post->userid = $data["userid"];
        $post->descripcion = $data["descripcion"];
        $post->multimedia = $data["multimedia"];
        $post->save();
        return redirect()->route('home');

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
        $post->multimedia = $request->multimedia;
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
