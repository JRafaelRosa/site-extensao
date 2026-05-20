@extends('layout.master')

@section('title', 'Parceiros - Lixo Eletrônico')

@section('content')

<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Nossos Parceiros</h1>
        <p class="lead">Instituições e empresas que tornam o descarte sustentável uma realidade in Ponta Grossa.</p>
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
            <h6 class="fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i> Erro ao processar parceiro:</h6>
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
            <button class="btn btn-dark shadow-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modalNovoParceiro">
                <i class="bi bi-plus-circle me-2"></i>Novo Parceiro
            </button>
        </div>
    @endauth

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h2 class="h4 fw-bold">Colaboração por um Futuro Sustentável</h2>
            <p class="text-secondary">
                O sucesso do nosso projeto de extensão depende diretamente da união de esforços. Cada parceiro abaixo desempenha um papel fundamental, seja na logística, na educação ambiental ou no processamento final dos materiais coletados.
            </p>
        </div>
    </div>

    <div class="row g-4">

    @forelse($parceiros as $parceiro)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm position-relative">
                
                @auth
                    <div class="position-absolute top-0 end-0 mt-2 me-2" style="z-index: 10;">
                        <form action="{{ route('app.parceiros.delete', $parceiro->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este parceiro e apagar o logo dele?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger p-1" title="Excluir Parceiro">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </div>
                @endauth

                <div class="card-body text-center p-4">

                    <div class="mb-4 d-flex justify-content-center align-items-center" style="height: 100px; overflow: hidden;">
                        <img src="{{ asset($parceiro->logo) }}"
                            class="img-fluid"
                            style="max-height: 100%; object-fit: contain;"
                            alt="Logo {{ $parceiro->nome }}">
                    </div>

                    <h5 class="fw-bold mb-2">{{ $parceiro->nome }}</h5>

                    <p class="badge bg-primary mb-3">{{ $parceiro->tipo }}</p>

                    <p class="text-secondary small mb-0" style="text-align: justify;">
                        {{ $parceiro->descricao }}
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-4">
            <p class="text-muted small">Nenhum parceiro cadastrado no momento.</p>
        </div>
    @endforelse

    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="bg-light p-5 rounded-4 text-center border">
                <h3 class="fw-bold">Sua empresa quer colaborar?</h3>
                <p class="text-secondary mb-4">Estamos sempre abertos a novas parcerias que ajudem a expandir nossos pontos de coleta ou campanhas educativas.</p>
                <a href="mailto:contato@lixoeletronico.uepg.br" class="btn btn-primary px-4 py-2 fw-bold">
                    <i class="bi bi-envelope-at me-2"></i>Entre em Contato
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalNovoParceiro" tabindex="-1" aria-labelledby="modalNovoParceiroTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white py-3">
                <h5 class="modal-title fw-bold" id="modalNovoParceiroTitle">
                    <i class="bi bi-handshake me-2 text-primary"></i>Cadastrar Novo Parceiro
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @include('app.forms.form_parceiro')
            
        </div>
    </div>
</div>

@endsection