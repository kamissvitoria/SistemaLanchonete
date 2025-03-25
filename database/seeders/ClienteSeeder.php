<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 120; $i++)
            
                Cliente::create([
                    'nome' => 'nometeste' . $i,
                    'email' => 'teste1@teste.com' . $i,
                    'telefone' => '18 12345-9876',
                    'endereco'=> 'rua teste vila teste',
                    'cpf'=> '12344 0003',
                    'senha'=> 'senha123'
    
                ]);
            }
        
}
