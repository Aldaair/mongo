@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <h1>CREATE</h1>
    <form action="/productos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">codigo</label>
        <input type="text" class="form-control" name="codigo">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">stock</label>
        <input type="text" class="form-control" name="stock">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">precio</label>
        <input type="text" class="form-control" name="precio">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">proovedor</label>
        <input type="text" class="form-control" name="proovedor">
    </div>
    
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop