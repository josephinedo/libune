@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Listado de Libros</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Listado Libros</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="books">
                    <thead>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Sección</th>
                        <th>Ejemplar</th>
                        <th>Estado</th>
                        <th>Codigo</th>
                        <th>Edición</th>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>
                                  <a class="btn btn-sm btn-primary" href="{{ route('book.show', $book->id) }}">{{ $book->id }}</a>
                                </td>
                                <td>{{ $book->titulo }}</td>
                                <td>{{ $book->autor }}</td>
                                <td>{{ $book->seccion }}</td>
                                <td>{{ $book->ejemplar }}</td>
                                <td>{{ $book->estado }}</td>
                                <td>{{ $book->codigo }}</td>
                                <td>{{ $book->edicion }}</td>
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
            $('#books').DataTable();
        });
    </script>
@stop
