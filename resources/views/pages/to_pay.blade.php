@extends('layouts.app')
@section('content')
<div class="col-md-8 ml-auto mr-auto">
    <div class="card card-upgrade">
      <div class="card-header text-center">
        <h4 class="card-title">Factura No 254620</h3>
          <p class="card-category">A continuacion podra ver el detalle de su factura, si tiene alguna duda o no esta de acuerdo con el valor de su factura...</p>
          <a href="{{ url('/') }}" class="btn btn-danger btn-block btn-sm">Reportelo ahora</a>
      </div>
      <div class="card-body">
        <h6>Arrendatario: Ismael Enrique Lastre Alvarez</h6>
        <h6>Dirección del inmueble: Cll 84B # 37-69</h6>
        <div class="table-responsive table-upgrade">
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center">Cantidad</th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <td>Cannon de Arriendo</td>
                <td class="text-center">1</td>
                <td class="text-center">$1.200.000</td>
              </tr>
              <tr>
                <td>Administracion</td>
                <td class="text-center">1</td>
                <td class="text-center">$450.000</td>
              </tr>
              <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"></td>
                <td class="text-center">$1.650.000</td>
              </tr>
              <tr>
                <td>Otros Cobros</td>
                <td class="text-center"></td>
                <td class="text-center"></td>
              </tr>
              <tr>
                <td>Gastos Obras Civiles</td>
                <td class="text-center"></td>
                <td class="text-center">$452.000</td>
              </tr>
              <tr>
                <td><b>Total</b></td>
                <td class="text-center"></td>
                <td class="text-center">$2.102.000</td>
              </tr>
              <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center">
                  <a type="button" target="_blank" href="#"><img width="100px" height="80px" src="https://colegiofervan.edu.co/wp-content/uploads/2020/02/BotonPSE.png" alt="" srcset="" /></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection