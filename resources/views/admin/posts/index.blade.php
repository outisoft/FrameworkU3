@extends('admin.layouts.dashboard')
@section('content')
<h1>OK, Esta Bien</h1>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Subscripcion</th>
            <th>Subscripciones</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>Nombre
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Subscripcion</th>
            <th>Subscripciones</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>001</td>
            <td>Jonathan Gabriel Velazques Gutierrez</td>
            <td>24</td>
            <td>Hombre</td>
            <td>Premium</td>
            <td>3</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection
