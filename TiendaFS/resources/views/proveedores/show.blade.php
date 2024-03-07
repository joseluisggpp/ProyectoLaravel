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
            </div>
        </div>
    </div>
</div>

@endsection