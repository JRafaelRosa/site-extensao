@extends('layout.master')

@section('title', 'Sobre Nós - Lixo Eletrônico')

@section('content')

<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Nossa Iniciativa</h1>
        <p class="lead text-white-50">Transformando a tecnologia em sustentabilidade dentro da UEPG.</p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-7">
            <h2 class="h3 fw-bold mb-4 border-start border-primary border-4 ps-3">Quem Somos</h2>
            <p class="text-secondary text-justify">
                O projeto de extensão <strong>Lixo Eletrônico</strong> é uma initiative acadêmica que busca mitigar os impactos ambientais causados pelo descarte incorreto de equipamentos tecnológicos. Formado por uma equipe multidisciplinar de estudantes e professores, o projeto atua como um elo entre a comunidade e o destino final adequado para o hardware obsoleto.
            </p>
            <p class="text-secondary text-justify">
                Nosso trabalho vai além da coleta: focamos na educação ambiental e na conscientização sobre o ciclo de vida dos produtos eletrônicos, garantindo que componentes que possuem metais pesados não contaminem o solo e os recursos hídricos da nossa região.
            </p>

            <div class="mt-5 p-4 bg-light rounded-3 border-start border-warning border-4 shadow-sm">
                <h4 class="h5 fw-bold"><i class="bi bi-info-circle-fill me-2 text-warning"></i>Nota Importante sobre a Coleta</h4>
                <p class="small text-muted mb-0">
                    Para garantir a eficiência da nossa logística e a segurança ambiental do armazenamento, o projeto foca exclusivamente em <strong>lixo eletrônico de informática e telecomunicações</strong>.
                    <span class="text-danger fw-bold">Não aceitamos</span> eletrodomésticos de linha branca ou uso doméstico (como batedeiras e liquidificadores) e nem pilhas ou baterias avulsas.
                </p>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card border-0 shadow-sm overflow-hidden rounded-4">
                <div class="card-body p-0">
                    <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&q=80&w=800" class="img-fluid" alt="Tecnologia e Sustentabilidade">
                </div>
                <div class="p-4">
                    <div class="d-flex mb-3">
                        <div class="me-3 text-primary h4"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Compromisso Ambiental</h6>
                            <p class="small text-muted mb-0">Descarte que respeita as normas da legislação vigente.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-3 text-primary h4"><i class="bi bi-people-fill"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Extensão Universitária</h6>
                            <p class="small text-muted mb-0">Levando o conhecimento da academia para a comunidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-dark text-light py-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <h2 class="display-6 fw-bold text-primary">01</h2>
                <h5 class="fw-bold">Conscientizar</h5>
                <p class="small text-white-50">Educar sobre os riscos do descarte incorreto de metais pesados.</p>
            </div>
            <div class="col-md-4 border-start border-secondary border-opacity-25 border-end">
                <h2 class="display-6 fw-bold text-primary">02</h2>
                <h5 class="fw-bold">Coletar</h5>
                <p class="small text-white-50">Oferecer pontos de entrega voluntária para hardware em desuso.</p>
            </div>
            <div class="col-md-4">
                <h2 class="display-6 fw-bold text-primary">03</h2>
                <h5 class="fw-bold">Destinar</h5>
                <p class="small text-white-50">Encaminhar o material para reciclagem e manufatura reversa.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 border-top bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                
                <h5 class="text-uppercase text-muted small fw-bold mb-0" style="letter-spacing: 1px;">Coordenação e Responsabilidade</h5>

                <div class="card border-0 shadow-sm position-relative" style="margin-top: 80px !important;">

                    <div class="position-absolute top-0 start-50 translate-middle" style="z-index: 5;">
                        <img src="{{ asset('img/zito.png') }}"
                             alt="Prof. Dr. Zito Palhano da Fonseca"
                             class="rounded-circle border border-4 border-white shadow-sm"
                             style="width: 120px; height: 120px; object-fit: cover;">
                    </div>

                    <div class="card-body p-4" style="padding-top: 80px !important;">
                        <h4 class="fw-bold mb-1">Prof. Dr. Zito Palhano da Fonseca</h4>
                        <p class="text-primary mb-3 fw-semibold">Coordenador Geral do Projeto</p>
                        <p class="small text-secondary mb-0">
                            Responsável técnico pelas atividades de extensão e parcerias institucionais vinculadas ao projeto de descarte de resíduos tecnológicos.
                        </p>

                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-link text-decoration-none">
                                <i class="bi bi-file-earmark-person"></i> Currículo Lattes
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
