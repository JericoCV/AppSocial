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
<<<<<<< HEAD
                    @csrf
=======
>>>>>>> origin/master
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
<<<<<<< HEAD
            {{--foreach--}}
=======
            *foreach*
>>>>>>> origin/master
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
