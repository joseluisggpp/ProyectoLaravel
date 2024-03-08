@extends('productos.layouts')

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
                    Modificar Producto
                </div>
                <div class="float-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('productos.update', $productos->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="tipoProducto" class="col-md-4 col-form-label text-md-end text-start">tipoProducto</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('tipoProducto') is-invalid @enderror" id="tipoProducto" name="tipoProducto" value="{{ $productos->tipoProducto }}">
                            @if ($errors->has('tipoProducto'))
                            <span class="text-danger">{{ $errors->first('tipoProducto') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="imagen" class="col-md-4 col-form-label text-md-end text-start">imagen</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('imageno') is-invalid @enderror" id="imagen" name="imagen" value="{{ $productos->imagen }}">
                            @if ($errors->has('imagen'))
                            <span class="text-danger">{{ $errors->first('imagen') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="proveedores_idProveedor" class="col-md-4 col-form-label text-md-end text-start">proveedores_idProveedor</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('proveedores_idProveedor') is-invalid @enderror" id="proveedores_idProveedor" name="proveedores_idProveedor" value="{{ $productos->proveedores_idProveedor }}">
                            @if ($errors->has('proveedores_idProveedor'))
                            <span class="text-danger">{{ $errors->first('proveedores_idProveedor') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start">descripcion</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{ $productos->descripcion }}">
                            @if ($errors->has('descripcion'))
                            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="precio" class="col-md-4 col-form-label text-md-end text-start">precio</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio" value="{{ $productos->precio }}">
                            @if ($errors->has('precio'))
                            <span class="text-danger">{{ $errors->first('precio') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start">stock</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $productos->stock }}">
                            @if ($errors->has('stock'))
                            <span class="text-danger">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar producto">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection