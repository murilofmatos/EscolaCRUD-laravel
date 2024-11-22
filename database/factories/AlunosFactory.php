<?php

namespace Database\Factories;

use App\Models\Alunos;
use App\Enums\NivelEnsino;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alunos>
 */
class AlunosFactory extends Factory
{
    protected $model = Alunos::Class;

    public function definition(): array
    {   
        $nome = $this->faker->name;
        $nomeArr = explode(' ', $nome);
        $iniciais = "";
        for ($i=0; $i < 3; $i++) { 
            if(count($nomeArr)> $i)
            $iniciais .= $nomeArr[$i][0];
        }
        $ano = 0;
        $nivelEnsino = $this->faker->randomElement(NivelEnsino::cases())->value;
        if($nivelEnsino == 'Fundamental 1')
        {
            $ano = $this->faker->numberBetween(1, 5);
        }
        else if($nivelEnsino == 'Fundamental 2')
        {
            $ano = $this->faker->numberBetween(6, 9);
        }
        else
        {
            $ano = $this->faker->numberBetween(1, 3);
        }

        return [
            'nome' => $nome,
            'nivel_ensino' => $nivelEnsino,
            'matricula' => $iniciais . $this->faker->unique()->numerify('####'),
            'ano' => $ano. $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
