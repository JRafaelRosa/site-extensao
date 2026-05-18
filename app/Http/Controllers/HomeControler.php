<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Aviso;

class HomeControler extends Controller
{
    public function index(){

        $parceiros = Parceiro::all();
        $avisos = Aviso::orderBy('data', 'desc')->get();

        return view('site.home', compact('parceiros', 'avisos'));
    }
}
