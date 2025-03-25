<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Editar extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $senha;

    public function mount($id){
        $cliente = Cliente::find($id);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->CPF = $cliente->CPF;
        $this->email = $cliente->email;
        $this->senha = $cliente->senha;
    }

    public function salvar(){
         $cliente = Cliente::find($this->clienteId);
         $cliente ->nome => $this->nome;
         $cliente->endereco => $this->endereco;
         $cliente->telefone=>$this->telefone;
         $cliente->CPF => $this->CPF;
         $cliente->email=>$this->email;
        $cliente-> senha => $this->senha;
    }



    public function render()
    {
        return view('livewire.cliente.editar');
    }
}
