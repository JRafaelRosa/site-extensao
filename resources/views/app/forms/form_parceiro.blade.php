<!-- enctype é obrigatório para o upload de arquivos funcionar -->
<form action="{{ route('app.parceiros.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body p-4">
        
        <div class="mb-3">
            <label for="nome_parceiro" class="form-label fw-bold small text-secondary">Nome da Instituição / Empresa</label>
            <input type="text" name="nome" id="nome_parceiro" class="form-control bg-light" placeholder="Ex: UEPG, Prefeitura de Ponta Grossa..." required>
        </div>

        <div class="mb-3">
            <label for="tipo_parceiro" class="form-label fw-bold small text-secondary">Tipo de Parceiro</label>
            <select name="tipo" id="tipo_parceiro" class="form-select bg-light" required>
                <option value="" disabled selected>Selecione uma categoria...</option>
                <option value="Acadêmico">Acadêmico</option>
                <option value="Poder Público">Poder Público</option>
                <option value="Iniciativa Privada">Iniciativa Privada</option>
                <option value="ONG / Terceiro Setor">ONG / Terceiro Setor</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="logo_parceiro" class="form-label fw-bold small text-secondary">Logo do Parceiro</label>
            <input type="file" name="logo" id="logo_parceiro" class="form-control bg-light" accept="image/*">
            <div class="form-text text-muted" style="font-size: 11px;">
                Selecione uma imagem quadrada ou com fundo transparente (PNG, JPG). Opcional.
            </div>
        </div>

        <div class="mb-0">
            <label for="descricao_parceiro" class="form-label fw-bold small text-secondary">Descrição / Papel no Projeto</label>
            <textarea name="descricao" id="descricao_parceiro" rows="4" class="form-control bg-light" placeholder="Explique brevemente como este parceiro apoia o projeto de lixo eletrônico..."></textarea>
        </div>

    </div>
    
    <div class="modal-footer bg-light border-top-0 py-3">
        <button type="button" class="btn btn-secondary btn-sm fw-bold px-3" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm fw-bold px-4 shadow-sm">Salvar Parceiro</button>
    </div>
</form>