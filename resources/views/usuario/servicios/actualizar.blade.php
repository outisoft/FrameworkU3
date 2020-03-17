@extends('usuario.layouts.dashboard')

@section('content')

<h1>Cambio de plan de servicios</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="SERVICIOS" action="/serviciosUsuario/actualizar" enctype="multipart/form-data">
    {{ csrf_field() }}

    <a href="/serviciosUsuario" class="btn btn-primary js-scroll-trigger">Basico</a>

    <a href="/serviciosUsuario" class="btn btn-primary js-scroll-trigger">Premium</a>

    <a href="/serviciosUsuario" class="btn btn-primary js-scroll-trigger">Platinum</a>

    <!--<div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>-->
</form>

<script>
    CKEDITOR.replace( 'post_content' );
</script>

@endsection
