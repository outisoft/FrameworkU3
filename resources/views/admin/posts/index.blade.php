@extends('admin.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>OK, Esta Bien</h1>
  </div>
  <div class="col-md-6">
    <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Nuevo Subscriptor</a>
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
            <td>
              <a href="/posts/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td>
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
            <td>
              <a href="/posts/002/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="002"><i class="fas fa-trash-alt"></i></a>
            </td>
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
            <td>
              <a href="/posts/003/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="003"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Esta Seguro de borrar esto?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">En verdad quiere borrar este subscriptor?.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <form method="POST" action="/posts/001">
                @method('DELETE')
                @csrf
                <button class="btn btn-primary" type="button" data-dismiss="modal">Aceptar</button>
                <form method="POST" action="/posts/001">
                <!--<input type="hidden" id="post_id" name="post_id" value="">
                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Borrar</a>-->
            </form>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('js_post_page')
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var post_id = button.data('postid')

            var modal = $(this)
            modal.find('.modal-footer #post_id').val(post_id)
        })
    </script>
@endsection
