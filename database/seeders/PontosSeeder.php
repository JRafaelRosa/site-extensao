<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PontoColeta;

class PontosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PontoColeta::create([
            'nome' => 'PEV Central - Recicláveis Geral',
            'descricao' => 'Ponto de Entrega Voluntária destinado a papéis, plásticos, metais e vidros limpos. Não aceita lixo orgânico.',
            'localizacao' => 'Praça Marechal Floriano Peixoto, Centro (Ao lado do terminal)',
            'horario' => 'Aberto 24h (Coleta realizada pelas cooperativas às terças e quintas)',
        ]);

        PontoColeta::create([
            'nome' => 'Ecoponto Campus Universitário',
            'descricao' => 'Estação de coleta focada no descarte correto de apostilas antigas, cadernos, papelão e garrafas PET.',
            'localizacao' => 'Bloco de Biologia e Saúde - Em frente ao Diretório Acadêmico',
            'horario' => 'Segunda a Sexta, das 07h30 às 22h00',
        ]);

        PontoColeta::create([
            'nome' => 'Ponto de Descarte de Óleo de Cozinha',
            'descricao' => 'Entregue seu óleo de cozinha usado armazenado em garrafas PET bem fechadas. O material é revertido para a produção de sabão comunitário.',
            'localizacao' => 'Cozinha Comunitária do Bairro Oficinas',
            'horario' => 'Segunda a Sexta, das 08h00 às 17h00',
        ]);

        PontoColeta::create([
            'nome' => 'Coleta de Lixo Eletrônico e Pilhas',
            'descricao' => 'Ambiente protegido para o descarte de pilhas, baterias celulares antigas, mouses e placas de circuito estragadas.',
            'localizacao' => 'Laboratório de Informática - Bloco C',
            'horario' => 'Segunda a Sexta, das 08h00 às 21h30',
        ]);

        PontoColeta::create([
            'nome' => 'Barracão da Cooperativa Recicla Já',
            'descricao' => 'Ponto principal de entrega de grandes volumes de recicláveis (mudanças, caixas de papelão grandes e sucatas de metal).',
            'localizacao' => 'Distrito Industrial, Rua das Palmeiras, nº 450',
            'horario' => 'Segunda a Sábado, das 07h00 às 18h00',
        ]);
    }
}
