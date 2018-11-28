@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nuevo Libro</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      @include('partials.formErrors')

      @if(isset($book))
        {!! Form::model($book, ['route' => ['book.update', $book->id], 'method' => 'PATCH']) !!}
      @else
        {!! Form::open(['route' => 'book.store']) !!}
      @endif
        <div class="form-group">
          <label for="book">Título</label>
          {!! Form::text('titulo', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Autor</label>
          {!! Form::text('autor', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Sección</label>
          {!! Form::text('seccion', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Ejemplar</label>
          {!! Form::text('ejemplar', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Estado</label>
          {!! Form::text('estado', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Código</label>
          {!! Form::text('codigo', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="book">Edición</label>
          {!! Form::text('edicion', null, ['class' => 'form-control']); !!}
        </div>

        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Aceptar</button>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
