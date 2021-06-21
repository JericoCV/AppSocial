@extends('layouts.plantilla')
@section('content')
    <!--<form action="{{route('validatesession')}}" method="post">
        @csrf

        <label>
            ¿Aún no tienes cuenta?
            <a href="{{route('createuser')}}">registrate aqui</a>
        </label>
    </form>-->

    <section class="box">

        <!-- start login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4 login-box">

                    <!-- start tabs -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="false">Register</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">Contactanos</button>
                        </li>
                    </ul><!-- end tabs -->

                    <!-- tabs -->
                    <div class="tab-content" id="pills-tabContent">

                        <!-- tab access -->
                        <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                            <h2 class="text-left">Login</h2>
                            <form class="login-form" action="{{route('validatesession')}}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                                    </div>
                                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control input_user"  placeholder="Email" autofocus />
                                </div>
                                @error('email')
                                <small>*{{$message}}</small>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key" style="margin:5px 0"></i></span>
                                    </div>
                                    <input type="password" id="password" name="password" autocomplete class="form-control input_pass" placeholder="Password">
                                </div>
                                @error('password')
                                <small>*{{$message}}</small>
                                @enderror
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary btn-block">Ingresar</button>
                                    </div>
                                </div>

                            </form>
                        </div><!-- end tab access -->

                        <!-- tab Contats -->
                        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                            @include('Users.createuser')
                        </div>

                        <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                            <h2 class="text-left">CONTACTOS</h2>
                            <p>Trouble Logging In? Enter your email, and we'll send you a link to get back into your account.</p>

                                <div class="row">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary btn-block" id="access" name="access">Send login link</button>
                                    </div>
                                </div>
                            </form>
                        </div>

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
