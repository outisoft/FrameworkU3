@extends('usuario.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>Servicio Activo</h1>
  </div>
  <div class="col-md-6">
  </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Servicio</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Servicios</th>
            <th>Dias de atencion</th>
            <th>Horas de atencion</th>
            <th>Equipos a Utilizar</th>
            <th>Precio Mensual</th>
            <th>Tools</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Servicios</th>
            <th>Dias de atencion</th>
            <th>Horas de atencion</th>
            <th>Equipos a Utilizar</th>
            <th>Precio Mensual</th>
            <th>Tools</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Basico</td>
            <td>Lunes, Miercoles y Viernes</td>
            <td>2 horas por dia</td>
            <td>4 equipos</td>
            <td>$300</td>
            <td>
              <a href="/serviciosUsuario/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


@endsection
