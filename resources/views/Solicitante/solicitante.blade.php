@extends('layouts.plantilla')
@section('content')

    <!--AQUI LOGIN PEDORRO-->

<section class="box">

    <!-- start login -->
    <div class="container login">
        <div class="row">
            <div class="col-md-4 login-box">

                <!-- start tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">SOLICITANTE</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{route('/')}}" class="nav-link" type="button" role="tab" aria-controls="pills-login" aria-selected="true">VOLVER</a>
                    </li>

                </ul><!-- end tabs -->

                <!-- tabs -->
                <div class="tab-content" id="pills-tabContent">

                    <!-- tab access -->
                    <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                        <h2 class="text-left">SOLICITANTE</h2>
                        <form class="login-form" action="{{route('newapplicant',$users)}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" class="form-control input_user"  placeholder="Nombres" autofocus />
                            </div>
                            @error('nombre')
                            <small>*{{$message}}</small>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="text" id="apellido" name="apellido" value="{{old('apellido')}}" class="form-control input_user"  placeholder="Apellidos"/>
                            </div>
                            @error('apellido')
                            <small>*{{$message}}</small>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="number" id="dni" name="dni" value="{{old('dni')}}" class="form-control input_user"  placeholder="DNI"/>
                            </div>
                            @error('dni')
                            <small>*{{$message}}</small>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="text" id="ocupacion" name="ocupacion" value="{{old('ocupacion')}}" class="form-control input_user"  placeholder="Ocupacion" />
                            </div>
                            @error('ocupacion')
                            <small>*{{$message}}</small>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="date" id="fechanacimiento" name="fechanacimiento" value="{{old('fechanacimiento')}}" class="form-control input_user"  placeholder="Fecha de nacimiento" min="1940-01-01" max="2030-12-31" />
                            </div>
                            @error('fechanacimiento')
                            <small>*{{$message}}</small>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                </div>
                                <input type="tel" id="contacto" name="contacto" value="{{old('contacto')}}" class="form-control input_user"  placeholder="Telefono" />
                            </div>
                            @error('contacto')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                            @enderror

                            <div class="input-group mb-3">
                                <p>
                                    Sexo:<br>
                                </p>

                                    <ul>

                                    <input type="radio" name="sexo" value="masculino"> Masculino<br>

                                    <input type="radio" name="sexo" value="femenino"> Femenino<br>
                                    </ul>
                            </div>
                            @error('sexo')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                            @enderror

                            <div class="row">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary btn-block">Ingresar</button>
                                </div>
                            </div>

                        </form>
                    </div><!-- end tab access -->
                </div>

            </div>

            <!-- start carousel -->
            <div class="col-md-8 carousel-box">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://blog.artegrafico.net/lab/js/login-carousel/assets/img/photo-1454165804606-c3d57bc86b40.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SOMOS APP SOCIAL</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eos facere fugit magnam nobis, saepe. Atque autem dolores</p>
                                <p><a href="" title="read more">Read more ...</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://blog.artegrafico.net/lab/js/login-carousel/assets/img/photo-1485988412941-77a35537dae4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Estamos para ti</h5>
                                <p>Doloribus, eius, illum iste maiores nam necessitatibus officia praesentium quod sit voluptatum?</p>
                                <p><a href="" title="read more">Read more ...</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://blog.artegrafico.net/lab/js/login-carousel/assets/img/photo-1517430816045-df4b7de11d1d.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Dejamos sugerencias</h5>
                                <p>Nisi proident id ad deserunt esse aliquip officia consectetur duis deserunt.</p>
                                <p><a href="" title="read more">Read more ...</a></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div><!-- end carousel -->
        </div>
    </div><!-- end login -->
</section>

@endsection
