<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function showVerificationForm()
    {
        return view('auth.authentication');
    }
    public function authenticationLogin(Request $request)
    {
        $datosLogeo = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($datosLogeo)) {
            $request->session()->regenerate();
            return redirect('/productos');
        }
        return back();
    }
    public function login(Request $request)
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Validamos los datos con la función validate de Laravel
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        Users::create($validatedData);
        return redirect('/login');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //Cargamos el proveedor correspondiente

        $users = Users::find($id);

        //Lo mandamos a la vista
        return view('users.show', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //Cargamos el producto correspondiente

        $users = Users::find($id);

        return view('users.edit', [
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Cargamos el producto correspondiente

        $users = Users::find($id);

        $users->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
            ->withSuccess('El usuario ha sido modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //Cargamos el producto correspondiente
        $users = Users::find($id);

        //Borramos el producto
        $users->delete();

        //retornamos a la ruta indice
        return redirect()->route('users.index')
            ->withSuccess('El usuario se ha borrado correctamente.');
    }
}
