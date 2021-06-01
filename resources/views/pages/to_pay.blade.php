@extends('layouts.app')
@section('content')
<div class="col-md-12 ml-auto mr-auto">
  <div class="card card-upgrade">
    <div class="card-header text-center">
      <h4 class="card-title">Factura No 254620</h3>
        <p class="card-category">A continuacion podra ver el detalle de su factura, si tiene alguna duda o no esta de acuerdo con el valor de su factura...</p>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-8"><h6>Arrendatario: Ismael Enrique Lastre Alvarez </h6></div>
        <div class="col-md-4"><h6>Inmueble: 24</h6></div>
        <div class="col-md-12"><h6>Dirección del inmueble: Cll 84B # 37-69</h6></div>
      </div>
      <div class="row">
        <div class="col-md-8">
        <div class="table-responsive table-upgrade">
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <td><b>Saldos Anteriores</b></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
              </tr>
              <tr>
                <td>Canon de Arriendo Mes de Abril</td>
                <td class="text-center"></td>
                <td class="text-center">$480.000</td>
              </tr>   
              <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"><a href="{{ url('/') }}" class="btn btn-danger btn-sm">Reportar inconformidad</a></td>
                <td class="text-center">$480.000</td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <td><b>Saldo Actual</b></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
              </tr>
              <tr>
                <td>Canon de Arriendo</td>
                <td class="text-center"></td>
                <td class="text-center">$2.941.176</td>
              </tr>
              <tr>
                <td>IVA 19%</td>
                <td class="text-center"></td>
                <td class="text-center">$558.823</td>
              </tr>
              <tr>
                <td>Administracion</td>
                <td class="text-center"></td>
                <td class="text-center">$730.000</td>
              </tr>
              <tr>
                <td>RETRO ACTIVO ADMON</td>
                <td class="text-center"></td>
                <td class="text-center">$0</td>
              </tr>  
              <tr>
                <td>RETE FUENTE 3.5%</td>
                <td class="text-center"></td>
                <td class="text-center">$102.942</td>
              </tr>
              <tr>
                <td>RETE ICA 1%</td>
                <td class="text-center"></td>
                <td class="text-center">$29.412</td>
              </tr>
              <tr>
                <td>REV RETE ICA</td>
                <td class="text-center"></td>
                <td class="text-center">$0</td>
              </tr>                
              <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"><a href="{{ url('/') }}" class="btn btn-danger btn-sm">Reportar inconformidad</a></td>
                <td class="text-center">$1.650.000</td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <td><b>Deduciones</b></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
              </tr>
              <tr>
                <td>Convenios TripleAAA</td>
                <td class="text-center"></td>
                <td class="text-center">$2.941</td>
              </tr>
              <tr>
                <td>Convenios Aire</td>
                <td class="text-center"></td>
                <td class="text-center">$53.000</td>
              </tr>
              <tr>
                <td>Convenio Gases del Caribe</td>
                <td class="text-center"></td>
                <td class="text-center">$73.000</td>
              </tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"></td>
                <td class="text-center">$128.941</td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <td><b>Gastos Obras Civiles</b></td>
                <td class="text-center"></td>
                <td class="text-center">$0</td>
              </tr>
                <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"><a href="{{ url('/') }}" class="btn btn-danger btn-sm">Reportar inconformidad</a></td>
                <td class="text-center"><b>$0</b></td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
              <tr>
                <tr>
                  <td><b>Convenios de Pago</b></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                </tr>
                <tr>
                  <td><b>Cuota 1/5</b></td>
                  <td class="text-center"><a href="account_status" class="btn btn-round btn-danger">Mi Estado de Cuentas</a></td>
                  <td class="text-center">$3.030.000</td>
                </tr>
                <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"><a href="{{ url('/') }}" class="btn btn-danger btn-sm">Reportar inconformidad</a></td>
                <td class="text-center"><b>$4.097.645</b></td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <th></th>
              <th class="text-center"></th>
              <th class="text-center">Total</th>
            </thead>
            <tbody>
                <tr>
                <td><b>Subtotal</b></td>
                <td class="text-center"></td>
                <td class="text-center"><b>$4.097.645</b></td>
              </tr>
              <tr>
                <td class="text-center"></td>
                <td class="text-center"><a href="#" class="btn btn-round btn-danger">Imprimir Factura</a></td>
                <td class="text-center">
                  <a type="button" target="_blank" href="#" class="btn btn-outline-danger btn-sm">Debito Bancario<img width="50px" height="40px" src="https://colegiofervan.edu.co/wp-content/uploads/2020/02/BotonPSE.png" alt="" srcset="" /></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>
  </div>
</div>
@endsection