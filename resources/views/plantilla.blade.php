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
    <div class="container" id="app" >
        @yield("content")
    </div>
    {{-- <footer class="footer">
        Copyright 2017 - Powered by <a href="https://web-gama.com/" target="_blank">GAMA Market Solutions</a>
    </footer> --}}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('/js/vue.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>

@yield('addscripts')
</body>
</html>
