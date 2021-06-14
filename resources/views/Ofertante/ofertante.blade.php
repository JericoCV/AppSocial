
@extends('layouts.plantilla')
@section('content')
    <a href="{{route('/')}}">Inicio</a>
    <form action="{{route('newbidder',$users)}}" method="post">
        @csrf
        <label>
            <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            <input type="text" name="ruc" placeholder="RUC" value="{{old('ruc')}}" maxlength="11">
        </label>
        @error('ruc')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            <input type="text" name="propietario" placeholder="Propietario" value="{{old('propietario')}}">
        </label>
        @error('propietario')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            <input type="text" name="direccion" placeholder="Direccion" value="{{old('direccion')}}">
        </label>
        @error('direccion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            <select name="tipo">
                <option value="SA">Sociedad Anonima (S.A.)</option>
                <option value="SAC">Sociedad Anónima cerrada (S.A.C.)</option>
                <option value="SRL">Sociedad Comercial de Responsabilidad Limitada (S.R.L.)</option>
                <option value="EIRL">Empresario Individual de Responsabilidad Limitada (E.I.R.L.)</option>
                <option value="SAA">Sociedad Anónima Abierta (S.A.A.)</option>
            </select>
        </label>
        @error('tipo')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <button type="submit">Ingresar</button>
    </form>
@endsection
