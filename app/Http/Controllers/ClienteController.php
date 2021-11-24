<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        $saludo = "<h1 style='color: red;'>Hola desde el controlador</h1>";

        return view('clientes.index', compact('clientes', 'saludo'));
    }

    public function create()
    {
        //mostrar el formulario de creación
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        Cliente::create($request->all());

        /*
        almacenar el nuevo cliente
        $cliente = new Cliente();
        $cliente->codigo = $request->codigo;
        $cliente->empresa = $request->empresa;
        $cliente->contacto = $request->contacto;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->save();
        */

        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        // return redirect('/clientes'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('clientes.index');
    }
}
