@extends('layout.master')

@section('title', 'Pontos de Coleta - Lixo Eletrônico')

@section('content')

<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Onde Descartar?</h1>
        <p class="lead">Encontre o ponto de entrega voluntária mais próximo de você.</p>
    </div>
</section>

<div class="container py-5">

    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
            <h6 class="fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i> Erro ao processar ponto de coleta:</h6>
            <ul class="mb-0 small">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @auth
        <div class="text-end mb-4">
            <button class="btn btn-dark shadow-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modalNovoPonto">
                <i class="bi bi-plus-circle me-2"></i>Novo Ponto de Coleta
            </button>
        </div>
    @endauth

    <h2 class="h4 fw-bold mb-4 border-start border-primary border-4 ps-3 text-uppercase">Nossos Pontos em Ponta Grossa</h2>

    <div class="row g-4">

    @forelse($pontos as $ponto)
        <div class="col-md-6 col-xl-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden position-relative">

                @if($loop->first)
                    <div class="bg-primary py-2 px-3 text-white small fw-bold">PONTO PRINCIPAL</div>
                @endif

                @auth
                    <div class="position-absolute end-0 mt-2 me-2" style="z-index: 10; top: {{ $loop->first ? '35px' : '0' }};">
                        <form action="{{ route('app.pontos-coleta.delete', $ponto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este ponto de coleta?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger p-1" title="Excluir Ponto">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </div>
                @endauth

                <div class="card-body {{ !$loop->first ? 'pt-4' : '' }}">
                    <h5 class="fw-bold pe-4">{{ $ponto->nome }}</h5>

                    <p class="small text-muted mb-3">
                        <i class="bi bi-geo-alt-fill me-1"></i> {{ $ponto->localizacao }}
                    </p>

                    <hr>

                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><strong>Horário:</strong> {{ $ponto->horario }}</li>
                        <li><strong>Descrição:</strong> {{ $ponto->descricao ?? 'Sem observações adicionais.' }}</li>
                    </ul>

                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($ponto->nome . ', ' . $ponto->localizacao . ' - Ponta Grossa, PR') }}"
                        target="_blank"
                        class="btn {{ $loop->first ? 'btn-outline-primary' : 'btn-outline-secondary' }} btn-sm w-100">
                        <i class="bi bi-cursor-fill me-1"></i> Como Chegar
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-4">
            <p class="text-muted small">Nenhum ponto de coleta cadastrado no momento.</p>
        </div>
    @endforelse

    </div>

    <div class="mt-5 alert alert-warning border-0 shadow-sm d-flex align-items-center">
        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
        <div>
            <strong>Lembrete importante:</strong> Nenhum de nossos pontos aceita eletrodomésticos grandes, pilhas vazadas ou lâmpadas avulsas.
        </div>
    </div>
</div>

<div class="modal fade" id="modalNovoPonto" tabindex="-1" aria-labelledby="modalNovoPontoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white py-3">
                <h5 class="modal-title fw-bold" id="modalNovoPontoTitle">
                    <i class="bi bi-geo-alt me-2 text-primary"></i>Cadastrar Ponto de Coleta
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @include('app.forms.form_pontos_coleta')
            
        </div>
    </div>
</div>

@endsection