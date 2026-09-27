<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('fornecedores')->insert([
            [
                'nome' => 'Ana',
                'site' => 'ana.com.br',
                'uf' => 'SP',
                'email' => 'contato@ana.com.br',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Jayane',
                'site' => 'jayane.com.br',
                'uf' => 'SP',
                'email' => 'contato@jayane.com.br',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}