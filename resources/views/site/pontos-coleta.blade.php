@extends('layout.master')

@section('title', 'Pontos de Coleta - Lixo Eletrônico')

@section('content')

<!-- Header -->
<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Onde Descartar?</h1>
        <p class="lead">Encontre o ponto de entrega voluntária mais próximo de você.</p>
    </div>
</section>

<div class="container py-5">

    <!-- Seção: Sugestão Automática -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="card border-primary shadow-sm">
                <div class="card-body p-4 text-center">
                    <h4 class="fw-bold mb-3"><i class="bi bi-geo-fill text-primary me-2"></i>Sugestão Inteligente</h4>
                    <p class="text-secondary">Clique no botão abaixo para encontrarmos o ponto de coleta mais próximo da sua localização atual.</p>
                    <button class="btn btn-primary px-4 py-2 fw-bold" onclick="findNearest()">
                        <i class="bi bi-radar me-2"></i>Detectar Ponto Próximo
                    </button>
                    <div id="result-near" class="mt-3 d-none">
                        <div class="alert alert-info py-2 small">
                            O ponto mais próximo de você é: <strong>Campus Uvaranas - CSL</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Listagem de Pontos -->
    <h2 class="h4 fw-bold mb-4 border-start border-primary border-4 ps-3 text-uppercase">Nossos Pontos em Ponta Grossa</h2>

    <div class="row g-4">

    @foreach($pontos as $ponto)
        <div class="col-md-6 col-xl-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden">

                @if($loop->first)
                    <div class="bg-primary py-2 px-3 text-white small fw-bold">PONTO PRINCIPAL</div>
                @endif

                <div class="card-body {{ !$loop->first ? 'pt-4' : '' }}">
                    <h5 class="fw-bold">{{ $ponto->nome }}</h5>

                    <p class="small text-muted">
                        <i class="bi bi-geo-alt-fill me-1"></i> {{ $ponto->localizacao }}
                    </p>

                    <hr>

                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><strong>Horário:</strong> {{ $ponto->horario }}</li>
                        <li><strong>Descrição:</strong> {{ $ponto->descricao }}</li>
                    </ul>

                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($ponto->localizacao) }}"
                       target="_blank"
                       class="btn {{ $loop->first ? 'btn-outline-primary' : 'btn-outline-secondary' }} btn-sm w-100">
                        Como Chegar
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    </div>

    <!-- Aviso sobre restrições -->
    <div class="mt-5 alert alert-warning border-0 shadow-sm d-flex align-items-center">
        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
        <div>
            <strong>Lembrete importante:</strong> Nenhum de nossos pontos aceita eletrodomésticos (batedeiras, liquidificadores), pilhas ou baterias avulsas.
        </div>
    </div>
</div>

<script>
    function findNearest() {
        // Aqui no futuro você colocará a lógica de Geolocation
        document.getElementById('result-near').classList.remove('d-none');
    }
</script>

@endsection
