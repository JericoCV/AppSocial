@include('layouts.sessionstart')
@extends('layouts.plantilla')
@section('content')
    @if($users->type=='solicitante')
        @include('Solicitante.home')
    @elseif($users->type=='ofertante')
        @include('Ofertante.home')
    @endif
@endsection

