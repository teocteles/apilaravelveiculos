<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class VeiculoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return response()->json(['data' => $veiculos]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados   = $request->all();
        $veiculo = Veiculo::create($dados);
        if($veiculo) {
            return response()->json(['data' => $veiculo]);
        }else {
            return response()->json(['data' => "Erro ao criar o veículo"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        if($veiculo) {
            return response()->json(['data' => $veiculo]);
        }else {
            return response()->json(['data' => "Registro não encontrado"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);
        $dados = $request->all();
        $veiculo->update($dados);
        if($veiculo) {
            return response()->json(['data' => $veiculo, 'status' => true]);
        }else {
            return response()->json(['data' => "Erro ao alterar o veículo.", 'status' => false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        if($veiculo) {
            $veiculo->delete();
            return response()->json(['data' => 'Removido com sucesso', 'status' => true]);
        }else {
            return response()->json(['data' => 'Erro ao remover', 'status' => false]);
        }
    }
}
