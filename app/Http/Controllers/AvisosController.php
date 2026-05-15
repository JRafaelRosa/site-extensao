<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso\Models\Aviso;

class AvisosController extends Controller
{
    public function index(){
        return view('site.avisos');
    }

    public function store(Request $request){
        //criar novos aviso
    }

    public function delete(Aviso $a){
        //apagar aviso
    }
}
