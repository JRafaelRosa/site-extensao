<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PontoColeta;

class PontosColetaController extends Controller
{
    public function index(){
        return view('site.pontos-coleta');
    }
     public function store(Request $request){
        //criar novos aviso
    }

    public function delete(PontoColeta $p){
        //apagar aviso
    }
}
