@include('layouts.sessionstart')
@extends('layouts.plantilla')
@php $users = $_SESSION['user'];
     $type = new \App\Http\Controllers\UsersController();
     $usertype = $type->type($users);
@endphp
@section('content')

    <nav class="navbar">
        <div class="nav-logo">
            <a href="{{route('home',$users)}}">LLAMKAI</a>
        </div>
        <div class="nav-searchbar">
            <form action="{{route('search')}}" method="post">
                @csrf
                <input name="type" type="hidden" value="persona">
                <input type="text" name="valor" placeholder=" Search" value="{{old('busqueda')}}">
                <button type="submit">Buscar</button>
            </form>
        </div>
        <div class="nav-options">
            <a href="#">POPULAR</a>
            <a href="#">CHAT</a>
        </div>
        <div class="nav-profile">
            <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
        </div>
    </nav>
    <div>
        <div>
            {{$variable}}
            <form action="{{route('search')}}" method="post">
                @csrf
                <input name="type" type="hidden" value="persona">
                <input type="hidden" name="valor" value="{{$variable}}">
                <button type="submit">TRABAJADORES</button>
            </form>
            <form action="{{route('search')}}" method="post">
                @csrf
                <input name="type" type="hidden" value="empresa">
                <input type="hidden" name="valor" value="{{$variable}}">
                <button type="submit">EMPRESAS</button>
            </form>
            <form action="{{route('search')}}" method="post">
                @csrf
                <input name="type" type="hidden" value="oferta">
                <input type="hidden" name="valor" value="{{$variable}}">
                <button type="submit">OFERTAS</button>
            </form>
            <form action="{{route('search')}}" method="post">
                @csrf
                <input name="type" type="hidden" value="post">
                <input type="hidden" name="valor" value="{{$variable}}">
                <button type="submit">POSTS</button>
            </form>
        </div>
        <div>
            <label>Personas</label>
            @switch($text)
                @case('persona')
                @include('Solicitante.resultados')
                @break
                @case('empresa')
                @include('Ofertante.resultados')
                @break
                @case('oferta')
                @include('Oferta.resultados')
                @break
                @case('post')

                @break
                @default
                <span>Something went wrong, please try again</span>
                @break
            @endswitch
        </div>
    </div>
@endsection
