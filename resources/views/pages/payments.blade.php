@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card card-tasks">
        <div class="card-header ">
            <h4 class="card-title">Mis facturas</h4>
            <h5 class="card-category">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                    </label>
                </div><span>Pendientes por Cobro</span>
            </h5>
            </div>
            <div class="card-body ">
            <div class="table-full-width table-responsive">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estado</th>
                            <th scope="col">No Factura</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Vence</th>
                            <th scope="col">Valor Total</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button></td>
                            <td>254620</td>
                            <td>72288959</td>
                            <td>2021/05</td>
                            <td>2021-05-20</td>
                            <td>$ 1.235.000.00</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button></td>
                            <td>254620</td>
                            <td>72288959</td>
                            <td>2021/05</td>
                            <td>2021-05-20</td>
                            <td>$ 1.235.000.00</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button></td>
                            <td>254620</td>
                            <td>72288959</td>
                            <td>2021/05</td>
                            <td>2021-05-20</td>
                            <td>$ 1.235.000.00</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button></td>
                            <td>254620</td>
                            <td>72288959</td>
                            <td>2021/05</td>
                            <td>2021-05-20</td>
                            <td>$ 1.235.000.00</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="card-footer ">
            <hr>
            <div class="stats">
                <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
            </div>
        </div>
    </div>
</div>
@endsection