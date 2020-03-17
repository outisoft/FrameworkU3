@extends('usuario.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>Historial de pagos</h1>
  </div>
  <div class="col-md-6">
  </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Historial de pagos</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Año</th>
            <th>Mes</th>
            <th>Servicio</th>
            <th>Cantidad $</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Año</th>
            <th>Mes</th>
            <th>Servicio</th>
            <th>Cantidad $</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>2019</td>
            <td>Noviembre</td>
            <td>Basico</td>
            <td>$300</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2019</td>
            <td>Diciembre</td>
            <td>Basico</td>
            <td>$300</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2020</td>
            <td>Enero</td>
            <td>Basico</td>
            <td>$300</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2020</td>
            <td>Febrero</td>
            <td>Premium</td>
            <td>$500</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2020</td>
            <td>Marzo</td>
            <td>Basico</td>
            <td>$300</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


@endsection
