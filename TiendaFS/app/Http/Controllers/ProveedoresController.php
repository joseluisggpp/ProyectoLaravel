<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedores = Proveedores::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Validamos los datos con la función validate de Laravel
        $validatedData = $request->validate([
            'nombreProveedor' => 'required|max:255',
            'contacto' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'paginaWeb' => 'nullable|url|max:255',
        ]);


        Proveedores::create($validatedData);
        return redirect()->route('proveedores.index')->withSuccess('Se ha creado un nuevo proveedor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //Cargamos el proveedor correspondiente

        $proveedores = Proveedores::find($id);

        //Lo mandamos a la vista
        return view('proveedores.show', [
            'proveedores' => $proveedores
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //Cargamos el producto correspondiente

        $proveedores = Proveedores::find($id);

        return view('proveedores.edit', [
            'proveedores' => $proveedores
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Cargamos el producto correspondiente

        $proveedores = Proveedores::find($id);

        $proveedores->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
            ->withSuccess('El proveedor ha sido modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //Cargamos el producto correspondiente
        $proveedores = Proveedores::find($id);

        //Borramos el producto
        $proveedores->delete();

        //retornamos a la ruta indice
        return redirect()->route('proveedores.index')
            ->withSuccess('El proveedor se ha borrado correctamente.');
    }
}
