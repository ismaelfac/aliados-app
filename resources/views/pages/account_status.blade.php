@extends('layouts.app')
@section('content')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-upgrade">
      <div class="card-header text-center">
        <h4 class="card-title">Estado de Cuenta</h3>
          <p class="card-category">A continuacion podra ver el detalle de su estado de cartera con Aliados Inmobiliarios s.a, si tiene alguna duda o no esta de acuerdo con los valores expuestos...</p>
          <a href="{{ url('/') }}" class="btn btn-danger btn-sm">Reportelo ahora</a>
      </div>
      <div class="card-body">
      </div>
    </div>
</div>
@endsection