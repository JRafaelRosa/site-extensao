@extends('layout.master')

@section('title', 'Avisos e Eventos - Lixo Eletrônico')

@section('content')

<!-- Header -->
<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Comunicados e Eventos</h1>
        <p class="lead">Fique por dentro das próximas coletas e novidades do projeto na UEPG.</p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-5">
        
        <!-- Coluna Principal: Avisos e Eventos -->
        <div class="col-lg-8">
            
            <!-- Seção: Próximos Eventos -->
            <div class="mb-5">
                <h2 class="h4 fw-bold mb-4 border-start border-primary border-4 ps-3 text-uppercase">Próximos Eventos</h2>
                
                <!-- Card de Evento Destacado -->
                <div class="card border-primary shadow-sm mb-4">
                    <div class="row g-0">
                        <div class="col-md-3 bg-primary text-white d-flex flex-column justify-content-center align-items-center p-3 text-center">
                            <span class="display-6 fw-bold">20</span>
                            <span class="text-uppercase">Junho</span>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Grande Mutirão de Coleta - Campus Uvaranas</h5>
                                <p class="card-text text-secondary small">Estaremos posicionados em frente à Central de Salas (CSL) para receber seu hardware antigo.</p>
                                <div class="d-flex align-items-center gap-3 mt-3">
                                    <span class="small text-muted"><i class="bi bi-clock me-1"></i> 09:00 - 17:00</span>
                                    <span class="small text-muted"><i class="bi bi-geo-alt me-1"></i> CSL / UEPG</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seção: Histórico (Avisos que já passaram) -->
            <div class="mb-5">
                <h2 class="h4 fw-bold mb-4 border-start border-secondary border-4 ps-3 text-uppercase text-muted">Avisos Anteriores</h2>
                
                <div class="list-group list-group-flush shadow-sm rounded border">
                    <div class="list-group-item p-3 opacity-75">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold">Palestra: O Ciclo de Vida do Silício</h6>
                            <small class="text-muted">15/04/2026</small>
                        </div>
                        <p class="mb-1 small text-secondary">Evento realizado no auditório do PDE com foco em alunos de engenharia.</p>
                    </div>
                    <div class="list-group-item p-3 opacity-75">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold">Campanha de Descarte no Campus Central</h6>
                            <small class="text-muted">10/03/2026</small>
                        </div>
                        <p class="mb-1 small text-secondary">Coleta realizada com sucesso na Praça Santos Andrade.</p>
                    </div>
                </div>
            </div>

            <!-- Botão Admin (Aparece apenas para o Professor/Adm futuramente) -->
            <div class="text-end mt-4">
                <button class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#modalNovoAviso">
                    <i class="bi bi-plus-circle me-2"></i>Novo Aviso (Acesso Restrito)
                </button>
            </div>
        </div>

        <!-- Coluna Lateral: Como Ajudar -->
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

                <!-- Box de Contato Rápido -->
                <div class="p-4 bg-primary text-white rounded-4 shadow-sm">
                    <h5 class="fw-bold mb-3">Dúvidas?</h5>
                    <p class="small mb-4 text-white-50">Se você tem uma grande quantidade de material, entre em contato para agendar uma coleta especial.</p>
                    <a href="mailto:contato@lixoeletronico.uepg.br" class="btn btn-light btn-sm w-100 fw-bold text-primary">Enviar E-mail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection