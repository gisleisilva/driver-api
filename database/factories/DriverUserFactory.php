<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\DriverUser>
 */
class DriverUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primeiro_nome' => $this->faker->firstName(),
            'ultimo_nome' => $this->faker->lastName(),
            'cpf_rne' => $this->faker->unique()->numerify('###########'),
            'email' => $this->faker->unique()->safeEmail(),
            'telefone_celular' => $this->faker->phoneNumber(),
            'data_nascimento' => $this->faker->date(),
            'sexo' => $this->faker->randomElement(['M', 'F', 'O']),
        ];
    }
}
