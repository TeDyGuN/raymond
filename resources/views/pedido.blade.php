@extends('plantilla')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Nuevo Pedido</div>
        <div class="panel-body">
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
            <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('mascota/save')  }}"  >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="nombres" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombres</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nombres" name="nombres"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="father" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellidos</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="father" name="father"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ci" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">CI</label>
                        <div class="col-md-6">
                            <input type="text" onkeypress="return justNumbers(event);" class="form-control" id="ci" name="ci" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Direccion</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="direccion" name="direccion"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Telefono</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="telefono" name="telefono"  required>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary center-block">
                        Registrar
                    </button>
                </div>
            </form>
            <br><br>
            {{$success = Session::get('success')}}
            @if ($success)
                <div class="alert alert-success">
                    <strong>!!Felicidades!!</strong>Se Registro a la Mascota Correctamente <br><br>
                </div>
            @endif
        </div>
    </div>
@endsection
