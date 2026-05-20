@extends('layout.master')

@section('title', 'Lixo Eletrônico - Início')

@section('content')

<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Projeto de Extensão: Coleta de Lixo Eletrônico</h1>
        <p class="lead">Promovendo a sustentabilidade e o descarte correto em nossa região.</p>
    </div>
</section>

<div class="container pb-5">
    
    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
            <ul class="mb-0 small">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">

        <div class="col-lg-8">
            <section class="mb-5">
                <h2 class="h3 border-start border-primary border-4 ps-3 mb-4 fw-bold">Objetivo</h2>
                <p class="text-secondary" style="text-align: justify;">
                    Este projeto visa conscientizar a comunidade sobre o descarte correto de resíduos tecnológicos.
                    O acúmulo inadequado de componentes eletrônicos libera metais pesados no solo, prejudicando o meio ambiente e a saúde pública.
                    Nossa missão é facilitar esse processo através de educação e logística eficiente.
                </p>
                <p class="text-secondary">
                    Atuamos em parceria com a universidade para criar um ciclo sustentável de reciclagem e reaproveitamento de materiais.
                </p>
            </section>

            <section class="mb-5">
                <h2 class="h3 border-start border-primary border-4 ps-3 mb-4 fw-bold">Sobre o Projeto</h2>
                <p class="text-secondary">
                    Desenvolvido por acadêmicos e professores, o projeto de extensão une tecnologia e responsabilidade social.
                    Realizamos campanhas de coleta e palestras em escolas e empresas locais.
                </p>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-dark text-white fw-bold py-3">
                    <i class="bi bi-calendar-event-fill me-2 text-primary"></i>Próximos Eventos
                </div>
                <div class="card-body">
                    
                    @php
                   
                        $eventosProximos = $avisos->filter(function($aviso) {
                            return $aviso->data ? !\Carbon\Carbon::parse($aviso->data)->isBefore(today()) : true;
                        })->sortBy(function($aviso) {
                            return $aviso->data ? \Carbon\Carbon::parse($aviso->data)->timestamp : strtotime('+1 year');
                        });
                    @endphp

                    @forelse($eventosProximos->take(3) as $aviso)
                        @php $dataCarbon = $aviso->data ? \Carbon\Carbon::parse($aviso->data) : null; @endphp
                        
                        <div class="pb-3 border-bottom mb-3">
                            @if($dataCarbon && $dataCarbon->isToday())
                                <span class="badge bg-warning text-dark mb-2 animate-pulse">É HOJE!</span>
                            @elseif($dataCarbon && $dataCarbon->isTomorrow())
                                <span class="badge bg-info text-white mb-2">Amanhã</span>
                            @endif
                            
                            <h6 class="fw-bold mb-1 text-dark">{{ $aviso->titulo }}</h6>
                            <p class="small text-muted mb-2">
                                <i class="bi bi-clock me-1"></i> Data: {{ $dataCarbon ? $dataCarbon->format('d/m/Y') : 'Comunicado Geral' }}
                            </p>
                            <p class="small text-secondary mb-2" style="text-align: justify;">{{ $aviso->descricao }}</p>

                            @auth
                                <form action="{{ route('app.avisos.delete', $aviso->id) }}" method="POST" onsubmit="return confirm('Deseja apagar este aviso?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0 m-0 btn-sm text-decoration-none" style="font-size: 0.8rem;">
                                        <i class="bi bi-trash3-fill me-1"></i>Remover
                                    </button>
                                </form>
                            @endauth
                        </div>
                    @empty
                        <p class="text-muted small text-center my-3">Nenhum evento ou aviso agendado para os próximos dias.</p>
                    @endforelse

                    @auth
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-primary btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modalNovoAviso">
                                <i class="bi bi-plus-circle me-1"></i> Adicionar Aviso
                            </button>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5 bg-white border-top">
    <div class="container">
        <h2 class="h4 text-center mb-5 fw-bold text-uppercase" style="letter-spacing: 2px;">Nossos Parceiros</h2>

        <div class="logos-slider">
            <div class="logos-slider-track">
                @foreach($parceiros as $parceiro)
                    <img src="{{ asset($parceiro->logo) }}" alt="{{ $parceiro->nome }}">
                @endforeach

                @foreach($parceiros as $parceiro)
                    <img src="{{ asset($parceiro->logo) }}" alt="{{ $parceiro->nome }}">
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="localizacao" class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-center">

            <div class="col-lg-5">
                <h2 class="h3 fw-bold mb-4 border-start border-primary border-4 ps-3">Onde nos encontrar</h2>

                <div class="mb-4">
                    <h5 class="fw-bold"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Endereço</h5>
                    <p class="text-secondary">Bloco L - Campus Uvaranas - UEPG<br>
                    Av. Carlos Cavalcanti, 4748 - Uvaranas<br>
                    Ponta Grossa - PR, 84030-900</p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold"><i class="bi bi-clock-fill text-primary me-2"></i>Horário de Funcionamento</h5>
                    <ul class="list-unstyled text-secondary">
                        <li>Segunda a Sexta: 08:00 às 18:00</li>
                        <li>Sábado: 09:00 às 12:00 (Apenas coleta)</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold"><i class="bi bi-telephone-fill text-primary me-2"></i>Contato</h5>
                    <p class="text-secondary">(42) 3220-3000<br>contato@lixoeletronico.uepg.br</p>
                </div>

                <div class="mt-4">
                    <a href="https://maps.app.goo.gl/qMxtNwwScaznrqaQA" target="_blank" class="btn btn-primary shadow-sm">
                        Ver no Google Maps
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1806.6056826287581!2d-50.10539018732683!3d-25.094705496485563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81b7f6f703cb3%3A0x66e2ab3ff3f57db4!2sHall%20Tecnol%C3%B3gico%20-%20Uvaranas%2C%20Ponta%20Grossa%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1778769115966!5m2!1spt-BR!2sbr"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@auth
<div class="modal fade" id="modalNovoAviso" tabindex="-1" aria-labelledby="modalNovoAvisoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white py-3">
                <h5 class="modal-title fw-bold" id="modalNovoAvisoLabel"><i class="bi bi-megaphone me-2 text-primary"></i>Criar Novo Comunicado</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @include('app.forms.form_avisos')
            
        </div>
    </div>
</div>
@endauth

@endsection