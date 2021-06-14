<nav class="navbar">
    <div>
        <a href="{{route('home',$users)}}">Social App</a>
        <input type="text" name="busqueda" placeholder=" Search">
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
        <a href="{{route('createoffer',$usertype)}}">OFERTA</a>
        <a href="#">CHAT</a>
    </div>
    <div class="nav-profile">
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
