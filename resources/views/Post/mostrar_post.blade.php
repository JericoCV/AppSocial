@include('layouts.sessionstart')
@extends('layouts.plantilla')
@section('content')
    @php($users = $_SESSION['user'])
    <nav class="navbar">
        <div>
            <a href="{{route('home',$users)}}">Social App</a>
            <input type="text" name="busqueda" placeholder=" Search">
        </div>
        <div>
            <a href="#">Chat</a>
        </div>
        <div>
            <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
        </div>
    </nav>
    <div>
        @foreach($resultado as $post)
            <label>Descripcion: {{$post["descripcion"]}}</label>

            <br>

            <label>
                AQUI IRIA LA MULTIMEDIA
            </label>

            <br>

            <a href="actpost/{{$ppost["id"]}}" >Actualizar</a>
        @endforeach
    </div>
@endsection
