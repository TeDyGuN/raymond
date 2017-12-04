<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>RAYMOND</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="#">RAYMOND<span class="sr-only">(current)</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class=""><a href="{{ url('/buscarmascota') }}">CASIMIRES</a></li>
                    <div class="sep" style="display: block;"></div>
                    <li class=""><a href="{{ url('/buscarmascota') }}">CAMISAS</a></li>
                    <div class="sep" style="display: block;"></div>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LINEA CORPORATIVA <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/panel') }}">
                                    <span class="hidden-xs">COLEGIOS</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">HOTELES</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">LINEA AEREA </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">BANCOS</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">POLICIAS</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <div class="sep" style="display: block;"></div>
                    <li class=""><a href="{{ url('/disenia') }}">DISEÑA AHORA</a></li>
                    <div class="sep" style="display: block;"></div>
                    <li class=""><a href="{{ url('/buscarmascota') }}">DISTRIBUIDORES</a></li>
                    <div class="sep" style="display: block;"></div>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MUJERES <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/panel') }}">
                                    <span class="hidden-xs">BLUSAS</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">FALDAS</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">TRAJES </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">INGRESAR</a></li>
                        <li><a href="{{ url('/register') }}">REGISTRAR</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nombre . ' '.  Auth::user()->apellido}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/panel') }}">
                                        <span class="hidden-xs">Panel de Administracion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <span class="hidden-xs">Salir</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul> --}}
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('/images/raymond.jpeg') }}" width="100%" alt="">
                    <div class="carousel-caption">
                        <a class="btn-ahora" href="{{ url('/disenia') }}"><h4>Diseña Ahora</h4></a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/images/rayomond2.jpg') }}" width="100%" alt="">
                    <div class="carousel-caption">
                        <a class="btn-ahora" href="{{ url('/disenia') }}"><h4>Diseña Ahora</h4></a>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <div class="container arriba">

        <div class="col-md-4">
            <img class="img-responsive" src="{{ asset('/images/camisas2.jpeg') }}" alt="">
            <div class="text-center letra-fina">
                <h3 style="font-size: 22px;"><strong>Camisas</strong></h3>
                <p style="font-size:18px; font-style: italic;">Camisas fabricadas con las mejores telas y de las marcas mas reconocidas a nivel mundial</p>

            </div>
        </div>
        <div class="col-md-4">
            <img  class="img-responsive" width="100%" src="{{ asset('/images/mujer.jpg') }}" alt="">
            <div class="text-center">
                <h3 style="font-size: 22px;"><strong>Mujeres</strong></h3>
                <p style="font-size:18px; font-style: italic;">Trajes hechas a medida para las mujeres con gustos exigentes.</p>
            </div>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="{{ asset('/images/hoteles.jpg') }}" alt="">
            <div class="text-center">
                <h3 style="font-size: 22px;"><strong>Linea Corporativa</strong></h3>
                <p style="font-size:18px; font-style: italic;">Tenemos experiencia trabajando con cadenas hoteleras, restaurantes y unidades educativas</p>

            </div>
        </div>
    </div>
    <div class="container arriba" style="position:relative;">

        <img width="100%" height="500px" src="{{ asset('/images/haber.jpg') }}" alt="">
        <div class="text-center fufu">
            <h3 style="font-size: 35px;"><strong>Casimires</strong></h3>
            <p style="font-size:20px; font-style: italic;">Casimires importados exclusivamente para satisfacer las exigencias de nuestros clientes</p>
        </div>
    </div>

    <div class="container arriba">
        <div class="col-md-12" style="padding-right: 0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15302.000442090552!2d-68.1156131!3d-16.5008309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x299dd3860cd88824!2sCasa+de+la+Mascota!5e0!3m2!1ses!2s!4v1507445191480" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <footer class="footer">
        Copyright 2017 - Powered by <a href="https://web-gama.com/" target="_blank">GAMA Market Solutions</a>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
