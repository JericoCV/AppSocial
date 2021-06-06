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
        <form action="{{route('savepost',$usertype)}}" method="post">
            @csrf

            <input type="text" name="descripcion" placeholder="descripcion">

            <br>

            <label>
                <br>Subir imagen<br>
                <input type="file"
                       id="avatar" name="avatar"
                       accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*">
            </label>

            <br>

            <button type="submit">Compartir</button>
        </form>
    </div>
@endsection
