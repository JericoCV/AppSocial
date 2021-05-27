@extends('layouts.plantilla')
@section('content')
    @if($users->type=='ofertante')
        <nav class="navbar">
            <div>
                <a href="{{route('home',$users)}}">Social App</a>
                <input type="text" name="busqueda" placeholder=" Search">
            </div>
            <div>
                <a href="#">Ofertas populares</a>
                <a href="#">Chat</a>
            </div>
            <div>
                <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
            </div>
        </nav>
        <div>
            <div class="perf-info">

                <div class="pinfo1">
                    <div class="img-per">
                        <img src="#" alt="">
                    </div>
                    <div class="der-per">
                        <div class="der-per1">
                            <img src="#" alt="">
                        </div>
                        <div class="der-per2">
                            <img src="#" alt="">
                            <a href="">{{$usertype->nombre}}<i class="fas fa-question" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="pinfo2">
                    <hgroup>
                        <h1>{{$usertype->propietario}}</h1>
                        <h3>{{$usertype->tipo}}</h3>
                        <h5>Peru<a href="#">{{$usertype->ubicacion}}</a></h5>
                    </hgroup>
                </div>
            </div>
            <nav class="nav-perf">
                <a href="">PUBLICATIONS</a>
                <a href="">INFORMATION</a>
                <a href="">FRIENDS</a>
                <a href="">PHOTOS</a>
                <a href="">MORE...</a>
            </nav>
            <div class="cont-perf">
                <div class="detalles">
                    <hgroup>
                        <h1>Details</h1>
                    </hgroup>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, architecto rerum. Vel recusandae eos
                        laborum veniam, accusantium unde qui possimus ex repudiandae provident odio fugit nisi quia in rerum
                        perspiciatis!</p>
                </div>

                <div class="feed">

                    <div class="crear-p">

                        <div class="cperf">
                            <a href=""><img src="#" alt=""></a>
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
                    </div>

                    <div class="publi">

                    </div>

                </div>

            </div>
        </div>
        <div>
            <div class="c-der1">
                <a href="">Editar perfil publico<i class="fas fa-question" aria-hidden="true"></i></a>
                <a href="">Añadir documentos<i class="fas fa-question" aria-hidden="true"></i></a>
            </div>
            <div>
                <hgroup>
                    <h1>Other users</h1>
                </hgroup>
            </div>
        </div>
    @elseif($users->type=='solicitante')
        <nav class="navbar">
            <div>
                <a href="{{route('home',$users)}}">Social App</a>
                <input type="text" name="busqueda" placeholder=" Search">
            </div>
            <div>
                <a href="#">Ofertas populares</a>
                <a href="#">Chat</a>
            </div>
            <div>
                <a href="{{route('profile',$users)}}">{{$usertype->nombre}}</a>
            </div>
        </nav>
        <div>
            <div class="perf-info">

                <div class="pinfo1">
                    <div class="img-per">
                        <img src="#" alt="">
                    </div>
                    <div class="der-per">
                        <div class="der-per1">
                            <img src="#" alt="">
                        </div>
                        <div class="der-per2">
                            <img src="#" alt="">
                            <a href="">{{$usertype->nombre}} {{$usertype->apellido}}<i class="fas fa-question" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="pinfo2">
                    <hgroup>
                        <h1>{{$usertype->ocupacion}}</h1>
                        <h3>{{$usertype->contacto}}</h3>
                        <h5>{{$users->descripcion}}</h5>
                    </hgroup>
                </div>
            </div>
            <nav class="nav-perf">
                <a href="">PUBLICATIONS</a>
                <a href="">INFORMATION</a>
                <a href="">OFERTAS</a>
                <a href="">PHOTOS</a>
                <a href="">MORE...</a>
            </nav>
            <div>

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
        <div>
            <div class="c-der1">
                <a href="">Editar perfil publico<i class="fas fa-question" aria-hidden="true"></i></a>
                <a href="">Crear ofertas<i class="fas fa-question" aria-hidden="true"></i></a>
            </div>
            <div>
                <hgroup>
                    <h1>Other users</h1>
                </hgroup>
            </div>
        </div>
    @endif
@endsection
