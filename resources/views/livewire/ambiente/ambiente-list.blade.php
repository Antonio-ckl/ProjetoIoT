<div>
    <div class="container mt-5">
           

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card">
                    <div class="shadow rounded-4">
                        {{-- <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #986745; color:#fffeed">
                            <h5 class="mb-0">Ambientes</h5>

                            <a class="btn btn-sm" style="background-color:#5e391f;color:#fffeed"
                                href={{ route('livewire/AmbienteList') }}>
                                <i class="bi bi-plus-circle"></i> Novo Ambiente</a>
                        </div> --}}
                        <div class="card-body p-0" style="background-color: #986745">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Descricao</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($Ambiente as $a)
                                        <tr>
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->nome }}</td>
                                            <td>{{ $a->descricao}}</td>
                                            <td>{{ $a->status}}</td>
                                            
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        