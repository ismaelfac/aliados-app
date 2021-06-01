@extends('layouts.app')
@section('content')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-upgrade">
        <div class="card-header text-center">
          <h4 class="card-title">Cartera</h3>
          <p class="card-category">A continuacion podra ver el detalle de su factura, si tiene alguna duda o no esta de acuerdo con el valor de su factura...</p>
        </div>
    <div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Estados de Cuenta</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cartera</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Administracion</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-full-width table-responsive">
                        @include('modules.account_status')
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-full-width table-responsive">
                        pestaña 3
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
    </div>
</div>
@endsection