@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Listado de Miembros</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Miembros</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="members">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Código</th>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>
                                  <a class="btn btn-sm btn-primary" href="{{ route('member.show', $member->id) }}">{{ $member->id }}</a>
                                </td>
                                <td>{{ $member->nombre }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->codigo }}</td>
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
            $('#members').DataTable();
        });
    </script>
@stop
