@extends('layouts.tema')

@section('contenido')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Info de miembro</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Info {{ $member->nombre }}</div>
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
                                <td>{{ $member->nombre }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->codigo }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection