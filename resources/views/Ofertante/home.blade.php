<nav class="nav-bar">
    <div class="nav-logo">
        <a href="{{route('home',$users)}}">LLAMKAI</a>
    </div>
    <div class="nav-searchbar">
        <form action="{{route('search')}}" method="post">
            @csrf
            <input name="type" type="hidden" value="persona">
            <input type="search" name="valor" placeholder="Search" value="{{old('busqueda')}}">
            <button type="submit"><i class="fas fa-search"></i></button>
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
<div class="principal" style="display: flex; width: 100%; min-height: 520px; padding-top: 10px">
    <div class="izq" style="width: 20%; background: #1a202c;border-radius: 0px 8px 8px 0px">
        <div style="height: 120px; text-align: center;">
            <div>
                <a href="{{route('profile',$users)}}" ><img src="{{asset('images/img_2.png')}}" width="100px"></a>
            </div>
            <label>
                <a href="{{route('profile',$users)}}" style=" color: white; text-decoration: none">{{$usertype->nombre}} {{$usertype->apellido}}</a><br>
                {{$usertype->ocupacion}}
            </label>
        </div>
        <div style="display: flex; height: 25px;width: 95%;border-radius: 0px 8px 8px 0px; text-align: center; background-color: white">
            <div style="width: 50%; padding-top: 3px">
                <label>
                    <a href="#" style="color:black; text-decoration: none;">Siguiendo</a>
                </label>
            </div>

            <div style="width: 50%; padding-top: 3px">
                <label>
                    <a href="#" style="color:black; text-decoration: none">Seguidores</a>
                </label>
            </div>
        </div>
        <div style="display: flex; text-align:center; padding-top:10px;width:100%; justify-content: center">
            <div style="width:90%; height: 200px; background-color: white;border-radius: 8px 8px 8px 8px;">
                <label>
                    Seguimiento
                </label>
            </div>
        </div>
    </div>
    <div class="cent" style="width: 60%; background: none;">
        <div style="padding: 10px 10px;padding-top: 0">
            @include('Post.post')
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
    <div class="der" style="width: 20%;  background: #1a202c;border-radius: 8px 0px 0px 8px; color: white">
        <div style="height: 250px">
            Anuncios
        </div>
        <div>
            Nuevas Ofertas
        </div>
    </div>
</div>
