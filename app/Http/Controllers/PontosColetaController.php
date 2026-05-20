<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PontoColeta;

class PontosColetaController extends Controller
{
    public function index(){

        $pontos = PontoColeta::all();

        return view('site.pontos-coleta', compact('pontos'));
    }
     public function store(Request $request)
    {
        $request->validate([
            'nome'        => 'required|string|max:255',
            'localizacao' => 'required|string|max:255', 
            'horario'     => 'required|string|max:255',
            'descricao'   => 'nullable|string',
        ], 
        [
            'nome.required'        => 'O nome do ponto de coleta é obrigatório.',
            'localizacao.required' => 'O endereço ou localização detalhada é obrigatória.',
            'horario.required'     => 'Informe o horário de funcionamento do ponto.',
        ]);

        PontoColeta::create([
            'nome'        => $request->nome,
            'localizacao' => $request->localizacao, 
            'horario'     => $request->horario,
            'descricao'   => $request->descricao,
        ]);
        return redirect()->route('pontos-coleta')->with('sucesso', 'Ponto de coleta cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $ponto = PontoColeta::findOrFail($id);
        $ponto->delete();
        return redirect()->back()->with('sucesso', 'Ponto de coleta removido com sucesso!');
    }
}
