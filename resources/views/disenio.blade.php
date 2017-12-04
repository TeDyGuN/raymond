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
        <!--The content below is only a placeholder and can be replaced.-->
        {{$success = Session::get('success')}}
        @if ($success)
            <div class="alert alert-success">
                <strong>!!Felicidades!! </strong>Nos Contactaremos contigo a la brevedad posible <br><br>
            </div>
        @endif
        <div class="col-md-8 col-xs-12 aso" >
            <div class="col-md-6">
                <img width="300"  class="hombre" src="{{ asset('/images/cuerpo.png') }}">
                <img width="300" class="camisa" src="{{ asset('/images/camisa.png') }}">
                <div v-if="type == 1">
                    <img width="300" class="camisa" id="sacojs"  src="{{ asset('/images/trajes/saco/1.png') }}">
                    <img width="300" class="camisa" id="faldajs" src="{{ asset('/images/trajes/falda/1.png') }}">
                    <img width="300" class="camisa" id="mangajs" src="{{ asset('/images/trajes/mangas/1.png') }}">
                </div>
                <div v-if="type == 2">
                    <img width="300" class="camisa" id="sacojs"  src="{{ asset('/images/trajes/saco/2.png') }}">
                    <img width="300" class="camisa" id="faldajs" src="{{ asset('/images/trajes/falda/2.png') }}">
                    <img width="300" class="camisa" id="mangajs" src="{{ asset('/images/trajes/mangas/2.png') }}">
                </div>
                <div v-if="type == 3">
                    <img width="300" class="camisa" id="sacojs"  src="{{ asset('/images/trajes/saco/3.png') }}">
                    <img width="300" class="camisa" id="faldajs" src="{{ asset('/images/trajes/falda/3.png') }}">
                    <img width="300" class="camisa" id="mangajs" src="{{ asset('/images/trajes/mangas/3.png') }}">
                </div>
                <div v-if="type == 4">
                    <img width="300" class="camisa" id="sacojs"  src="{{ asset('/images/trajes/saco/4.png') }}">
                    <img width="300" class="camisa" id="faldajs" src="{{ asset('/images/trajes/falda/4.png') }}">
                    <img width="300" class="camisa" id="mangajs" src="{{ asset('/images/trajes/mangas/4.png') }}">
                </div>
            </div>
            <div class="col-md-6">
                @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('pedido/save')  }}"  >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="tela" v-bind:value="type">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="nombres" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombres</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nombres" name="nombres"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="father" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellidos</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="father" name="father"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Direccion</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="direccion" name="direccion"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Telefono</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="telefono" name="telefono"  required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-danger" style="padding: 15px;font-size: 16px;">Solicita tu Cotizacion, Ya!!</button>
                    </div>
                </form>
                <br><br>

                {{-- <a href="#" @click.prevent="deleteItem()" style="float: right;"><button type="submit" class="btn btn-danger" style="padding: 15px;font-size: 16px;">Solicita tu Cotizacion, Ya!!</button></a> --}}
            </div>


        </div>
        <div class="col-md-4 col-xs-12">

            <p class="ppp">Todos los Tejidos</p>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="">
                        <a href="#">
                            <img class="img-responsive img-circle" v-on:click="reverseMessage(1)" src="{{ asset('/images/colores/color-1.jpg') }}" >
                        </a>
                        <p class="text-tela">Obreron</p>
                    </div>
                    <div class="">
                        <a href="#">
                            <img class="img-responsive img-circle arriba" v-on:click="reverseMessage(4)" src="{{ asset('/images/colores/color-4.jpg') }}">
                        </a>
                        <p class="text-tela">Pesaro</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="">
                        <a href="#">
                            <img class="img-responsive img-circle" v-on:click="reverseMessage(2)" src="{{ asset('/images/colores/color-2.jpg') }}">
                        </a>
                        <p class="text-tela">Zenda</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                        <a href="#">
                            <img class="img-responsive img-circle"  v-on:click="reverseMessage(3)" src="{{ asset('/images/colores/color-3.jpg') }}">
                        </a>
                        <p class="text-tela">Hilmes</p>
                    </div>

                </div>
            </div>
        </div>


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

<script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                saco : "asset('/images/trajes/saco/1.png')",
                falda : '1',
                mangas : '1',
                type: 1,
                baseUrl: '{{ url('/') }}'
            },
            methods: {
                reverseMessage: function (por) {
                    if(por == 1){
                        this.type = 1
                    }
                    else if (por == 2) {
                        this.type = 2
                    }
                    else if (por == 3) {
                        this.type = 3
                    }
                    else if (por == 4) {
                        this.type = 4
                    }
                },
                deleteItem: function(){
                    event.preventDefault();
                    this.$http.get(this.baseUrl + '/pedido/'+this.type).then(response => {
                         window.location = this.baseUrl + '/pedido/'+this.type;

                    }, response => {
                        console.log("frac");
                    });
                }
            }
        });
    </script
</body>
</html>
