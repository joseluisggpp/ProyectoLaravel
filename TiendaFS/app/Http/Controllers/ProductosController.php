<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Validamos los datos con la función validate de Laravel
        $validatedData = $request->validate([
            'tipoProducto' => 'required|max:255',
            'imagen' => 'required|max:255',
            'proveedores_idProveedor' => 'exists:proveedores,id',
            'descripcion' => 'max:1000',
            'precio' => 'numeric|min:0',
            'stock' => 'integer|min:0',

            // Otros campos...
        ]);

        Productos::create($validatedData);
        return redirect('/productos')->route('productos.index')->withSuccess('Se ha creado un nuevo producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //Cargamos el producto correspondiente

        $productos = Productos::find($id);

        //Lo mandamos a la vista
        return view('productos.show', [
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //Cargamos el producto correspondiente

        $productos = Productos::find($id);

        return view('productos.edit', [
            'productos' => $productos
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Cargamos el producto correspondiente

        $producto = Productos::find($id);

        $producto->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
            ->withSuccess('El producto ha sido modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //Cargamos el producto correspondiente
        $productos = Productos::find($id);

        //Borramos el producto
        $productos->delete();

        //retornamos a la ruta indice
        return redirect()->route('productos.index')
            ->withSuccess('El producto se ha borrado correctamente.');
    }
}
