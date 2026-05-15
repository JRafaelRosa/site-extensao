<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;

class ParceiroController extends Controller
{
    public function index(){
        return view('site.parceiros');
    }
     public function store(Request $request){
        //criar novos aviso
    }

    public function delete(Parceiro $p){
        //apagar aviso
    }
}
