@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <h1>INDEX</h1>
    <a href="productos/create" class="btn btn-primary">New</a>
    <h1>CRUD PRODUCTOS CON LARAVEL Y MONGODB</h1>
    <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Código</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Proovedor</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td> {{ $producto->nombre }} </td>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->proovedor }}</td>
                        <td>
                            <form action="{{ route ('productos.destroy',$producto->id) }}" method="POST">
                            <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop