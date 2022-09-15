<?php

namespace Database\Factories;

use App\Models\Divulgador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'divulgador_id' => Divulgador::inRandomOrder()->first()->id,
            'status' => random_int(0, 1),
        ];
    }
}
