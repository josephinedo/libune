@extends('layouts.tema')

@section('contenido')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Info de Libro</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Info {{ $book->codigo }}</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Sección</th>
                            <th>Ejemplar</th>
                            <th>Estado</th>
                            <th>Codigo</th>
                            <th>Edición</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $book->titulo }}</td>
                                <td>{{ $book->autor }}</td>
                                <td>{{ $book->seccion }}</td>
                                <td>{{ $book->ejemplar }}</td>
                                <td>{{ $book->estado }}</td>
                                <td>{{ $book->codigo }}</td>
                                <td>{{ $book->edicion }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Eliminar registro -->
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection