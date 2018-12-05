@extends('layouts.tema')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BIENVENIDO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Has ingresado correctamente!
                    <br><br>
                    Utiliza la barra lateral para acceder a:
                    <li>Usuarios</li>
                    <li>Libros</li>
                    <li>Miembros</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection