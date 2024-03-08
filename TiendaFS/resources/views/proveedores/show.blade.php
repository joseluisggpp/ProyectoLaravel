@extends('proveedores.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Proveedor
                </div>
                <div class="float-end">
                    <a href="{{ route('proveedores.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>NombreProveedor:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $proveedores->nombreProveedor }}
                    </div>
                </div>

                <div class="row">
                    <label for="contacto" class="col-md-4 col-form-label text-md-end text-start"><strong>contacto:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $proveedores->contacto }}
                    </div>
                </div>

                <div class="row">
                    <label for="direccion" class="col-md-4 col-form-label text-md-end text-start"><strong>direccion:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $proveedores->direccion }}
                    </div>
                </div>

                <div class="row">
                    <label for="paginaWeb" class="col-md-4 col-form-label text-md-end text-start"><strong>paginaWeb:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $proveedores->paginaWeb }}
                    </div>
                </div>

                <!--Aquí empieza la lista de productos asociados-->
                <div class="row">

                    @foreach($productosProveedores as $productos)
                    <h3>Producto asociado</h3>
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>tipoProducto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $productos->tipoProducto }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>imagen:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $productos->imagen }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start"><strong>descripcion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $productos->descripcion }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="precio" class="col-md-4 col-form-label text-md-end text-start"><strong>precio:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $productos->precio }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start"><strong>stock:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $productos->stock }}
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

@endsection