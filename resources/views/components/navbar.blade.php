<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="{{ route('index') }}">Lixo Eletrônico</a>

    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('sobre-nos') }}">Sobre-Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('parceiros') }}">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('pontos-coleta') }}">Pontos de Coleta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('avisos') }}">Avisos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>