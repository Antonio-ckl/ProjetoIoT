
<div>
    <div class="container mt-5">

       
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Aluno...">
                    </div>
                    <div class="col-md-3">
                        <select wire:model.live="perPage" class="form-select">
                            <option value="10">10 por pagina</option>
                            <option value="25">25 por pagina</option>
                            <option value="50">50 por pagina</option>
                            <option value="100">100 por pagina</option>
                        </select>
                    </div>
                </div>
           

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                 <div class="card">
                    <div class="shadow rounded-4">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #986745; color:#fffeed">
                            <h5 class="mb-0">Lista de Sensores</h5>

                            <a class="btn btn-sm" style="background-color:#5e391f;color:#fffeed"
                                href={{ route('sensor.create') }}>
                                <i class="bi bi-plus-circle"></i> Novo Sensor</a>
                        </div>

                <div class="card">
                    <div class="shadow rounded-4">
                       
                        <div class="card-body p-0" style="background-color: #986745">
                            <table class="table table-hover">
                                <thead class="table-light">
                                
                                    <th>codigo</th>
                                    <th>Tipo</th>
                                    <th>Descricao</th>
                                    <th>Ambiente ID</th>
                                    <th>Status</th>
                
                          
                                </thead>
                                <tbody>
                                    @foreach ($sensor as $s)
                                        <tr>
                                            <td>{{ $s->codigo }}</td>
                                            <td>{{ $s->tipo }}</td>
                                            <td>{{ $s->descricao}}</td>
                                            <td>{{$s->ambiente->id}}</td>
                                            <td>{{$s->status}}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        
