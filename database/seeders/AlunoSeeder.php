<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $alunos = [
            ['nome' => 'João Vitor Kutianski', 'email' => 'joao.kutianski@email.com',  'curso' => 'Engenharia de Software'],
            ['nome' => 'Maria Silva',          'email' => 'maria.silva@email.com',     'curso' => 'Engenharia de Software'],
            ['nome' => 'Carlos Silveira',      'email' => 'carlos.silveira@email.com', 'curso' => 'Direito'],
            ['nome' => 'Ana Paula Souza',      'email' => 'ana.souza@email.com',       'curso' => 'Administração'],
            ['nome' => 'Pedro Henrique Lima',  'email' => 'pedro.lima@email.com',      'curso' => 'Engenharia Civil'],
            ['nome' => 'Juliana Costa',        'email' => 'juliana.costa@email.com',   'curso' => 'Engenharia de Software'],
            ['nome' => 'Rafael Oliveira',      'email' => 'rafael.oliveira@email.com', 'curso' => 'Medicina'],
            ['nome' => 'Beatriz Almeida',      'email' => 'beatriz.almeida@email.com', 'curso' => 'Direito'],
            ['nome' => 'Lucas Ferreira',       'email' => 'lucas.ferreira@email.com',  'curso' => 'Administração'],
            ['nome' => 'Camila Rodrigues',     'email' => 'camila.rodrigues@email.com','curso' => 'Engenharia de Software'],
        ];

        foreach ($alunos as $aluno) {
            Aluno::create($aluno);
        }
    }
}