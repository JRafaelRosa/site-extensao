<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontoColeta extends Model
{
    // Força o Laravel a usar o plural correto em português
    protected $table = 'pontos_coleta';

    protected $fillable = ['nome', 'descricao', 'localizacao', 'horario'];
}