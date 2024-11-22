<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos;
use Illuminate\Validation\Rule;
use App\Enums\NivelEnsino;

class AlunosController extends Controller
{
    private function matriculaGen($nome){
        $nomesArr = explode(' ', $nome);
        $iniciais = "";
        foreach($nomesArr as $nome){
            $iniciais .= strtoupper($nome[0]);
        }
        return $iniciais . mt_rand(10000, 99999);
    }

    public function index()
    {
        return ['success' => 'Alunos listados com sucesso!', 'alunos' => Alunos::all()];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_ensino' => 'required|string|max:20',
            'ano' => 'required|string|max:2'
        ]);
        $aluno = Alunos::create(array_merge($validated, ['matricula' => $this->matriculaGen($request->nome)]));

        return ['success' => 'Alunos adicionado com sucesso!', 'aluno' => $aluno->only(['nome', 'matricula', 'ano', 'nivel_ensino'])];
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
