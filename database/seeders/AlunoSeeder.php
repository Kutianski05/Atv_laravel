<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $alunos = [
            ['nome' => 'João Vitor Kutianski', 'email' => 'joao.kutianski@exemplo.com',  'curso' => 'Engenharia de Software'],
            ['nome' => 'Maria Silva',          'email' => 'maria.silva@exemplo.com',     'curso' => 'Engenharia de Software'],
            ['nome' => 'Carlos Silveira',      'email' => 'carlos.silveira@exemplo.com', 'curso' => 'Direito'],
            ['nome' => 'Ana Paula Souza',      'email' => 'ana.souza@exemplo.com',       'curso' => 'Administração'],
            ['nome' => 'Pedro Henrique Lima',  'email' => 'pedro.lima@exemplo.com',      'curso' => 'Engenharia Civil'],
            ['nome' => 'Juliana Costa',        'email' => 'juliana.costa@exemplo.com',   'curso' => 'Engenharia de Software'],
            ['nome' => 'Rafael Oliveira',      'email' => 'rafael.oliveira@exemplo.com', 'curso' => 'Medicina'],
            ['nome' => 'Beatriz Almeida',      'email' => 'beatriz.almeida@exemplo.com', 'curso' => 'Direito'],
            ['nome' => 'Lucas Ferreira',       'email' => 'lucas.ferreira@exemplo.com',  'curso' => 'Administração'],
            ['nome' => 'Camila Rodrigues',     'email' => 'camila.rodrigues@exemplo.com','curso' => 'Engenharia de Software'],
        ];

        foreach ($alunos as $aluno) {
            Aluno::create($aluno);
        }
    }
}