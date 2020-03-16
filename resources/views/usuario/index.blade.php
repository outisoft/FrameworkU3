@extends('usuario.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>Usuario</h1>
  </div>
  <div class="col-md-6">

  </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Datos de Usuario</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Tipo de subscripcion</th>
            <th>Subscripcion</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nombre</th>
            <th>Tipo de subscripcion</th>
            <th>Subscripcion</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Jonathan</td>
            <td>Basico</td>
            <td>Activo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


@endsection
