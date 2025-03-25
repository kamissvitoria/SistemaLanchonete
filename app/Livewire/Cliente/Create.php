<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $senha;

    public function render()
    {
        return view('livewire.cliente.create');
    }

    public function store()
    {
        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone'=>$this->telefone,
            'CPF' => $this->CPF,
            'email'=>$this->email,
            'senha' => $this->senha
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}

