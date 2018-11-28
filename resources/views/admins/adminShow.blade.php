@extends('layouts.tema')

@section('contenido')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Info de Administrador</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Info {{ $admin->nombre }}</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Codigo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $admin->nombre }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->codigo }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection