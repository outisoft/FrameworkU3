@extends('admin.layouts.dashboard')

@section('content')

<h1>Update the Post</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/posts/editar" enctype="multipart/form-data">
    @method('PATCH')
    @csrf()

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y Apellido..." value="Jonathan Gabriel Velazques Gutierrez">
    </div>
    <div class="form-group">
        <label for="title">Edad</label>
        <input type="text" name="edad" class="form-control" id="title" placeholder="Edad..." value="24">
    </div>
    <div class="form-group">
        <label for="title">Sexo</label>
        <input type="text" name="sexo" class="form-control" id="title" placeholder="Sexo..." value="Hombre">
    </div>
    <div class="form-group">
        <label for="title">Tipo de Subscripcion</label>
        <input type="text" name="sub" class="form-control" id="title" placeholder="Tipo de Subscripcion..." value="Premium">
    </div>
    <!--<div class="form-group">
        <label for="image">Select Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>-->
    <div class="form-group">
        <label for="content">Informacion Adicional</label>
        <textarea name="post_content" id="content"></textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>

<script>
    CKEDITOR.replace( 'post_content' );
</script>

@endsection
