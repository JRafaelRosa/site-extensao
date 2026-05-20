@extends('layout.master')

@section('title', 'Login - Lixo Eletrônico')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="col-md-5">
            
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="fw-bold mb-0">Área Administrativa</h3>
                </div>
                
                <div class="card-body p-5">
                    <form action="#" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold text-secondary">E-mail Institucional</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control bg-light border-start-0" placeholder="exemplo@uepg.br" required autofocus>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold text-secondary">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock"></i></span>
                                <input type="password" name="password" id="password" class="form-control bg-light border-start-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label small text-muted" for="remember">Lembrar de mim</label>
                            </div>
                            <a href="#" class="small text-primary text-decoration-none">Esqueceu a senha?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary py-2 fw-bold shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Entrar no Sistema
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-light py-3 text-center">
                    <a href="{{ route('index') }}" class="text-muted small text-decoration-none">
                        <i class="bi bi-arrow-left me-1"></i> Voltar para o site público
                    </a>
                </div>
            </div>

            <p class="text-center text-muted mt-4 small">
                <i class="bi bi-shield-lock me-1"></i> Acesso restrito a coordenadores e bolsistas do projeto.
            </p>

        </div>
    </div>
</div>

@endsection