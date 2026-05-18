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
     public function store(Request $request){
        //criar novos aviso
    }

    public function delete(PontoColeta $p){
        //apagar aviso
    }
}
