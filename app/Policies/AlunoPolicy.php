<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    /**
     * Admin e professor podem listar/visualizar.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'professor']);
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, ['admin', 'professor']);
    }

    /**
     * Só admin pode cadastrar.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Admin e professor podem editar.
     */
    public function update(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, ['admin', 'professor']);
    }

    /**
     * Só admin pode excluir.
     */
    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}