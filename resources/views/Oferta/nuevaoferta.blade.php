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
    <form action="{{route('saveuser',$usertype)}}" method="post">
        @csrf
        <label>
            <textarea name="descripcion" placeholder="Ingresa los detalles de tu oferta"></textarea>
        </label>
        <label>
            <br>Subir imagen<br>
            <input type="file"
                   id="avatar" name="avatar"
                   accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*">
        </label>
        <label>
            <br>Fecha de Vigencia<br>
            <input type="datetime-local" name="fecha cierre">
        </label>
        <label>
            <br>Ambito<br>
            <select name="ambito">
                <option value="o">value 1</option>
                <option value="o">value 1</option>
                <option value="o">value 1</option>
                <option value="o">value 1</option>
                <option value="o">value 1</option>
            </select>
        </label>
        <label>
            <br>Mensaje que se enviara a los seleccionados<br>
            <input type="text" name="mensaje1" >
        </label>

        <label>
            <br>Mensaje opcional que se enviara a los que no han sido seleccionados<br>
            <input type="text" name="mensaje2" >
        </label>

        <button type="submit">Compartir</button>
    </form>
</div>
@endsection
