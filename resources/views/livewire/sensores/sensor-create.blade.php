<div class="mt-5">
   
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #fff">
        <div class="card shadow-sm p-4" style="width: 500px; background-color: #0700ca">
            <h2 class="text-center mb-6" style="color:#ffffff; font-family:'Franklin Gothic Medium">Cadastro de
                Ambiente</h2>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="codigo" class="form-label" style="color: #fffeed">Codigo</label>
                        <input type="string" class="form-control" id="codigo" name="codigo"
                            placeholder="Insira seu codigo" wire:model.defer="codigo"
                            style="border-radius: 100px; background-color:#fff">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                     <div class="mb-3">
                        <label for="tipo" class="form-label" style="color: #fff">Tipo</label>
                        <input type="string" class="form-control" id="tipo" name="tipo"
                            placeholder="Insira seu tipo" wire:model.defer="tipo"
                            style="border-radius: 100px; background-color:#fff">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label" style="color: #fff">Descricao</label>
                        <input type="text" class="form-control" id="Descricao" name="Descricao"
                            placeholder="Insira sua Descricao" wire:model.defer="Descricao"
                            style="border-radius: 100px; background-color:#fff">
                        @error('Descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label" style="color: #fff; ">Status</label>
                        <select class="form-select" id="status" name= "status" wire:model.defer="status"
                            style="border-radius: 100px; background-color:#fff">
                            <option hidden>Selecione seu status</option>
                        <option value="0">Desativado</option>
                        <option value="1">Ativado</option>
                            
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ambiente" class="form-label" style="color: #fff; ">Ambiente</label>
                        <select class="form-select" id="ambiente" name= "ambiente" wire:model.defer="ambiente"
                            style="border-radius: 100px; background-color:#fff">
                            <option hidden>Selecione seu status</option>

                             
                            
                        </select>
                    </div>
                    
                    <div class="mb-2">
                        <button type="submit" class="btn w-100"
                            style="background-color: #000000; color:#fff; border-radius:100px">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>