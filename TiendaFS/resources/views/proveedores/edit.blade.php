@extends('proveedores.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Modificar Proveedor
                </div>
                <div class="float-end">
                    <a href="{{ route('proveedores.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('proveedores.update', $proveedores->id) }}" method="post">
                    @csrf
                    @method("PUT")


                    <div class="mb-3 row">
                        <label for="nombreProveedor" class="col-md-4 col-form-label text-md-end text-start">NombreProveedor</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nombreProveedor') is-invalid @enderror" id="nombreProveedor" name="nombreProveedor" value="{{ $proveedores->nombreProveedor }}">
                            @if ($errors->has('nombreProveedor'))
                            <span class="text-danger">{{ $errors->first('nombreProveedor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="contacto" class="col-md-4 col-form-label text-md-end text-start">contacto</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('contacto') is-invalid @enderror" id="contacto" name="contacto" value="{{ $proveedores->contacto }}">
                            @if ($errors->has('contacto'))
                            <span class="text-danger">{{ $errors->first('contacto') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="direccion" class="col-md-4 col-form-label text-md-end text-start">direccion</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ $proveedores->direccion }}">
                            @if ($errors->has('direccion'))
                            <span class="text-danger">{{ $errors->first('direccion') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="paginaWeb" class="col-md-4 col-form-label text-md-end text-start">paginaWeb</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('paginaWeb') is-invalid @enderror" id="paginaWeb" name="paginaWeb" value="{{ $proveedores->paginaWeb }}">
                            @if ($errors->has('paginaWeb'))
                            <span class="text-danger">{{ $errors->first('paginaWeb') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar proveedor">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection