<footer class="bg-primary text-light mt-5">
    <div class="container py-4">
        <div class="row">
    
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Lixo Eletrônico</h5>
                <p class="small mb-0">
                    Projeto de Extensão Universitária focado no descarte correto e conscientização sobre resíduos tecnológicos em Ponta Grossa.
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Links Úteis</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1"><a href="{{ route('index') }}" class="text-light text-decoration-none small"><i class="bi bi-chevron-right me-1" style="font-size: 0.75rem;"></i> Início</a></li>
                    <li class="mb-1"><a href="{{ route('sobre-nos') }}" class="text-light text-decoration-none small"><i class="bi bi-chevron-right me-1" style="font-size: 0.75rem;"></i> Sobre o Projeto</a></li>
                    <li class="mb-1"><a href="{{ route('pontos-coleta') }}" class="text-light text-decoration-none small"><i class="bi bi-chevron-right me-1" style="font-size: 0.75rem;"></i> Onde Descartar</a></li>
                    <li><a href="{{ route('avisos') }}" class="text-light text-decoration-none small"><i class="bi bi-chevron-right me-1" style="font-size: 0.75rem;"></i> Últimos Avisos</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Realização</h5>
                <p class="small mb-0">Universidade Estadual de Ponta Grossa</p>
                <p class="small mb-0">UEPG - Campus Uvaranas</p>
            </div>
        </div>

        <hr class="bg-light opacity-25 my-3">

        <div class="row">
            <div class="col text-center">
                <p class="small mb-1">&copy; {{ date('Y') }} Lixo Eletrônico - Todos os direitos reservados.</p>
                <p class="small mb-0 opacity-75" style="font-size: 0.8rem;">
                    <strong>Coordenador Responsável:</strong> Prof. Dr. Zito Palhano da Fonseca
                </p>
            </div>
        </div>
    </div>
</footer>