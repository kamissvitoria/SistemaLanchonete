<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;

    public function render()
    {
        return view('livewire.produto.create');
    }

    public function store()
    {
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor'=>$this->valor
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
