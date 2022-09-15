<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->unique()->isbn13,
            'email' => $this->faker->unique()->email,
            'data_nascimento' => $this->faker->date,
            'telefone' => $this->faker->phoneNumber,
            'voucher_id' => Voucher::inRandomOrder()->first()->id,
            'curso_id' => Curso::inRandomOrder()->first()->id,
        ];
    }
}
