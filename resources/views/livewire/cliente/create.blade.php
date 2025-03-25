<div class="mt-5">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close"
        data-bs dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="card">
        <h5 class="card-header">Cadastro de Clientes</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" 
                    placeholder="Ex: Cliente" wire:model.defer="nome">
                </div>
           
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereco</label>
                    <input class="form-control" id="endereco" name="endereco" wire:model.defer="endereco">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" 
                           wire:model.defer="telefone" placeholder="(XX) XXXXX-XXXX">
                </div>
                

                <div class="mb-3">
                    <label for="CPF" class="form-label">CPF</label>
                    <input type="CPF" class="form-control" id="CPF" name="CPF" 
                     wire:model.defer="CPF">
                </div>

                <div class="mb-3">
                    <label for="emaik" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" 
                    placeholder="Ex: teste@teste.com" wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="ex:******"
                        wire:model.defer="senha">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
