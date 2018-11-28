@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nuevo Miembro</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      @include('partials.formErrors')

      @if(isset($member))
        {!! Form::model($member, ['route' => ['member.update', $member->id], 'method' => 'PATCH']) !!}
      @else
        {!! Form::open(['route' => 'member.store']) !!}
      @endif
        <div class="form-group">
          <label for="member">Nombre</label>
          {!! Form::text('nombre', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="member">Email</label>
          {!! Form::text('email', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
          <label for="member">Código</label>
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
