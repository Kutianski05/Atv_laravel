<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['nome', 'email', 'curso', 'turma_id', 'user_id'];

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }


    public function scopeDoCurso(Builder $query, string $curso): Builder
    {
        return $query->where('curso', $curso);
    }

    public function scopeNomeContem(Builder $query, string $palavra): Builder
    {
        return $query->where('nome', 'like', "%{$palavra}%");
    }

    public function scopeRecentes(Builder $query, int $dias = 7): Builder
    {
        return $query->where('created_at', '>=', now()->subDays($dias))
                     ->orderBy('created_at', 'desc');
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}