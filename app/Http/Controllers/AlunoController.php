<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'index(): listando todos os alunos.';
    }

       public function create()
    {
        return 'create(): formulário para cadastrar um novo aluno.';
    }


    public function store(Request $request)
    {
        return 'store(): salvando o novo aluno no banco.';
    }

  
    public function show(string $id)
    {
        return "show(): exibindo os dados do aluno de ID {$id}.";
    }

   
    public function edit(string $id)
    {
        return "edit(): formulário para editar o aluno de ID {$id}.";
    }

   
    public function update(Request $request, string $id)
    {
        return "update(): atualizando o aluno de ID {$id}.";
    }

  
    public function destroy(string $id)
    {
        return "destroy(): removendo o aluno de ID {$id}.";
    }
}

