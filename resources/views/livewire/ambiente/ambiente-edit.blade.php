<div class="mt-5">
   
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #fffeed">
        <div class="card shadow-sm p-4" style="width: 500px; background-color: #986745">
            <h2 class="text-center mb-6" style="color:#5e391f; font-family:'Franklin Gothic Medium">Cadastro de
                Ambiente</h2>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="color: #fffeed">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Insira seu Ambiente" wire:model.defer="nome"
                            style="border-radius: 100px; background-color:#fffeed">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label" style="color: #fffeed">Descricao</label>
                        <input type="text" class="form-control" id="Descricao" name="Descricao"
                            placeholder="Insira sua Descricao" wire:model.defer="Descricao"
                            style="border-radius: 100px; background-color:#fffeed">
                        @error('Descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label" style="color: #fffeed; ">Série atual</label>
                        <select class="form-select" id="status" name= "status" wire:model.defer="status"
                            style="border-radius: 100px; background-color:#fffeed">
                            <option hidden>Selecione seu status</option>

                            <option value="Ativo">Ativo</option>
                            <option value="Disativado">Desativado</option>
                        </select>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn" style="background-color: #5e391f;color:#fffeed">
                            <i class="bi bi-save"></i> Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>