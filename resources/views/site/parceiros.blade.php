@extends('layout.master')

@section('title', 'Parceiros - Lixo Eletrônico')

@section('content')

<!-- Header da Página -->
<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Nossos Parceiros</h1>
        <p class="lead">Instituições e empresas que tornam o descarte sustentável uma realidade em Ponta Grossa.</p>
    </div>
</section>

<div class="container py-5">

    <!-- Introdução -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h2 class="h4 fw-bold">Colaboração por um Futuro Sustentável</h2>
            <p class="text-secondary">
                O sucesso do nosso projeto de extensão depende diretamente da união de esforços. Cada parceiro abaixo desempenha um papel fundamental, seja na logística, na educação ambiental ou no processamento final dos materiais coletados.
            </p>
        </div>
    </div>

    <div class="row g-4">

    @foreach($parceiros as $parceiro)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">

                    <div class="mb-4 d-flex justify-content-center align-items-center" style="height: 100px; overflow: hidden;">
                        <img src="{{ asset($parceiro->logo) }}"
                            class="img-fluid"
                            style="max-height: 100%; object-fit: contain;"
                            alt="Logo {{ $parceiro->nome }}">
                    </div>

                    <h5 class="fw-bold">{{ $parceiro->nome }}</h5>

                    <p class="badge bg-primary">{{ $parceiro->tipo }}</p>

                    <p class="text-secondary small" style="text-align: justify;">
                        {{ $parceiro->descricao }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach

    </div>

    <!-- Call to Action: Quer ser um parceiro? -->
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

@endsection
