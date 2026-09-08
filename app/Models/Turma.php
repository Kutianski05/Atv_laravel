<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = ['nome', 'turno'];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}