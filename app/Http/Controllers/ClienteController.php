<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validat = [
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'dni' => 'required',
        ];
        $messages = [
            'nombre.required' => 'Agregar nombre',
            'apellido.required' => 'Agregar apellido',
            'telefono.required' => 'Agregar  telefono',
            'dni.required' => 'Agregar dni',

          
        ];
        $this->validate($request, $validat, $messages);
        Cliente::create([
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'telefono'=>$request['telefono'],
            'dni'=>$request['dni'],

        ]);
        return redirect()->route('clientes.index')->with('guardado','Se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.editar',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update([
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'telefono'=>$request['telefono'],
            'dni'=>$request['dni'],
        ]);
         return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
