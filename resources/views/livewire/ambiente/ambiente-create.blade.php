<div class="mt-5">
    @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
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
                        <input type="string" class="form-control" id="descricao" name="descricao"
                            placeholder="Insira sua Descricao" wire:model.defer="descricao"
                            style="border-radius: 100px; background-color:#fffeed">
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label" style="color: #fffeed; ">Série atual</label>
                        <select class="form-select" id="status" name= "status" wire:model.defer="status"
                            style="border-radius: 100px; background-color:#fffeed">
                            <option hidden>Selecione seu status</option>

                            <option value="1">Ativo</option>
                            <option value="0">Desativado</option>
                        </select>
                    </div>
                    
                    <div class="mb-2">
                        <button type="submit" class="btn w-100"
                            style="background-color: #5e391f; color:#fffeed; border-radius:100px">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>