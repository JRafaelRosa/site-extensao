@extends('layout.master')

@section('title', 'Avisos e Eventos - Lixo Eletrônico')

@section('content')

@php
    // Compara a data do evento com o dia de hoje (considerando apenas a data, sem horas)
    $proximos = $avisos->filter(fn($aviso) => !\Carbon\Carbon::parse($aviso->data)->isBefore(today()));
    $anteriores = $avisos->filter(fn($aviso) => \Carbon\Carbon::parse($aviso->data)->isBefore(today()));
@endphp

<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Comunicados e Eventos</h1>
        <p class="lead">Fique por dentro das próximas coletas e novidades do projeto na UEPG.</p>
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
            <h6 class="fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i> Erro ao publicar aviso:</h6>
            <ul class="mb-0 small">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-5">

        <div class="col-lg-8">

            <div class="mb-5">
                <h2 class="h4 fw-bold mb-4 border-start border-primary border-4 ps-3 text-uppercase">Próximos Eventos</h2>

                @forelse($proximos as $aviso)
                    @php
                        $dataCarbon = \Carbon\Carbon::parse($aviso->data);
                    @endphp

                    <div class="card border-primary shadow-sm mb-4">
                        <div class="row g-0">
                            <div class="col-md-3 bg-primary text-white d-flex flex-column justify-content-center align-items-center p-3 text-center">
                                <span class="display-6 fw-bold">
                                    {{ $dataCarbon->format('d') }}
                                </span>
                                <span class="text-uppercase small fw-bold">
                                    {{ $dataCarbon->translatedFormat('F') }}
                                </span>
                            </div>

                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title fw-bold mb-0">{{ $aviso->titulo }}</h5>

                                        @if($dataCarbon->isToday())
                                            <span class="badge bg-warning text-dark fw-bold animate-pulse">É HOJE!</span>
                                        @else
                                            <span class="badge bg-success text-white">Confirmado</span>
                                        @endif
                                    </div>

                                    <p class="card-text text-secondary small">{{ $aviso->descricao }}</p>

                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <span class="small text-muted">
                                                <i class="bi bi-clock me-1"></i> Horário Integral
                                            </span>
                                            <span class="small text-muted">
                                                <i class="bi bi-geo-alt me-1"></i> Campus UEPG
                                            </span>
                                        </div>

                                        @auth
                                            <form action="{{ route('app.avisos.delete', $aviso->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja apagar este aviso?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger p-0 m-0 align-baseline small text-decoration-none">
                                                    <i class="bi bi-trash3-fill me-1"></i>Excluir
                                                </button>
                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted small ps-3">Nenhum evento agendado para os próximos dias.</p>
                @endforelse
            </div>

            <div class="mb-5">
                <h2 class="h4 fw-bold mb-4 border-start border-secondary border-4 ps-3 text-uppercase text-muted">Avisos Anteriores</h2>

                <div class="list-group list-group-flush shadow-sm rounded border">
                    @forelse($anteriores as $aviso)
                        <div class="list-group-item p-3 opacity-75 bg-light">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <h6 class="mb-1 fw-bold text-dark">{{ $aviso->titulo }}</h6>
                                <div class="text-end d-flex align-items-center gap-2">
                                    <span class="badge bg-secondary text-white">Encerrado</span>
                                    <small class="text-muted">
                                        {{ \Carbon\Carbon::parse($aviso->data)->format('d/m/Y') }}
                                    </small>

                                    @auth
                                        <form action="{{ route('app.avisos.delete', $aviso->id) }}" method="POST" onsubmit="return confirm('Deseja apagar este aviso do histórico?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0 ms-2"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                            <p class="mb-1 small text-secondary mt-2">{{ $aviso->descricao }}</p>
                        </div>
                    @empty
                        <div class="list-group-item p-3 text-muted small">Nenhum aviso histórico registrado.</div>
                    @endforelse
                </div>
            </div>

            @auth
                <div class="text-end mt-4">
                    <button class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#modalNovoAviso">
                        <i class="bi bi-plus-circle me-2"></i>Novo Aviso (Painel do Administrador)
                    </button>
                </div>
            @endauth
        </div>

        <div class="col-lg-4">
            <div class="position-sticky" style="top: 20px;">
                <div class="card border-0 bg-light shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4"><i class="bi bi-heart-fill text-danger me-2"></i>Como Ajudar?</h4>

                        <div class="mb-4">
                            <h6 class="fw-bold"><i class="bi bi-1-circle-fill text-primary me-2"></i>Descarte Correto</h6>
                            <p class="small text-secondary">Não jogue eletrônicos no lixo comum. Traga-os para nossos pontos de coleta no CSL.</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold"><i class="bi bi-2-circle-fill text-primary me-2"></i>Divulgação</h6>
                            <p class="small text-secondary">Compartilhe nossas datas de mutirão com seus amigos, familiares e grupos de WhatsApp.</p>
                        </div>

                        <div class="mb-0">
                            <h6 class="fw-bold"><i class="bi bi-3-circle-fill text-primary me-2"></i>Voluntariado</h6>
                            <p class="small text-secondary">É aluno da UEPG? Fique atento aos editais de extensão para participar ativamente da equipe.</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-primary text-white rounded-4 shadow-sm">
                    <h5 class="fw-bold mb-3">Dúvidas?</h5>
                    <p class="small mb-4 text-white-50">Se você tem uma grande quantidade de material, entre em contato para agendar uma coleta especial.</p>
                    <a href="mailto:contato@lixoeletronico.uepg.br" class="btn btn-light btn-sm w-100 fw-bold text-primary">Enviar E-mail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@auth
<div class="modal fade" id="modalNovoAviso" tabindex="-1" aria-labelledby="modalNovoAvisoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold" id="modalNovoAvisoLabel"><i class="bi bi-megaphone me-2"></i>Publicar Novo Comunicado</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('app.avisos.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="titulo" class="form-label small fw-bold text-secondary text-uppercase">Título do Aviso</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Ex: Mutirão de Coleta no Bloco C">
                    </div>

                    <div class="mb-3">
                        <label for="data" class="form-label small fw-bold text-secondary text-uppercase">Data do Evento</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label small fw-bold text-secondary text-uppercase">Descrição / Conteúdo</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="4" required placeholder="Detalhes sobre o horário, ponto de encontro e materiais aceitos..."></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light p-3">
                    <button type="button" class="btn btn-outline-secondary btn-sm px-3" data-bs-modal="dismiss">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-sm px-4 fw-bold">Publicar Aviso</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth

@endsection
