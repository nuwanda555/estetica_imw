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
            'codigo' => 'required|numeric|unique:clientes|min:99|max:999999',
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

        return redirect()->route('listado_clientes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        // return redirect('/clientes'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('listado_clientes');
    }
}
