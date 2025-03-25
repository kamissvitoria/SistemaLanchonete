<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Index extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $senha;

    protected $listeners = [
        'AbrirModalEdicao',
        'ClienteAtualizado' => 'render'
    ];

    public function render()
    {
        $clientes = Cliente::all();

        return view('livewire.cliente.index', compact('clientes'));
    }

    public function abrirModalVizualizar($clienteId)
    {
        $cliente = Cliente::find($clienteId);
        if ($cliente) {
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->CPF = $cliente->CPF;
            $this->email = $cliente->email;
            $this->senha = $cliente->senha;
        }
    }
    
    public function AbrirModalExclusao($clienteId)
    {
        $this->clienteId = $clienteId;
    }

    public function abrirModalEdicao($clienteId){
        $this->dispatch('editarCliente', clienteId: $clienteId);
    }

    public function excluir()
    {
        if ($this->clienteId) {
            Cliente::find($this->clienteId)->delete();
        }
    }


}
