<form action="{{ route('app.pontos-coleta.store') }}" method="POST">
    @csrf
    <div class="modal-body p-4">
        
        <div class="mb-3">
            <label for="nome_ponto" class="form-label fw-bold small text-secondary">Identificação do Local</label>
            <input type="text" name="nome" id="nome_ponto" class="form-control bg-light" placeholder="Ex: Bloco CSL - Engenharia, Hall Tecnológico..." required>
        </div>

        <div class="mb-3">
            <label for="localizacao_ponto" class="form-label fw-bold small text-secondary">Endereço / Referência Detalhada</label>
            <input type="text" name="localizacao" id="localizacao_ponto" class="form-control bg-light" placeholder="Ex: Campus Uvaranas - Av. Carlos Cavalcanti, 4748" required>
        </div>

        <div class="mb-3">
            <label for="horario_ponto" class="form-label fw-bold small text-secondary">Horário de Funcionamento</label>
            <input type="text" name="horario" id="horario_ponto" class="form-control bg-light" placeholder="Ex: Segunda a Sexta, das 08h às 18h" required>
        </div>

        <div class="mb-0">
            <label for="descricao_ponto" class="form-label fw-bold small text-secondary">Instruções de Descarte <span class="text-muted fw-normal">(Opcional)</span></label>
            <textarea name="descricao" id="descricao_ponto" rows="3" class="form-control bg-light" placeholder="Ex: Aceita pilhas, baterias e pequenos eletrodomésticos. Não descartar lâmpadas."></textarea>
        </div>

    </div>
    
    <div class="modal-footer bg-light border-top-0 py-3">
        <button type="button" class="btn btn-secondary btn-sm fw-bold px-3" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm fw-bold px-4 shadow-sm">Salvar Ponto</button>
    </div>
</form>