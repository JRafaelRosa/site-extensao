<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="{{ route('index') }}">Lixo Eletrônico</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-lg-3 align-items-center">
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

                @auth
                    <li class="nav-item">
                        <form action="{{ route('app.logout') }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja realmente sair do sistema?')">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm px-3 fw-bold shadow-sm flex-sm-fill">
                                <i class="bi bi-box-arrow-right me-1"></i>Sair
                            </button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="btn btn-light text-primary btn-sm px-3 fw-bold shadow-sm" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Entrar
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>