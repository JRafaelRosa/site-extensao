<form action="{{ route('app.avisos.store') }}" method="POST">
    @csrf
    <div class="modal-body p-4">
        <div class="mb-3">
            <label for="titulo" class="form-label fw-bold small text-secondary">Título do Aviso / Evento</label>
            <input type="text" name="titulo" id="titulo" class="form-control bg-light" placeholder="Ex: Mutirão de Coleta Bloco CSL" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label fw-bold small text-secondary">Data do Evento <span class="text-muted fw-normal">(Opcional)</span></label>
            <input type="date" name="data" id="data" class="form-control bg-light">
        </div>

        <div class="mb-0">
            <label for="descricao" class="form-label fw-bold small text-secondary">Descrição Detalhada</label>
            <textarea name="descricao" id="descricao" rows="4" class="form-control bg-light" placeholder="Escreva aqui os detalhes, horários e orientações..." required></textarea>
        </div>

    </div>
    
    <div class="modal-footer bg-light border-top-0 py-3">
        <button type="button" class="btn btn-secondary btn-sm fw-bold px-3" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm fw-bold px-4 shadow-sm">Publicar Aviso</button>
    </div>
</form>