{{-- resources/views/productos/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Producto</h1>
    <div class="jumbotron">
        <h2>{{ $producto->nombre }}</h2>
        <p>Precio: {{ $producto->precio }}</p>
        <!-- Otros campos que quieras mostrar -->
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection