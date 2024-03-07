@extends('productos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Alumno
                </div>
                <div class="float-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>tipoProducto:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $productos->tipoProducto }}
                    </div>
                </div>

                <div class="row">
                    <label for="proveedores_idProveedor" class="col-md-4 col-form-label text-md-end text-start"><strong>proveedores_idProveedor:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $productos->proveedores_idProveedor }}
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

            </div>
        </div>
    </div>
</div>

@endsection