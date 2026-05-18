<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aviso;

class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aviso::create([
            'titulo' => 'Alteração no Horário da Coleta Seletiva',
            'descricao' => 'Atenção moradores! Devido ao próximo feriado, a coleta seletiva de materiais recicláveis no bairro Central será antecipada para o período da manhã, a partir das 08h.',
            'data' => '2026-05-18',
        ]);

        Aviso::create([
            'titulo' => 'Mutirão de Limpeza no Arroio Local',
            'descricao' => 'Próximo sábado realizaremos um mutirão comunitário para recolhimento de resíduos nas margens do arroio. Venha de luvas e ajude a nossa comunidade! Ponto de encontro na Associação de Moradores.',
            'data' => '2026-05-23',
        ]);

        Aviso::create([
            'titulo' => 'Oficina Gratuita de Compostagem Doméstica',
            'descricao' => 'Inscrições abertas para a oficina prática de compostagem. Aprenda a destinar corretamente seus resíduos orgânicos e transformá-los em adubo para sua horta. Vagas limitadas no laboratório do projeto.',
            'data' => '2026-05-27',
        ]);

        Aviso::create([
            'titulo' => 'Novo Ponto de Coleta de Lixo Eletrônico',
            'descricao' => 'Agora o nosso ponto central passa a receber pilhas, baterias e eletroeletrônicos quebrados em parceria com a empresa E-Lixo. Não descarte esses materiais no lixo comum!',
            'data' => '2026-06-01',
        ]);

        Aviso::create([
            'titulo' => 'Campanha de Conscientização nas Escolas',
            'descricao' => 'A equipe do projeto de extensão iniciará o ciclo de palestras lúdicas sobre separação de lixo reciclável para os alunos da rede pública de ensino.',
            'data' => '2026-06-05',
        ]);
    }
}
