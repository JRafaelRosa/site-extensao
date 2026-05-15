@extends('layout.master')

@section('title', 'Lixo Eletrônico - Início')

@section('content')

<!-- Hero Section: Destaque Principal -->
<section class="bg-primary text-light py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Projeto de Extensão: Coleta de Lixo Eletrônico</h1>
        <p class="lead">Promovendo a sustentabilidade e o descarte correto em nossa região.</p>
    </div>
</section>

<div class="container pb-5">
    <div class="row g-4">
        
        <!-- Coluna da Esquerda (Conteúdo Principal) -->
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

        <!-- Coluna da Direita (Avisos do ADM) -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-dark text-white fw-bold py-3">
                    <i class="bi bi-megaphone-fill me-2"></i>Avisos Recentes
                </div>
                <div class="card-body">
                    <!-- Exemplo de Aviso -->
                    <div class="pb-3 border-bottom mb-3">
                        <span class="badge bg-primary mb-2">Novo</span>
                        <h6 class="fw-bold mb-1">Próxima Coleta Coletiva</h6>
                        <p class="small text-muted mb-2">Data: 20 de Junho - Campus Uvaranas</p>
                        <p class="small text-secondary">Estaremos recebendo monitores, teclados e baterias das 09h às 17h.</p>
                    </div>

                    <!-- Botão de exemplo para o ADM (Sua ideia do POST) -->
                    {{-- Aqui você usará o @auth futuramente --}}
                    <div class="d-grid mt-3">
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAviso">
                            + Adicionar Aviso (Admin)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seção de Parceiros com Carrossel -->
<section class="py-5 bg-white border-top">
    <div class="container">
        <h2 class="h4 text-center mb-5 fw-bold text-uppercase" style="letter-spacing: 2px;">Nossos Parceiros</h2>
        
        <div class="logos-slider">
            <div class="logos-slider-track">
                <!-- Lista de Logos (Primeira vez) -->
                <img src="https://via.placeholder.com/150x60?text=UEPG" alt="UEPG">
                <img src="https://via.placeholder.com/150x60?text=Prefeitura" alt="Prefeitura">
                <img src="https://via.placeholder.com/150x60?text=Empresa+A" alt="Parceiro A">
                <img src="https://via.placeholder.com/150x60?text=Empresa+B" alt="Parceiro B">
                <img src="https://via.placeholder.com/150x60?text=ONG+Eco" alt="ONG Eco">
                <img src="https://via.placeholder.com/150x60?text=Instituto+X" alt="Instituto X">

                <!-- Repetição dos mesmos Logos (Para o loop infinito não ter buracos) -->
                <img src="https://via.placeholder.com/150x60?text=UEPG" alt="UEPG">
                <img src="https://via.placeholder.com/150x60?text=Prefeitura" alt="Prefeitura">
                <img src="https://via.placeholder.com/150x60?text=Empresa+A" alt="Parceiro A">
                <img src="https://via.placeholder.com/150x60?text=Empresa+B" alt="Parceiro B">
                <img src="https://via.placeholder.com/150x60?text=ONG+Eco" alt="ONG Eco">
                <img src="https://via.placeholder.com/150x60?text=Instituto+X" alt="Instituto X">
            </div>
        </div>
    </div>
</section>

<section id="localizacao" class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-center">
            
            <!-- Coluna de Informações -->
            <div class="col-lg-5">
                <h2 class="h3 fw-bold mb-4 border-start border-primary border-4 ps-3">Onde nos encontrar</h2>
                
                <div class="mb-4">
                    <h5 class="fw-bold"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Endereço</h5>
                    <p class="text-secondary">Campus Uvaranas - UEPG<br>
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

                {{-- Espaço para o botão de ADM que você comentou --}}
                <div class="mt-4">
                    <button class="btn btn-primary shadow-sm">
                        Ver no Google Maps
                    </button>
                </div>
            </div>

            <!-- Coluna do Mapa -->
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
@endsection