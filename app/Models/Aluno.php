<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['nome', 'email', 'curso'];

    // Alunos de determinado curso
    public function scopeDoCurso(Builder $query, string $curso): Builder
    {
        return $query->where('curso', $curso);
    }

    // Alunos cujo nome contém determinada palavra
    public function scopeNomeContem(Builder $query, string $palavra): Builder
    {
        return $query->where('nome', 'like', "%{$palavra}%");
    }

    // Alunos cadastrados recentemente
    public function scopeRecentes(Builder $query, int $dias = 7): Builder
    {
        return $query->where('created_at', '>=', now()->subDays($dias))
                     ->orderBy('created_at', 'desc');
    }
}