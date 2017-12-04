@extends('Plantilla/plantilla')

@section('content')
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Pedidos Registrados</div>
                    <div class="panel-body">
                        <h4>Existen {{ $users->total() }} pedidos actualmente</h4>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo Electronico</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Entregado</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </tr>
                            @foreach($users as $user)
                                <tr data-id="{{ $user->id }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nombres }}</td>
                                    <td>{{ $user->apellidos }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->direccion}}</td>
                                    <td>{{ $user->telefono }}</td>
                                    <td>{{ $user->entregado }}</td>
                                    <td>
                                        <a href="" class="btn-update">Entregado</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn-delete">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $users->setPath('users'); !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <form id="form-delete" role="form" method="POST" action="{{ route('admin031217.pedidos.destroy', ':USER_ID') }}">

        <input name="_method" type="hidden"  value="DELETE">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
    </form>
    <form id="form-update" role="form" method="POST" action="{{ route('admin031217.pedidos.update', ':USER_ID') }}">

        <input name="_method" type="hidden"  value="PUT">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
    </form>
@endsection
@section('addscripts')
    <script>
        $('.btn-delete').click(function()
        {
            event.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            row.fadeOut();
            $.post(url, data, function(result)
            {
                alert(result);
            }).fail(function()
            {
                alert('El Usuario No fue Eliminado');
                row.show();
            });
        });
        $('.btn-update').click(function()
        {
            event.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#form-update');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function(result)
            {
                alert(result);
            }).fail(function()
            {
                alert('El Usuario No fue Modificado');
                row.show();
            });
        });
    </script>
@endsection
