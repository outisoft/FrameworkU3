@extends('admin.layouts.dashboard')

@section('content')

<h1>Registro de Nuevo subscriptor</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="SERVICIOS" action="/servicios" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Nombre del servicio</label>
        <input type="text" name="name" class="form-control" id="title" placeholder="Nombre del servicio..." value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="title">Dias de servicio</label>
        <input type="text" name="edad" class="form-control" id="title" placeholder="Dias de servicio..." value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="title">Horas de servicio</label>
        <input type="text" name="sexo" class="form-control" id="title" placeholder="Horas de servicioo..." value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="title">Equipos utilizados</label>
        <input type="text" name="sub" class="form-control" id="title" placeholder="Equipos utilizados..." value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="title">Precio Mensual</label>
        <input type="text" name="sub" class="form-control" id="title" placeholder="Precio Mensual..." value="{{ old('title') }}">
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>

<script>
    CKEDITOR.replace( 'post_content' );
</script>

@endsection
