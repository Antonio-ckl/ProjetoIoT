<div class="mt-5">
   
   
    <div class="d-flex align-items-center justify-content-center vh-100" >
        
        <div class="card shadow-sm p-4" style="width: 500px; background-color: #595959">
            <h2 class="text-center mb-6" style="color:#ffffff; font-family:'Franklin Gothic Medium">Cadastro de
                Sensor</h2>
                
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="codigo" class="form-label" style="color: #fffeed">Codigo</label>
                        <input type="string" class="form-control" id="codigo" name="codigo"
                            placeholder="Insira seu codigo" wire:model.defer="codigo"
                            style="border-radius: 100px; background-color:#fff">
                        @error('codigo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                     <div class="mb-3">
                        <label for="tipo" class="form-label" style="color: #fff">Tipo</label>
                        <input type="string" class="form-control" id="tipo" name="tipo"
                            placeholder="Insira seu tipo" wire:model.defer="tipo"
                            style="border-radius: 100px; background-color:#fff">
                        @error('tipo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label" style="color: #fff">Descricao</label>
                        <input type="text" class="form-control" id="Descricao" name="descricao"
                            placeholder="Insira sua Descricao" wire:model.defer="descricao"
                            style="border-radius: 100px; background-color:#fff">
                        @error('descricao')
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
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                <div class="mb-3">
                    <label for="ambiente_id" class="form-label" style="color: #fff">Ambiente</label>
                    <select class="form-select" id="ambiente_id" wire:model.defer="ambiente_id" style="border-radius: 100px">
                        <option hidden>Selecione o Ambiente</option>
                        @foreach ($ambientes as $ambiente)
                            <option value={{ $ambiente->id }}> {{ $ambiente->nome }} </option>
                        @endforeach
                    </select>
                    @error('ambiente_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                    
                    <div class="mb-2">
                        <button type="submit" class="btn w-100"
                            style="background-color: #000000; color:#fff; border-radius:100px">Cadastrar</button>

                        <div class="mt-2">
                            <a class="btn btn-sm w-100" style="border-radius:100px; background-color: #ffff ;color:#000"
                                href={{ route('sensor.list') }}>
                                <i class="bi bi-box-arrow-left"></i> Voltar</a>
                        </div>
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>