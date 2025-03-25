<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>email</th>
                        <th>telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nome }}</td>
                            <td>{{ $t->email }}</td>
                            <td>{{ $t->telefone }}</td>
                            <td>
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                                    wire:click="abrirModalVizualizar({{ $t->id }})">Visualizar</button>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal" wire:click="abrirModalEdicao({{$t->id}})">Editar</button>

                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    wire:click="AbrirModalExclusao({{ $t->id}})">Excluir</button>
                                    <!--O route serve para ser acessado através desse nome-->
                                    <a href="{{route('cliente.editar', ['id' => $t->id])}}"
                                        class="btn btn-info btn-sm">Editar Sem Modal</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <livewire:cliente.edit>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir o cliente??</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" wire:click="excluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>




    <!-- -->
    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>email:</strong>{{ $email }}</p>
                    <p><strong>telefone:</strong>{{ $telefone}}</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


</div>