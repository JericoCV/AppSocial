<nav class="navbar">
    <div class="nav-logo">
        <a href="{{route('home',$users)}}">LLAMKAI</a>
    </div>
    <div class="nav-searchbar">
        <form action="#">
            <input type="text" name="busqueda" placeholder=" Search" value="{{old('busqueda')}}">
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
                <a href="{{route('createoffer',$usertype)}}">Crear Oferta</a>
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
                        @php($offers = new \App\Http\Controllers\OfertaController())
                        @foreach($offers->myoffers($usertype) as $offer)
                        <div class="post">
                            <div>
                                <label>
                                    {{$usertype->nombre}} <a href="{{route('offeredit',$offer->id,$usertype)}}">Editar</a><br>
                                    {{$offer->created_at}}<br>
                                </label>
                            </div>
                            <div>
                                <label>
                                {{$offer->descripcion}}
                                </label>
                            </div>
                            <div>
                                <img src="{{asset('images/'.$offer->multimedia)}}" width="500" height="600">
                            </div>
                            <div> Reaccionar | Comentar</div>
                        </div>
                        @endforeach
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
