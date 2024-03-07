@extends('.layouts')

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
                <form action="{{ route('productos.update', $producto->id) }}" method="post">
                    @csrf
                    @method("PUT")


                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ $producto->nombre }}">
                            @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="apellidos" class="col-md-4 col-form-label text-md-end text-start">Apellidos</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ $producto->apellidos }}">
                            @if ($errors->has('apellidos'))
                            <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="edad" class="col-md-4 col-form-label text-md-end text-start">Edad</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" value="{{ $producto->edad }}">
                            @if ($errors->has('edad'))
                            <span class="text-danger">{{ $errors->first('edad') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nota" class="col-md-4 col-form-label text-md-end text-start">Nota</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('nota') is-invalid @enderror" id="nota" name="nota" value="{{ $producto->nota }}">
                            @if ($errors->has('nota'))
                            <span class="text-danger">{{ $errors->first('nota') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start">Descripcion</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea>
                            @if ($errors->has('descripcion'))
                            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
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