@extends('layouts.plantilla')
@section('content')
    <a href="{{route(('/'))}}"><<< Atras</a>
    <form action="{{route('saveuser')}}" method="post">
        @csrf
        <label>
            Correo electronico:<br>
            <input type="text" name="email" value="{{old('email')}}"><br>
        </label>
        @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            Contraseña:<br>
            <input type="password" name="password" value="{{old('password')}}"><br>
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            Cuentanos de ti:<br>
            <textarea name="descripcion" value="{{old('descripcion')}}" cols="40" rows="5"></textarea>
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            <p>
                ¿Que buscas en la red social?<br>

                <input type="radio" name="type" value="ofertante"> Busco contratar personal<br>

                <input type="radio" name="type" value="solicitante"> Busco trabajo<br>

            </p>
        </label>
        <button type="submit">Continuar</button>


    </form>
@endsection
