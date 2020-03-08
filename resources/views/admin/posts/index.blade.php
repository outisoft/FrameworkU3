@extends('admin.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>OK, Esta Bien</h1>
  </div>
  <div class="col-md-6">
    <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Create New Post</a>
  </div>
</div>

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
            <th>Tools</th>
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
            <th>Tools</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>001</td>
            <td>Jonathan Gabriel Velazques Gutierrez</td>
            <td>24</td>
            <td>Hombre</td>
            <td>Premium</td>
            <td>5</td>
            <td></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>002</td>
            <td>Cesar Morales Trinidad</td>
            <td>22</td>
            <td>Hombre</td>
            <td>Basico</td>
            <td>3</td>
            <td></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>003</td>
            <td>Jorge Antonio Cruz Bartolon</td>
            <td>21</td>
            <td>Hombre</td>
            <td>Platinum</td>
            <td>7</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection
