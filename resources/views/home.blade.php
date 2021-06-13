@include('layouts.sessionstart')
@extends('layouts.plantilla')
@section('content')
    <a href="{{route('/')}}"><<< Cerrar Sesion</a><br>
    <label>
        hola {{$_SESSION['user']->email}} tu nombre es {{$usertype->nombre}}
    </label>
    @if($users->type=='solicitante')
        <nav class="navbar">
            <div>

                <form action="{{route('/busqueda.index')}}" method="get">
                    <div >
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div >
                        <a href="{{route('busqueda.index')}}" class="btn btn-success">Buscar</a>
                    </div>
                </form>



            </div>
            <div>
                <a href="#">Ofertas populares</a>
                <a href="#">Chat</a>
            </div>
            <div>
                <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
            </div>
        </nav>
        <div class="principal">
            <div class="izq">
                <div>
                    <label>
                        <a href="{{route('profile',$users)}}">{{$usertype->nombre}} {{$usertype->apellido}}</a><br>
                        {{$usertype->ocupacion}}
                    </label>
                </div>
                <div>
                    <label>
                        <a href="#">Mi Perfil</a>
                    </label>
                    <label>
                        <a href="#">Siguiendo</a>
                    </label>
                    <label>
                        <a href="#">Configuracion</a>
                    </label>
                </div>
                <div>
                    <label>
                        Seguimiento
                    </label>
                </div>
            </div>
            <div class="cent">
                <div>
                    <label>
                        {{$usertype->nombre}} {{$usertype->apellido}}<br>
                    </label>
                    <label>
                        <form action="#" method="post">
                            <label>
                                <input type="text" name="descripcion" placeholder="En que estas pensando?">
                            </label>
                            <label>
                                Insertar achivo multimedia:
                            </label>
                            <input type="file"
                                   id="avatar" name="avatar"
                                   accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*">
                            <button type="submit">Compartir</button>
                        </form>
                    </label>
                </div>
                <div>
                    *foreach*
                    <div class="post">
                        <div>
                            Usuario<br>
                            fecha de publicacion<br>
                        </div>
                        <div>
                            descripcion
                        </div>
                        <div>
                            multimedia
                        </div>
                        <div> Reaccionar | Comentar</div>
                    </div>
                </div>
            </div>
            <div class="der">
                <div>
                    anuncios
                </div>
                <div>
                    Nuevas Ofertas
                </div>
            </div>
        </div>
    @elseif($users->type=='ofertante')
        <nav class="navbar">
            <div>
                <a href="{{route('home',$users)}}">Social App</a>
                <input type="text" name="busqueda" placeholder=" Search">
            </div>
            <div>
                <a href="#">Crear Ofertas</a>
                <a href="#">Chat</a>
            </div>
            <div>
                <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
            </div>
        </nav>
        <div class="principal">
            <div class="izq">
                <div>
                    <label>
                        <a href="{{route('profile',$users)}}">{{$usertype->nombre}} {{$usertype->apellido}}</a><br>
                        {{$usertype->ocupacion}}
                    </label>
                </div>
                <div>
                    <label>
                        <a href="#">Mi Perfil</a>
                    </label>
                    <label>
                        <a href="#">Siguiendo</a>
                    </label>
                    <label>
                        <a href="#">Configuracion</a>
                    </label>
                </div>
                <div>
                    <label>
                        Seguimiento
                    </label>
                </div>
            </div>
            <div class="cent">
                <div>
                    <label>
                        <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a> {{$usertype->propietario}}<br>
                    </label>
                    <label>
                        <form action="#" method="post">
                            <label>
                                <input type="text" name="descripcion" placeholder="En que estas pensando?">
                            </label>
                            <label>
                                Insertar achivo multimedia:
                            </label>
                            <input type="file"
                                   id="avatar" name="avatar"
                                   accept="image/png, image/jpeg, video/mp4, video/x-m4v, video/*">
                            <button type="submit">Compartir</button>
                        </form>
                    </label>
                </div>
                <div>
                    *foreach*
                    <div class="post">
                        <div>
                            Usuario<br>
                            fecha de publicacion<br>
                        </div>
                        <div>
                            descripcion
                        </div>
                        <div>
                            multimedia
                        </div>
                        <div> Reaccionar | Comentar</div>
                    </div>
                </div>
            </div>
            <div class="der">
                <div>
                    anuncios
                </div>
                <div>
                    Nuevas Ofertas
                </div>
            </div>
        </div>
    @endif
@endsection

