<?php


namespace Database\Factories;

use App\Models\Notas;
use App\Models\Alunos;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notas>
 */
class NotasFactory extends Factory
{
    protected $model = Notas::Class;
    public function definition(): array
    {
        return [
            'aluno_id' => null,
            'portugues' => $this->faker->numberBetween(0, 20)/2,
            'matematica' => $this->faker->numberBetween(0, 20)/2,
            'ciencias' => $this->faker->numberBetween(0, 20)/2,
            'historia' => $this->faker->numberBetween(0, 20)/2,
            'ingles' => $this->faker->numberBetween(0, 20)/2,
            'geografia' => $this->faker->numberBetween(0, 20)/2,
            'bimestre' => $this->faker->numberBetween(1,4)
        ];
    }
}
