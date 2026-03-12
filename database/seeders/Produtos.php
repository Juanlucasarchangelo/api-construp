<?php

namespace Database\Seeders;

use App\Models\Produtos as ModelsProdutos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produtos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsProdutos::create([
            'nome' => 'Cimento CP II',
            'descricao' => 'Cimento Portland composto para uso geral.',
            'marca' => 'Votorantim',
            'preco' => 25.50,
            'estoque' => 100,
        ]);
    }
}
