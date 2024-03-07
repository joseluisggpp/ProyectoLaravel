@extends('proveedores.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">Lista de proveedores</div>
            <div class="card-body">
                <a href="{{ route('proveedores.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo proveedor</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">tipoproveedor</th>
                            <th scope="col">idProveedor</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                        <tr>
                            <th scope="row">{{ $proveedor->id }}</th>
                            <td>{{ $proveedor->tipoproveedor }}</td>
                            <td>{{ $proveedor->proveedores_idProveedor }}</td>
                            <td>{{ $proveedor->descripcion }}</td>
                            <td>{{ $proveedor->precio }}</td>
                            <td>{{ $proveedor->stock }}</td>
                            <td>
                                <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este proveedor?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection