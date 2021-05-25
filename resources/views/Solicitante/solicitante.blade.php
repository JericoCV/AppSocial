@extends('layouts.plantilla')
@section('content')
<a href="{{route('/')}}">Inicio</a>
    <form action="{{route('newapplicant',$users)}}" method="post">
        @csrf
        <label>
            <input type="text" name="nombre" placeholder="Nombres" value="{{old('nombre')}}">
        </label>
        @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <input type="text" name="apellido" placeholder="Apellidos" value="{{old('apellido')}}" >
        </label>
        @error('apellido')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <input type="text" name="dni" placeholder="DNI" maxlength="8" value="{{old('dni')}}">
        </label>
        @error('dni')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <input type="text" name="ocupacion" placeholder="Ocupacion" value="{{old('ocupacion')}}">
        </label>
        @error('ocupacion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <input type="date" name="fechanacimiento" placeholder="fecha de nacimiento"  value="{{old('fechanacimiento')}}" min="1940-01-01" max="2030-12-31">
        </label>
        @error('fechanacimiento')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <input type="tel" name="contacto" placeholder="Numero telefonico" value="{{old('contacto')}}">
        </label>
        @error('contacto')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            <p>
                Sexo:<br>

                <input type="radio" name="sexo" value="masculino"> Masculino<br>

                <input type="radio" name="sexo" value="femenino"> Femenino<br>

            </p>
            @error('sexo')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </label>
        <button type="submit">Ingresar</button>
    </form>
@endsection
