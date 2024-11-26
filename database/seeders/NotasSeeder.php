<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notas;
use App\Models\Alunos;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alunoIds = Alunos::pluck('id')->shuffle();
        foreach ($alunoIds as $alunoId) {
            for ($i = 1; $i <= 4; $i++) {
                $notaAluno = Notas::where('aluno_id', $alunoId)
                                ->where('bimestre', $i)->first();
                if(!$notaAluno){
                    Notas::factory()->create([
                        'aluno_id' => $alunoId,
                        'bimestre' => $i,
                    ]);
                }
            }
        }
    }
}
