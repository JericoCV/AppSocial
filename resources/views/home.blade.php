@extends('layouts.plantilla')
@section('content')
    <a href="{{route('/')}}"><<< Cerrar Sesion</a><br>
    <label>
        hola {{$users->email}}
    </label>
@endsection
