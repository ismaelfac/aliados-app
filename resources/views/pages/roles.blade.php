@extends('layouts.app')
@section('content')
<div class="col-md-12 ml-auto mr-auto">
  <div class="card card-upgrade">
    <div class="card-header text-center">
      <h4 class="card-title">Roles</h3>
        <p class="card-category">A continuacion asigne roles a los usuarios del sistema</p>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($roles as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $item->name }} - <div class="">{{ $item->guard_name }}</div>
                    <span class="badge badge-pill">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-outline-danger btn-sm">Editar</a>
                            <a type="button" class="btn btn-outline-suceess btn-sm">Ver Permisos</a>
                          </div>
                    </span>
                </li>
            @endforeach            
        </ul>
        
    </div>
    </div>
</div>
@endsection