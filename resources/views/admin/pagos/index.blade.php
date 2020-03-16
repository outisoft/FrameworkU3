@extends('admin.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>Pagos</h1>
  </div>
  <div class="col-md-6">
    <!--<a href="/servicios/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Nuevo Servicio</a>-->
  </div>
</div>



<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Registro de Pago de Usuario</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Usuario</th>
            <th>Cuenta</th>
            <th>Subscripcion</th>
            <th>Cantidad de Pago</th>
            <th>Tiempo</th>
            <!--<th>Tools</th>-->
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Usuario</th>
            <th>Cuenta</th>
            <th>Subscripcion</th>
            <th>Cantidad de Pago</th>
            <th>Tiempo</th>
            <!--<th>Tools</th>-->
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Jonathan</td>
            <td>Basica</td>
            <td>Pagada</td>
            <td>$300</td>
            <td>1 mes</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>Cesar</td>
            <td>Premium</td>
            <td>Sin Pagar (Pendiente)</td>
            <td>$0.00</td>
            <td>0</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>Jorge</td>
            <td>Platinum</td>
            <td>Pagado</td>
            <td>$1,400</td>
            <td>2 mese</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>




<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Pagos Mensuales</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Año</th>
            <th>Mes</th>
            <th>Subscriptores</th>
            <th>Cancelaciones</th>
            <th>Ingresos</th>
            <!--<th>Tools</th>-->
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Año</th>
            <th>Mes</th>
            <th>Subscriptores</th>
            <th>Cancelaciones</th>
            <th>Ingresos</th>
            <!--<th>Tools</th>-->
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>2019</td>
            <td>Diciembre</td>
            <td>10</td>
            <td>5</td>
            <td>$20,000</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2020</td>
            <td>Enero</td>
            <td>25</td>
            <td>2</td>
            <td>$40,000</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2020</td>
            <td>Febrero</td>
            <td>8</td>
            <td>10</td>
            <td>$32,000</td>
            <!--<td>
              <a href="/servicios/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>-->
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


@endsection
