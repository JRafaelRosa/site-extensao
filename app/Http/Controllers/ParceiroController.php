<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;

class ParceiroController extends Controller
{
    public function index(){
        $parceiros = Parceiro::all();
        return view('site.parceiros', compact('parceiros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string|max:255',
            'tipo'      => 'required|string',
            'logo'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB
            'descricao' => 'nullable|string',
        ], [
            'nome.required' => 'O nome da instituição/empresa é obrigatório.',
            'tipo.required' => 'Selecione o tipo de parceiro.',
            'logo.image'    => 'O arquivo enviado deve ser uma imagem.',
            'logo.max'      => 'A imagem do logo não pode ser maior do que 2MB.',
        ]);

        $caminhoLogo = null;

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $imagem = $request->file('logo');
            
            // Usando o método interno para limpar o nome do arquivo
            $nomeImagem = time() . '_' . $this->slugify($request->nome) . '.' . $imagem->getClientOriginalExtension();
            
            $imagem->move(public_path('img/parceiros'), $nomeImagem);
            
            $caminhoLogo = 'img/parceiros/' . $nomeImagem;
        }

        Parceiro::create([
            'nome'      => $request->nome,
            'tipo'      => $request->tipo,
            'descricao' => $request->descricao,
            'logo'      => $caminhoLogo ?? 'img/default-logo.png', 
        ]);

        return redirect()->route('parceiros')->with('sucesso', 'Parceiro cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $parceiro = Parceiro::findOrFail($id);
        
        if ($parceiro->logo && $parceiro->logo !== 'img/default-logo.png' && file_exists(public_path($parceiro->logo))) {
            unlink(public_path($parceiro->logo)); 
        }

        $parceiro->delete();

        return redirect()->back()->with('sucesso', 'Parceiro removido com sucesso!');
    }

    /**
     * limpar o nome do arquivo
     */
    private function slugify($text) 
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        return strtolower($text);
    }
}
