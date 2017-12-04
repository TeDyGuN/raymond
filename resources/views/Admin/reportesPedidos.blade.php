@extends('Plantilla/plantilla')

@section('content')
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Reportes Pedidos</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ url('admin031217/reportes/pedido2') }}">Reporte de pedidos entregados</a></li>
                        <li class="list-group-item"><a href="{{ url('admin031217/reportes/pedido1') }}">Reporte de pedidos no entregados</a></li>
                        <li class="list-group-item"><a href="{{ url('admin031217/reportes/pedido3') }}">Reporte de pedidos general</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
