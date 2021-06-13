@include('layouts.sessionstart')
@extends('layouts.plantilla')
@section('content')
    <a href="{{route('/')}}"><<< Cerrar Sesion</a><br>
    <label>
        hola {{$_SESSION['user']->email}} tu nombre es {{$usertype->nombre}} <br>
        Tu ID es {{$_SESSION['user']->id}} 
    </label>
    @if($users->type=='solicitante')
        @include('Solicitante.home')
    @elseif($users->type=='ofertante')
        @include('Ofertante.home')
    @endif
@endsection

