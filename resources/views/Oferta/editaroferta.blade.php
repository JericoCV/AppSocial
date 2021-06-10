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
        <form action="{{route('offerupdate',$offer,$usertype)}}" method="post">
            @csrf
            @method('put')
            <label>

                <textarea name="descripcion" placeholder="Ingresa los detalles de tu oferta" value="{{old('descripcion',$offer->descripcion)}}"></textarea>
            </label>
            @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <label>
                <br>Fecha de Vigencia<br>
                <input type="datetime-local" name="fechacierre" value="{{old('fechacierre',$offer->fechacierre)}}">
            </label>
            @error('fechacierre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <label>
                <br>Mensaje que se enviara a los seleccionados<br>
                <input type="text" name="mensaje1"  value="{{old('mensaje1',$offer->mensaje1)}}">
            </label>
            @error('mensaje1')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <label>
                <br>Mensaje opcional que se enviara a los que no han sido seleccionados<br>
                <input type="text" name="mensaje2" value="{{old('mensaje2',$offer->mensaje2)}}"><br>
            </label>
            @error('mensaje2')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <button type="submit">Actualizar</button>
        </form>
    </div>
