<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response($cliente, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);
        if(is_null($cliente)){
            return response()->json(['message'=>'Not found'], 404);
        }
        return response()->json($cliente::find($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        if(is_null($cliente)){
            return response()->json(['message'=>'Not found'], 404);
        }

        $cliente->fill($request->all());
        $cliente->save();

        return response($cliente, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        if(is_null($cliente)){
            return response()->json(['message'=>'Not found'], 404);
        }
        $cliente->delete();
        return response()->json(['message'=>'Deleted'],200);
    }
}
