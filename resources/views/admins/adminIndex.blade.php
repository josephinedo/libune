@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Listado de Administradores</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Listado Admistradores</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="admins">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Código</th>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>
                                  <a class="btn btn-sm btn-primary" href="{{ route('admin.show', $admin->id) }}">{{ $admin->id }}</a>
                                </td>
                                <td>{{ $admin->nombre }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->codigo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>

    <!-- Implementa DataTable -->
    <script>
        $(document).ready(function () {
            $('#admins').DataTable();
        });
    </script>
@stop
