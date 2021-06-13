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
