@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nuevo Administrador</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      @include('partials.formErrors')

      @if(isset($admin))
        {!! Form::model($admin, ['route' => ['admin.update', $admin->id], 'method' => 'PATCH']) !!}
      @else
        {!! Form::open(['route' => 'admin.store']) !!}
      @endif
        <div class="form-group">
          <label for="admin">Nombre</label>
          {!! Form::text('nombre', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="admin">Email</label>
          {!! Form::text('email', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="admin">Código</label>
          {!! Form::text('codigo', null, ['class' => 'form-control']); !!}
        </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Aceptar</button>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
