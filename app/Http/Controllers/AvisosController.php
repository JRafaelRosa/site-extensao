<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso;

class AvisosController extends Controller
{
    public function index()
    {
        $avisos = Aviso::orderBy('data', 'desc')->get();
        return view('site.avisos', compact('avisos'));
    }

    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data' => 'nullable|date',
        ], [

            'titulo.required' => 'O título do aviso é obrigatório.',
            'descricao.required' => 'A descrição do aviso é obrigatória.',
            'data.date' => 'Insira uma data válida.',
        ]);

        Aviso::create($dadosValidados);


        return redirect()->back()->with('sucesso', 'Novo aviso publicado com sucesso!');
    }

    public function destroy($id)
    {
        $aviso = Aviso::findOrFail($id);
        $aviso->delete();

        return redirect()->route('avisos')->with('sucesso', 'Aviso excluído com sucesso!');
    }
}
