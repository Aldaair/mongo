@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <h1>EDIT</h1>
    <form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    <fieldset disabled>
    <div class="mb-3">
        <label for="" class="form-label">id</label>
        <input type="text" class="form-control" name="id" value="{{$producto->id}}">
    </div>
    </fieldset>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">codigo</label>
        <input type="text" class="form-control" name="codigo" value="{{$producto->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">stock</label>
        <input type="text" class="form-control" name="stock" value="{{$producto->stock}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">precio</label>
        <input type="text" class="form-control" name="precio" value="{{$producto->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">proovedor</label>
        <input type="text" class="form-control" name="proovedor" value="{{$producto->proovedor}}">
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop