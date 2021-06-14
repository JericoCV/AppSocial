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
    
    <div class="opiniones">

        <form action="{{route('rating',$users)}}" method="post">
            @csrf
            {{$_SESSION['user']->email}}<input type="text" name="userid" value="{{$_SESSION['user']->id}}"><br><br>
            opina de: {{$users->email}}<input type="text" name="userid2" value="{{$users->id}}">
            <div class="op-estrella">
                <input type="radio" name="valor" id="rate-1" value="1"{{old('valor') == 1}}>
                <label for="rate-1" class="fas fa-star"></label>
                <input type="radio" name="valor" id="rate-2" value="2"{{old('valor') == 2}}>
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="valor" id="rate-3" value="3"{{old('valor') == 3}}>
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="valor" id="rate-4" value="4"{{old('valor') == 4}}>
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="valor" id="rate-5" value="5"{{old('valor') == 5}}>
                <label for="rate-5" class="fas fa-star"></label>
            </div>
            <div class="comentario">
                <textarea name="comentario" value="{{old('comentario')}}" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">VALORAR</button>
        </form>

        <div>
            <a href="{{route('vercali',$users)}}">Ver Calificacion</a>
        </div>
    </div>

</div>
