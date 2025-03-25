<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $senha;

    protected $listeners =
    [
        'editarCliente',
        'closeEditModal' => 'fecharModal'
    ];

    public function fecharModal(){
        $this->dispatch('hideModal');
    }


    public function render()
    {
        return view('livewire.cliente.edit');
    }

    public function editarCliente($clienteId)
    {
        $cliente = Cliente::find($clienteId);

        if ($cliente) {
            $this->clienteId = $cliente->id;
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->CPF = $cliente->CPF;
            $this->email = $cliente->email;
            $this->senha = $cliente->senha;
        }
    }

    public function salvar()
    {
        $cliente = Cliente::find($this->clienteId);

        if ($cliente) {
            $cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone'=>$this->telefone,
            'CPF' => $this->CPF,
            'email'=>$this->email,
            'senha' => $this->senha
            ]);

            $this->dispatch('ClienteAtualizado');
            $this->dispatch('fecharModalEdicao');
            session()->flash('message', 'Cliente Atualizado');
        }
    }
}
