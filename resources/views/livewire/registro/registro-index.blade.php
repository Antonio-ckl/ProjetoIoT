<div>
    <div class="container mt-5">
           

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card">
                    
                        <div class="card-body p-0" style="background-color: #986745">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <th>ID</th>
                                    <th>Sensor_id</th>
                                    <th>valor</th>
                                    <th>unidade</th>
                                    <th>Data Hora</th>

                                </thead>
                                <tbody>
                                    @foreach ($registros as $r)
                                        <tr>
                                            <td>{{ $r->id }}</td>
                                            <td>{{ $r->sensor_id }}</td>
                                            <td>{{ $r->valor}}</td>
                                            <td>{{ $r->unidade}}</td>
                                            <td>{{ $r->data_hora}}</td>

                                            
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        