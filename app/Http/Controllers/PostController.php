<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function searchbycontent(string $value){
    $results = Post::where(function ($query) use ($value) {
        return $query->where('descripcion', 'LIKE', '%'.$value.'%');})->get();
    return $results;
}
}
