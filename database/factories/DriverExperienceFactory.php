<?php

namespace Database\Factories;

use App\Models\DriverUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\DriverExperience>
 */
class DriverExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_user_id' => DriverUser::latest()->first()->id,
            'nome_ultima_empresa' => $this->faker->company(),
            'endereco_ultima_empresa' => $this->faker->address(),
            'funcao_cargo_ultima_empresa' => $this->faker->jobTitle(),
            'motivo_desligamento_ultima_empresa' => $this->faker->optional()->text(),
            'mes_ano_admissao' => $this->faker->date(),
            'mes_ano_desligamento' => $this->faker->optional()->date(),
        ];
    }
}
