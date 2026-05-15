<footer class="bg-primary text-light mt-5">
    <div class="container py-4">
        <div class="row">
    
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Lixo Eletrônico</h5>
                <p class="small">
                    Projeto de Extensão Universitária focado no descarte correto e conscientização sobre resíduos tecnológicos em Ponta Grossa.
                </p>
            </div>


            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Links Úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('index') }}" class="text-light text-decoration-none small">Início</a></li>
                    <li><a href="{{ route('sobre-nos') }}" class="text-light text-decoration-none small">Sobre o Projeto</a></li>
                    <li><a href="{{ route('pontos-coleta') }}" class="text-light text-decoration-none small">Onde Descartar</a></li>
                    <li><a href="{{ route('avisos') }}" class="text-light text-decoration-none small">Últimos Avisos</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Realização</h5>
                <p class="small mb-0">Universidade Estadual de Ponta Grossa</p>
                <p class="small">UEPG - Campus Uvaranas</p>
            </div>
        </div>

        <hr class="bg-light">

        <div class="row">
            <div class="col text-center">
                <p class="small mb-0">&copy; {{ date('Y') }} Lixo Eletrônico - Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
    <!-- Dentro do seu Footer, abaixo das informações da faculdade -->
<div class="mt-3 pt-3 border-top border-white border-opacity-10 text-center">
    <p class="small mb-0 opacity-75">
        <strong>Responsável:</strong> Prof. Dr. Zito Palhano da Fonseca
    </p>
</div>
</footer>