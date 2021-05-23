@extends('layouts.plantilla')
@section('content')
    <form action="{{route('validatesession')}}" method="post">
        @csrf
        <label>
            Correo electronico:
            <input type="text" name="email" value="{{old('email')}}">
        </label>
        @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
               Contraseña:
            <input type="password" name="password">
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <button type="submit">Ingresar</button>
        <label>
            ¿Aún no tienes cuenta?
            <a href="{{route('createuser')}}">registrate aqui</a>
        </label>
    </form>
@endsection
