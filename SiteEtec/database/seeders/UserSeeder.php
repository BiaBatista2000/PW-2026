<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Aluno 1',
                'email' => 'aluno1@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 2',
                'email' => 'aluno2@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 3',
                'email' => 'aluno3@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 4',
                'email' => 'aluno4@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 5',
                'email' => 'aluno5@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 6',
                'email' => 'aluno6@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 7',
                'email' => 'aluno7@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 8',
                'email' => 'aluno8@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 9',
                'email' => 'aluno9@etec.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Aluno 10',
                'email' => 'aluno10@etec.com',
                'password' => Hash::make('123456'),
            ],
        ]);
    }
}