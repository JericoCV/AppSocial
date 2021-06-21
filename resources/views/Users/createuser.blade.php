
    <!--<a href="{{route(('/'))}}"><<< Atras</a>-->

        <h2 class="text-left">Sign up</h2>

    <form action="{{route('saveuser')}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-append">
                <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
            </div>
            <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control input_user" placeholder="Email" autofocus>
        </div>
        @error('email')
        <small>*{{$message}}</small>
        @enderror

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key" style="margin:5px 0"></i></span>
            </div>
            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control input_pass" placeholder="Password">
        </div>
        @error('password')
        <small>*{{$message}}</small>
        @enderror

        <div class="input-group mb-3">

            <p>
                ¿Que buscas en la red social?<br>
            </p>

            <ul>

                <input type="radio" name="type" value="ofertante"> Busco contratar personal<br>

                <input type="radio" name="type" value="solicitante"> Busco trabajo<br>

            </ul>

        </div>
        @error('type')
        <small>*{{$message}}</small>
        @enderror

        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block">Continuar</button>
            </div>
        </div>

    </form>

