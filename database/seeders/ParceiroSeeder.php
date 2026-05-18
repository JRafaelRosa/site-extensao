<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Parceiro;
use Illuminate\Database\Seeder;

class ParceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parceiro::create([
            'nome' => 'Cooperativa Recicla Mais',
            'descricao' => 'Associação local de catadores responsável pela triagem e correta destinação de materiais recicláveis.',
            'tipo' => 'Cooperativa',
            'logo' => 'img/parceiro1.png',
        ]);

        Parceiro::create([
            'nome' => 'Secretaria Municipal do Meio Ambiente',
            'descricao' => 'Parceiro governamental no apoio logístico, mapeamento de rotas e conscientização da população.',
            'tipo' => 'Órgão Público',
            'logo' => 'img/parceiro2.png',
        ]);

        Parceiro::create([
            'nome' => 'ONG EcoVida',
            'descricao' => 'Organização não-governamental focada em educação ambiental nas escolas e mutirões de limpeza urbana.',
            'tipo' => 'ONG',
            'logo' => 'img/parceiro3.png',
        ]);

        Parceiro::create([
            'nome' => 'E-Lixo Descarte Tecnológico',
            'descricao' => 'Ponto de coleta especializado em receber e dar a destinação correta a componentes eletrônicos e eletrodomésticos.',
            'tipo' => 'Ponto de Coleta',
            'logo' => 'img/parceiro4.png',
        ]);

        Parceiro::create([
            'nome' => 'VerdeVale Compostagem',
            'descricao' => 'Empresa parceira que recebe resíduos orgânicos para transformação em adubo de alta qualidade.',
            'tipo' => 'Empresa',
            'logo' => 'img/parceiro5.png',
        ]);

        Parceiro::create([
            'nome' => 'Associação de Moradores do Bairro',
            'descricao' => 'Ponto focal comunitário para organização dos dias de coleta seletiva e distribuição de panfletos.',
            'tipo' => 'Associação',
            'logo' => 'img/parceiro6.png',
        ]);

        Parceiro::create([
            'nome' => 'Recicla Cidadão',
            'descricao' => 'Projeto comunitário de troca de materiais recicláveis por alimentos ou mudas de plantas.',
            'tipo' => 'Projeto Social',
            'logo' => 'img/parceiro7.png',
        ]);
    }
}
