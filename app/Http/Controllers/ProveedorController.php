<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        $saludo = "<h1 style='color: red;'>Hola desde el controlador</h1>";

        return view('proveedores.index', compact('proveedores', 'saludo'));
    }

    public function create()
    {
        //mostrar el formulario de creación
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        Proveedor::create($request->all());

        /*
        almacenar el nuevo Proveedor
        $Proveedor = new Proveedor();
        $Proveedor->codigo = $request->codigo;
        $Proveedor->empresa = $request->empresa;
        $Proveedor->contacto = $request->contacto;
        $Proveedor->direccion = $request->direccion;
        $Proveedor->ciudad = $request->ciudad;
        $Proveedor->save();
        */

        return redirect()->route('proveedores.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Proveedor = Proveedor::find($id);
        return view('proveedores.edit', compact('Proveedor'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        $Proveedor = Proveedor::find($id);
        $Proveedor->update($request->all());

        return redirect()->route('proveedores.index');
    }

    public function destroy($id)
    {
        Proveedor::find($id)->delete();
        // return redirect('/proveedores'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('proveedores.index');
    }
}
